<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission process management</title>
</head>
<body>
    <h2>Admission process management</h2>
    <a href="add_apm.html">Add New User</a>
    <br><br>
    <?php
    // Include database connection
    include 'db_connection.php';

    // Select data from the users table
    $sql = "SELECT * FROM newproject";
    $result = $conn->query($sql);

    // Check if there are any rows returned
    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>studentname</th><th>coursename</th><th>checkcoursefees</th><th>semester</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>". $row["id"]. "</td>";
            echo "<td>". $row["studentname"]. "</td>";
            echo "<td>". $row["coursename"]. "</td>";
            echo "<td>". $row["checkcoursefees"]. "</td>";
            echo "<td>". $row["semester"]. "</td>";
            echo "<td>";
            echo "<a href='edit_apm.php?id=". $row["id"]. "'>Edit</a> | ";
            echo "<a href='delete_apm.php?id=". $row["id"]. "' onclick='return confirm(\"Are you sure you want to delete this user?\")'>Delete</a>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    // Close connection
    $conn->close();
    ?>
</body>
</html>