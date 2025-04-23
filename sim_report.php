<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Management</title>
</head>
<body>
    <h2>Student Information Management</h2>
    <a href="add_sim.html">Add New SIM</a>
    <br><br>
    <?php
    // Include database connection
    include 'db_connection.php';

    // Select data from the sim table
    $sql = "SELECT * FROM sim";
    $result = $conn->query($sql);

    // Check if there are any rows returned
    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>name</th><th>address</th><th>currentcourse</th><th>previouscourse</th><th>phoneno</th><th>email</th><th>document</th><th>Actions</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>". $row["id"]. "</td>";
            echo "<td>". $row["name"]. "</td>";
            echo "<td>". $row["address"]. "</td>";
            echo "<td>". $row["currentcourse"]. "</td>";
            echo "<td>". $row["previouscourse"]. "</td>";
            echo "<td>". $row["phoneno"]. "</td>";
            echo "<td>". $row["email"]. "</td>";
            echo "<td>". $row["document"]. "</td>";
            echo "<td>";
            echo "<a href='edit_sim.php?id=". $row["id"]. "'>Edit</a>  ";
            echo "<a href='delete_sim.php?id=". $row["id"]. "' onclick='return confirm(\"Are you sure you want to delete this user?\")'>Delete</a>";
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



