<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>User Management System</title>
    <style>
            .widget {
            background-color: #f2f2f2;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            margin-left:-70px;
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
<div class="container">
<div class="container-fluid">
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-8">
        


    <?php
    // Include database connection
    //session_start();
    include 'db_connection.php';

    $user=$_SESSION['username'];
    //echo "user".$user;
    // Select data from the user table
    $sql = "SELECT * FROM students where username='$user'";
    $result = $conn->query($sql);

    // Check if there are any rows returned
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {


        ?>
<div class="content">
<div class="widget">
        <h2>Student Details:</h2>
<?php
        echo "<p>Full Name: " . $row["first_name"] . " " . $row["last_name"] . "</p>";
        echo "<p>Date of Birth: " . $row["date_of_birth"] . "</p>";
        echo "<p>Gender: " . $row["gender"] . "</p>";
        echo "<p>Email: " . $row["email"] . "</p>";
        echo "<p>Contact Number: " . $row["contact_number"] . "</p>";
        echo "<p>Address: " . $row["address"] . "</p>";
        echo "<p>Course: " . $row["course_name"] . "</p>";
        echo "<p>Admission Year: " . $row["admission_year"] . "</p>";
        echo "<p>Emergency Contact Person: " . $row["emergency_contact_person"] . "</p>";
        echo "<p>Emergency Contact Number: " . $row["emergency_contact_number"] . "</p>";
        echo "<p>Guardian's Name: " . $row["guardian_name"] . "</p>";
        echo "<p>Guardian's Email: " . $row["guardian_email"] . "</p>";
        echo "<p>Guardian's Contact Number: " . $row["guardian_contact_number"] . "</p>";
        echo "<p>Student Photo: <img src='" . $row["student_photo"] . "' alt='Student Photo'></p>";

?>        
    </div>
  
</div>
</div>

        <?php
     
        }
    }
   
    else {
        echo "0 results";
    }

    // Close connection
    $conn->close();
    
    ?>
    </div>
    </div>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<?php
    // Include database connection
    include'footer.php';
?>
</html>



