<?php
    // Include database connection
    include 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Courses</title>
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
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .action-links a {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <?php
        // Include sidebar and header
        include 'sidebar.php';
        include 'header.php';
    ?>
    <div class="dashboard">
        <div class="widget">
            <h2>Welcome to Course Dashboard</h2>
        </div>
        <div class="content">
            <div class="widget">
                <?php
                    // Select data from the course table
                    $sql = "SELECT * FROM courses";
                    $result = $conn->query($sql);

                    // Check if there are any rows returned
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        echo "<table>";
                        echo "<tr><th>Course ID</th><th>Course Name</th><th>COurse Code</th><th>COurse Fees</th><th>Description</th><th>Actions</th></tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>". $row["course_id"]. "</td>";
                            echo "<td>". $row["course_name"]. "</td>";
                            echo "<td>". $row["course_code"]. "</td>";
                            echo "<td>". $row["course_fees"]. "</td>";
                            echo "<td>". $row["course_description"]. "</td>";
                            echo "<td class='action-links'>";
                            echo "<a href='edit_course.php?id=". $row["course_id"]. "'>Edit</a>"; // Edit link
                            echo "<a href='delete_course.php?id=". $row["course_id"]. "' onclick='return confirm(\"Are you sure you want to delete this course?\")'>Delete</a>"; // Delete link
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "No courses found";
                    }

                    // Close connection
                    $conn->close();
                ?>
            </div>
        </div>
    </div>
</body>
<?php
    // Include footer
    include 'footer.php';
?>
</html>
