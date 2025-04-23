<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    include 'db_connection.php';

    // Retrieve form data
    $activity_name = $_POST['activity_name'];
    $activity_description = $_POST['activity_description'];
    $activity_category = $_POST['activity_category'];
    $activity_datetime = $_POST['activity_datetime'];
    $activity_location = $_POST['activity_location'];
    $activity_organizer = $_POST['activity_organizer'];
    $activity_requirements = $_POST['activity_requirements'];
    $registration_deadline = $_POST['registration_deadline'];
    $activity_contact = $_POST['activity_contact'];

    // Processing the uploaded file (image/logo)
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["activity_image"]["name"]);

    // Move the uploaded file to the uploads directory
    if (move_uploaded_file($_FILES["activity_image"]["tmp_name"], $target_file)) {
        // SQL query to insert activity data into the database
        $sql = "INSERT INTO activities (activity_name, activity_description, activity_category, activity_datetime, activity_location, activity_organizer, activity_requirements, registration_deadline, activity_contact, activity_image) VALUES ('$activity_name', '$activity_description', '$activity_category', '$activity_datetime', '$activity_location', '$activity_organizer', '$activity_requirements', '$registration_deadline', '$activity_contact', '$target_file')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
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
