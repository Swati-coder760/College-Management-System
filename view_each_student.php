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
    //Include database connection
    include 'db_connection.php';
    //check if thr user ID is provided via GET parameter
    if(isset($_GET['id'])){
      //Get the use ID from GET parameter
      $id = $_GET['id'];
      echo $id;
      //Retrieve user information from the database based on ID
      $sql = "SELECT * FROM syudents WHERE id = $id";
      $result =$conn->query($sql);
      
      if ($result->num_rows > 0){
          //Fetch user data
          $row = $result->fetch_assoc();
        //   $firstname = $row['firstname'];
        //   $lastname = $row['lastname'];
        //   $phoneno = $row['phoneno'];
        //   $email = $row['email'];
        //   $usertype = $row['usertype'];
        //   echo $email;
        $student_id = $row['student_id'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $date_of_birth = $row['date_of_birth'];
        $gender = $row['gender'];
        $email = $row['email'];
        $contact_number = $row['contact_number'];
        $address = $row['address'];
        $department = $row['department'];
        $admission_year = $row['admission_year'];
        $batch = $row['batch'];
        $emergency_contact_person = $row['emergency_contact_person'];
        $emergency_contact_number = $row['emergency_contact_number'];
        $guardian_name = $row['guardian_name'];
        $guardian_email = $row['guardian_email'];
        $guardian_contact_number = $row['guardian_contact_number'];
        $date_of_admission = $row['date_of_admission'];
?>

    <div class="dashboard">
    <div class="widget">

    <h2>Welcome to dashboard</h2></div>
    <div class="content">
    <div class="widget">
          <?php 
        echo "<h3>Student ID: " . $row["student_id"] . "</h3>";
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
          ?>
        </div>
    </div>
</div>
</body>
<?php
        }else{
            echo"User not found.";

        }
    }else{
        echo "User ID not provided.";
    }
        //Close connection
        $conn->close();
        ?>

<?php
    // Include database connection
    include'footer.php';
?>
</html>    