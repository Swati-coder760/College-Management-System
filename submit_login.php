<?php
// Start a PHP session
session_start();
include 'db_connection.php';
//echo "ggg";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "ggg1";
    $usertype=$_POST['usertype'] ;

    echo $usertype;
    if($usertype==='admin'){
        if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['usertype'])) {
            // Retrieve username, password, and usertype from the form
            $username = $_POST['username'];
            $password = $_POST['password'];
            $usertype = $_POST['usertype'];
    
            // echo $username;
            // echo $password;
            
    
            // Connect to the database (replace these values with your database credentials)
         
    
            // Prepare SQL statement to fetch user data from the database
            $sql = "SELECT * FROM admin WHERE admin_name = '$username' AND password = '$password'AND  usertype = '$usertype'";
            $result = $conn->query($sql);
    //print_r($result);
    
            //Check if the user exists in the database
            if ($result->num_rows!=0) {
                echo "inside";
                // Set session variables
               $_SESSION['username'] = $username;
               $_SESSION['usertype'] = $usertype;
    
                // Redirect to the home page or dashboard after successful login
    header("Location: admin_dashboard.php");
                exit();
            } 
            else{
            header("Location: index.php");
            }
          
     }
    
    }
    // Check if both username and password are provided
    if($usertype==='student'){
        
    
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['usertype'])) {
        // Retrieve username, password, and usertype from the form
        $username = $_POST['username'];
        $password = $_POST['password'];
        $usertype = $_POST['usertype'];

        // echo $username;
        // echo $password;
        

        // Connect to the database (replace these values with your database credentials)
     

        // Prepare SQL statement to fetch user data from the database
        $sql = "SELECT * FROM students WHERE username = '$username' AND password = '$password'AND  usertype = '$usertype'";
        $result = $conn->query($sql);
//print_r($result);

        //Check if the user exists in the database
        if ($result->num_rows!=0) {
            echo "inside";
            // Set session variables
           $_SESSION['username'] = $username;
           $_SESSION['usertype'] = $usertype;

            // Redirect to the home page or dashboard after successful login
header("Location: student_dashboard.php");
            exit();
        } 
        else{
            header("Location: index.php");
            }
      
 }
}


if($usertype==='faculty'){
        
    
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['usertype'])) {
        // Retrieve username, password, and usertype from the form
        $username = $_POST['username'];
        $password = $_POST['password'];
        $usertype = $_POST['usertype'];

        // echo $username;
        // echo $password;
        

        // Connect to the database (replace these values with your database credentials)
     

        // Prepare SQL statement to fetch user data from the database
        $sql = "SELECT * FROM new_faculty WHERE username = '$username' AND password = '$password'AND  usertype = '$usertype'";
        $result = $conn->query($sql);
//print_r($result);

        //Check if the user exists in the database
        if ($result->num_rows!=0) {
            echo "inside";
            // Set session variables
           $_SESSION['username'] = $username;
           $_SESSION['usertype'] = $usertype;

            // Redirect to the home page or dashboard after successful login
header("Location: teacher_dashboard.php");
            exit();
        } 
        else{
            header("Location: index.php");
            }
      
 }
}


    }
?>
