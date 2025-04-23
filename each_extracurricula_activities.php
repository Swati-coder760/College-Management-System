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
      $sql = "SELECT * FROM activities WHERE id = $id";
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
        $activity_name = $row['activity_name'];
        $activity_description = $row['activity_description'];
        $activity_category = $row['activity_category'];
        $activity_datetime = $row['activity_datetime'];
        $activity_location = $row['activity_location'];
        $activity_organizer = $row['activity_organizer'];
        $registration_deadline = $row['registration_deadline'];
        $activity_requirements = $row['activity_requirements'];
        $activity_contact = $row['activity_contact'];
?>

    <div class="dashboard">
    <div class="widget">

    <h2>Welcome to dashboard</h2></div>
    <div class="content">
    <div class="widget">
          <?php 
        echo "<p>Activity Name: " . $row["activity_name"] . "</p>";
        echo "<p>Activity Description : " . $row["activity_description"] . "</p>";
        echo "<p>Activity Category: " . $row["activity_category"] . "</p>";
        echo "<p>Activity Datetime: " . $row["activity_datetime"] . "</p>";
        echo "<p>Activity Location: " . $row["activity_location"] . "</p>";
        echo "<p>Activity Organizer: " . $row["activity_organizer"] . "</p>";
        echo "<p>Registration Deadline: " . $row["registration_deadline"] . "</p>";
        echo "<p>Activity Requirements: " . $row["activity_requirements"] . "</p>";
        echo "<p>Activity Contact: " . $row["activity_contact"] . "</p>";
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