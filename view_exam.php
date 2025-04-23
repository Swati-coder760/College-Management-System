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
        <div class="widget">
            <h2>Welcome to Exam Management</h2>
        </div>
        <div class="content">
            <div class="widget">

<?php
// Include database connection
include 'db_connection.php';

// Fetch all exams from the database
$sql = "SELECT * FROM exam";
$result = mysqli_query($conn, $sql);

// Check if any exams are found
if (mysqli_num_rows($result) > 0) {
    echo "<h2>Exam List</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Exam Name</th><th>Exam Code</th><th>Description</th><th>Date</th><th>Time</th><th>Location</th><th>Instructor</th><th>Total Marks</th><th>Passing Marks</th></tr>";
    
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>". $row["exam_name"]. "</td>";
        echo "<td>". $row["exam_code"]. "</td>";
        echo "<td>". $row["description"]. "</td>";
        echo "<td>". $row["exam_date"]. "</td>";
        echo "<td>". $row["exam_time"]. "</td>";
        echo "<td>". $row["location"]. "</td>";
        echo "<td>". $row["instructor"]. "</td>";
        echo "<td>". $row["total_marks"]. "</td>";
        echo "<td>". $row["passing_marks"]. "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No exams found.";
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
