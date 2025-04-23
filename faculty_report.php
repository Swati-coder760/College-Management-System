<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Management System</title>
</head>
<body>
<h2>Faculty Management System</h2>
    <a href="add_faculty.php">Add New User</a>
<br><br>
<?php
    // Include database connection
    include'db_connection.php';

// Select data from the users table
    $sql = "SELECT*FROM faculty";
    $result = $conn->query($sql);

    // Check if there are any rows returned
    if ($result->num_rows>0) {
        // Output data of each row
        echo"<table border='1'>";
        echo"<tr><th>ID</th><th>username</th><th>email</th><th>phone</th><th>Actions</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo"<tr>";	
            echo"<td>". $row["id"]. "</td>";
            echo"<td>". $row["faculty_name"]. "</td>";
            echo"<td>". $row["email"]. "</td>";
            echo"<td>". $row["phone"]. "</td>";
            echo"<td>";
            echo"<a href='edit_faculty.php?id=". $row["id"]. "'>Edit</a> | ";
            echo"<a href='delete_faculty.php?id=". $row["id"]. "' onclick='return confirm(\"Are you sure you want to delete this user?\")'>Delete</a>";
            echo"</td>";
            echo"</tr>";
        }
        echo"</table>";
    } else {
        echo"0 results";
    }


// Close connection
    $conn->close();
    ?>
</body>
</html>














