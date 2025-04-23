<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    include 'db_connection.php';

    // Retrieve form data
    $student_id = $_POST['student_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $address = $_POST['address'];
    $course_name = $_POST['course_name'];
    $admission_year = $_POST['admission_year'];
    $emergency_contact_person = $_POST['emergency_contact_person'];
    $emergency_contact_number = $_POST['emergency_contact_number'];
    $guardian_name = $_POST['guardian_name'];
    $guardian_email = $_POST['guardian_email'];
    $guardian_contact_number = $_POST['guardian_contact_number'];
    $date_of_admission = $_POST['date_of_admission'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];

    // Processing the uploaded file (student photo)
    $target_dir = "student_photos/";
    $target_file = $target_dir . basename($_FILES["student_photo"]["name"]);

    // Move the uploaded file to the student_photos directory
    if (move_uploaded_file($_FILES["student_photo"]["tmp_name"], $target_file)) {
        // SQL query to insert student data into the database
        $sql = "INSERT INTO students (student_id, first_name, last_name, date_of_birth, gender, email, contact_number, address, course_name,admission_year, date_of_admission,emergency_contact_person, emergency_contact_number, guardian_name, guardian_email, guardian_contact_number, student_photo,username,password,usertype) VALUES ('$student_id', '$first_name', '$last_name', '$date_of_birth', '$gender', '$email', '$contact_number', '$address', '$course_name', '$admission_year','$date_of_admission', '$emergency_contact_person', '$emergency_contact_number', '$guardian_name', '$guardian_email', '$guardian_contact_number', '$target_file','$username','$password','$usertype')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: add_student.php");

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    // Close database connection
    $conn->close();
}
?>
