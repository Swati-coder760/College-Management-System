<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    include 'db_connection.php';

    // Retrieve form data
    $fullname = $_POST["fullname"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $degree = $_POST["degree"];
    $institution = $_POST["institution"];
    $major = $_POST["major"];
    $experience = $_POST["experience"];
    $teaching = $_POST["teaching"];
    $research = $_POST["research"];
    $admin = $_POST["admin"];
    $memberships = $_POST["memberships"];
    $awards = $_POST["awards"];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];

    
    $sql = "INSERT INTO new_faculty (fullname, gender, dob, phone, email, address, degree, institution, major, experience, teaching, research, admin, memberships, awards,username,password,usertype) VALUES ('$fullname', '$gender', '$dob', '$phone', '$email', '$address', '$degree', '$institution', '$major', '$experience', '$teaching ', '$research', '$admin', '$memberships', '$awards', '$username', '$password', '$usertype')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: add_student.php");

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    

    // Close database connection
    $conn->close();
}
?>
