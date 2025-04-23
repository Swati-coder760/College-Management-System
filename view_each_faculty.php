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
      $sql = "SELECT * FROM new_faculty WHERE id = $id";
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
        $fullname = $row["fullname"];
        $gender = $row["gender"];
        $dob = $row["dob"];
        $phone = $row["phone"];
        $email = $row["email"];
        $address = $row["address"];
        $degree = $row["degree"];
        $institution = $row["institution"];
        $major = $row["major"];
        $experience = $row["experience"];
        $teaching = $row["teaching"];
        $research = $row["research"];
        $admin = $row["admin"];
        $memberships = $row["memberships"];
        $awards = $row["awards"];
    
?>

    <div class="dashboard">
    <div class="widget">

    <h2>Welcome to dashboard</h2></div>
    <div class="content">
    <div class="widget">
          <?php 
        echo "<p>Full Name: " . $row["fullname"] . "</p>";
        echo "<p>Email: " . $row["email"] . "</p>";
        echo "<p>Phone: " . $row["phone"] . "</p>";
        echo "<p>Address: " . $row["address"] . "</p>";
        echo "<p>Degree: " . $row["degree"] . "</p>";
        echo "<p>Institution Name: " . $row["institution"] . "</p>";
        echo "<p>Major Subject: " . $row["major"] . "</p>";
        echo "<p>experience : " . $row["experience"] . "</p>";
        echo "<p>Teaching: " . $row["teaching"] . "</p>";
        echo "<p>Research : " . $row["research"] . "</p>";
        echo "<p>Adminstrative responsibilities  : " . $row["admin"] . "</p>";
        echo "<p>Membership : " . $row["memberships"] . "</p>";
        echo "<p>awards: " . $row["awards"] . "</p>";
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