<?php
    // Include database connection
    include'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
<style>
            .widget {
            background-color: #f2f2f2;
            padding: 20px;
            margin-bottom: 20px;
            margin-left: 180px;
            
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

    <div class="content">  

    <div class="widget">  <h2 style="text-align: center">Welcome to Student dashboard</h2>
            <h2>Student Academic</h2>
            <p>Give details .</p>
        </div>
        <div class="widget">
            <h2>Announcements</h2>
            <p>No announcements.</p>
        </div>
        <div class="widget">
            <h2>Important Dates</h2>
            <p>Next Exam: May 5th, 2024</p>
            <p>Registration Deadline: April 30th, 2024</p>
        </div>
    </div>
</div>
</body>

<?php
    // Include database connection
    include'footer.php';
?>
</html>    