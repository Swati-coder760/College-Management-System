<?php
include 'db_connection.php';
// Retrieve form data
$course_name = $_POST['course_name'];
$course_code = $_POST['course_code'];
$course_description = $_POST['course_description'];
$course_fees = $_POST['course_fees'];
$credits = $_POST['credits'];
$prerequisites = $_POST['prerequisites'];
$instructor = $_POST['instructor'];
$schedule = $_POST['schedule'];
$location = $_POST['location'];
$enrollment_limit = $_POST['enrollment_limit'];
$resources_needed = $_POST['resources_needed'];
$grading_scale = $_POST['grading_scale'];
$assessment_methods = $_POST['assessment_methods'];
$communication_channels = $_POST['communication_channels'];
$additional_notes = $_POST['additional_notes'];


// Prepare SQL statement to insert data into the database
$sql = "INSERT INTO courses (course_name, course_code,course_fees, course_description, credits, prerequisites, instructor, schedule, location, enrollment_limit, resources_needed, grading_scale, assessment_methods, communication_channels, additional_notes) VALUES ('$course_name', '$course_code', '$course_fees','$course_description', '$credits', '$prerequisites', '$instructor', '$schedule', '$location', '$enrollment_limit', '$resources_needed', '$grading_scale', '$assessment_methods', '$communication_channels', '$additional_notes')";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: add_courses.php");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
