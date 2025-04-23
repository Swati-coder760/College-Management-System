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

    <h2>Welcome to dashboard</h2></div>
    <div class="content">
    <div class="widget">
            <p>Admin details .</p>
        </div>
        <div class="widget">
            <h2>Announcements</h2>
            <p>No announcements.</p>
        </div>
        <div class="widget">
            <h2>Important Dates</h2>
            <p>Next Exam: <?php $current_date = date("Y-m-d"); echo $current_date;?></p>
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