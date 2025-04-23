<?php
    // Include database connection
    include'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User</title>
    <link rel="stylesheet" href="style.css">
<style>
            .widget {
            background-color: #f2f2f2;
            padding: 20px;
            margin-left: 100px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .widget h2 {
            margin-top: 0;
        }

    </style>
</head>
<body>
<?php
    // Include database connection
    include'sidebar.php';
    include'header.php';
?> 
    <div class="dashboard">
    <div class="widget">

    <h2>Welcome to Faculty  Dahboard</h2></div>
    <div class="content">
    <div class="widget">
    <?php
    // Include database connection
    include 'db_connection.php';

    // Select data from the user table
    $sql = "SELECT * FROM new_faculty";
    $result = $conn->query($sql);

    // Check if there are any rows returned
    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Full Name</th><th>Phone</th><th>Email</th><th>Address</th><th>Degree</th><th>Institution</th><th>Major Subject</th><th>Experience</th><th>Teaching Subject</th><th>Awards</th><th>Actions</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>". $row["id"]. "</td>";
            echo "<td>". $row["fullname"]. "</td>";
            echo "<td>". $row["phone"]. "</td>";
            echo "<td>". $row["email"]. "</td>";
            echo "<td>". $row["address"]. "</td>";
            echo "<td>". $row["degree"]. "</td>";
            echo "<td>". $row["institution"]. "</td>";
            echo "<td>". $row["major"]. "</td>";
            echo "<td>". $row["experience"]. "</td>";
            echo "<td>". $row["teaching"]. "</td>";
            echo "<td>". $row["awards"]. "</td>";
            echo "<td>";
            echo "<a href='edit_faculty.php?id=". $row["id"]. "'>Edit</a> ";
            echo "<a href='delete_faculty.php?id=". $row["id"]. "' onclick='return confirm(\"Are you sure you want to delete this user?\")'>Delete</a>";
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

        </div>
    </div>
</div>
</body>

<?php
    // Include database connection
    include'footer.php';
?>
</html>    