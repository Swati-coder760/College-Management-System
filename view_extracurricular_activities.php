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

    <h2>View extracurricular Activity</h2></div>
    <div class="content">
    <div class="widget">
    <?php
    // Include database connection
    include 'db_connection.php';

    // Select data from the user table
    $sql = "SELECT * FROM activities";
    $result = $conn->query($sql);

    // Check if there are any rows returned
    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Activity Name</th><th>Activity Description</th><th>Activity Category</th><th>Activity Datetime</th><th>Activity Organizer</th><th>Actions</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>". $row["id"]. "</td>";
            echo "<td>". $row["activity_name"]. "</td>";
            echo "<td>". $row["activity_description"]. "</td>";
            echo "<td>". $row["activity_category"]. "</td>";
            echo "<td>". $row["activity_datetime"]. "</td>";
            echo "<td>". $row["activity_organizer"]. "</td>";
            echo "<td>";
            echo "<a href='each_extracurricula_activities.php?id=". $row["id"]. "'>Detail</a> ";
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