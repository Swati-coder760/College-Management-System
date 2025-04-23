<?php
    // Include database connection
    include 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Curriculum</title>
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
        <div class="content">
            <div class="widget">

<?php
// Include database connection
include 'db_connection.php';

// Fetch all assignments from the database
$sql = "SELECT * FROM assignment";
$result = mysqli_query($conn, $sql);

// Check if any assignments are found
if (mysqli_num_rows($result) > 0) {
    echo "<h2>Assignment List</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Title</th><th>Description</th><th>Semester</th><th>Course ID</th><th>Due Date</th><th>Max Score</th><th>Ation</th></tr>";
    
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>". $row["title"]. "</td>";
        echo "<td>". $row["description"]. "</td>";
        echo "<td>". $row["semester"]. "</td>";
        echo "<td>". $row["course_id"]. "</td>";
        echo "<td>". $row["due_date"]. "</td>";
        echo "<td>". $row["max_score"]. "</td>";
        echo "<td>";
        echo "<a href='edit_assignment.php?id=". $row["assignment_id"]. "'>Edit</a> ";
        echo "<a href='delete_assignment.php?id=". $row["assignment_id"]. "' onclick='return confirm(\"Are you sure you want to delete this assignment?\")'>Delete</a>";
        echo "</td>";

        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No assignments found.";
}

// Close database connection
mysqli_close($conn);
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
