<?php
//include databse connection
include'db_connection.php';

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $faculty_name = $_POST["faculty_name"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $usertype = $_POST["usertype"];
    

    // SQL statement to insert data into users table
    $sql = "INSERT INTO faculty(faculty_name,password, email, phone,usertype) VALUES ('$faculty_name', '$password','$email', '$phone','$usertype')";


// Execute the query
    if ($conn->query($sql) === TRUE) {
        //echo"New record created successfully";
        header("Location: add_faculty.php");
        exit;
        
    } else {
        echo"Error: " .$sql ."<br>" .$conn->error;
    }
// Select data from the users table
$sql = "SELECT*FROM projectdemo";
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows>0) {
    // Output data of each row
    echo"<h1>FACULTY MANAGEMENT SYSTEM</h1>";
    echo"<table border='1'>";
    echo"<tr><th>Username</th><th>email</th><th>phone</th>th>USERTYPE</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo"<tr><td>". $row["name"]. "</td><td>". $row["email"]. "</td><td>". $row["phone"]. "</td></tr>";
    }
    echo"</table>";
} else {
    echo"0 results";
}

// Close connection
$conn->close();
}
?>
