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

include 'db_connection.php';
if(isset($_GET['id'])){
    //Get the use ID from GET parameter
    $id = $_GET['id'];
    //Retrieve user information from the database based on ID
    $sql = "SELECT * FROM students WHERE id = $id";

// SQL query to retrieve student information
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<p>Student ID: " . $row["student_id"] . "</p>";
        echo "<p>Full Name: " . $row["first_name"] . " " . $row["last_name"] . "</p>";
        echo "<p>Date of Birth: " . $row["date_of_birth"] . "</p>";
        echo "<p>Gender: " . $row["gender"] . "</p>";
        echo "<p>Email: " . $row["email"] . "</p>";
        echo "<p>Contact Number: " . $row["contact_number"] . "</p>";
        echo "<p>Address: " . $row["address"] . "</p>";
        echo "<p>Department: " . $row["department"] . "</p>";
        echo "<p>Admission Year: " . $row["admission_year"] . "</p>";
        echo "<p>Batch: " . $row["batch"] . "</p>";
        echo "<p>Emergency Contact Person: " . $row["emergency_contact_person"] . "</p>";
        echo "<p>Emergency Contact Number: " . $row["emergency_contact_number"] . "</p>";
        echo "<p>Guardian's Name: " . $row["guardian_name"] . "</p>";
        echo "<p>Guardian's Email: " . $row["guardian_email"] . "</p>";
        echo "<p>Guardian's Contact Number: " . $row["guardian_contact_number"] . "</p>";
        echo "<p>Student Photo: <img src='" . $row["student_photo"] . "' alt='Student Photo'></p>";
        echo "<hr>";
    }
} else {
    echo "0 results";
}
$conn->close();
}
?>


<?php
    // Include database connection
    include'footer.php';
?>
</html>    