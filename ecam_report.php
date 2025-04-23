<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extra Curricular Activity Management</title>
</head>
<body>
    <h2>Extra Curricular Activity Management</h2>
    <a href="add_ecam.html">Add new ecam</a>
    <br><br>
    <?php
    // Include database connection
    include 'db_connection.php';

    // Select data from the user table
    $sql = "SELECT * FROM ecam";
    $result = $conn->query($sql);

    // Check if there are any rows returned
    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<table border='1'>";
        "<tr><th>ID</th><th>indooractivity</th><th>outdooractivity</th><th>ex_date</th><th>Actions</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>". $row["id"]. "</td>";
            echo "<td>". $row["indooractivity"]. "</td>";
            echo "<td>". $row["outdooractivity"]. "</td>";
            echo "<td>". $row["ex_date"]. "</td>";
            
            
            echo "<td><a href='edit_ecam.php?id=". $row["id"]. "'>Edit</a> ";
            echo "<td><a href='delete_ecam.php?id=". $row["id"]. "' onclick='return confirm(\"Are you sure you want to delete this user?\")'>Delete</a>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo " 0 results ";
    }

    // Close connection
    $conn->close();
    ?>
</body>
</html>



