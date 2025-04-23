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

    <h2>Welcome to USER DASHBOARD</h2></div>
    <div class="content">
    <div class="widget">
    <?php
    // Include database connection
    include 'db_connection.php';

    // Select data from the user table
    $sql = "SELECT * FROM faculty";
    $result = $conn->query($sql);

    // Check if there are any rows returned
    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Faculty Name</th><th>Phone</th><th>Emaill</th><th>Type</th><th>Action</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>". $row["id"]. "</td>";
            echo "<td>". $row["faculty_name"]. "</td>";
            echo "<td>". $row["phone"]. "</td>";
            echo "<td>". $row["email"]. "</td>";
            echo "<td>". $row["usertype"]. "</td>";
            echo "<td><a href='view_each_staff.php?id=". $row["id"]. "'>Details</a></td> ";

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