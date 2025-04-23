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

    <h2>TIME TABLE FOR ALL</h2></div>
    <div class="content">
    <div class="widget">
    <?php
    // Include database connection
    include 'db_connection.php';

    // Select data from the user table
    $sql = "SELECT * FROM class_timetable";
    $result = $conn->query($sql);

    // Check if there are any rows returned
    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<table border='1'>";
        echo "<tr><th>Sl. No</th><th>Class Name</th><th>semester </th><th>section</th><th>timetable_image</th><th>Action</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>". $row["id"]. "</td>";
            echo "<td>". $row["course_name"]. "</td>";
            echo "<td>". $row["semester"]. "</td>";
            echo "<td>". $row["section"]. "</td>";
            echo "<td>". $row["timetable_image"]. "</td>";
            echo "<td><a href='view_timetable_each_detail.php?id=". $row["id"]. "'>Details</a></td> ";

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