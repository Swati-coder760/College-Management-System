<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection
    include 'db_connection.php';

    // Escape user inputs for security
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $course_name = mysqli_real_escape_string($conn, $_POST['course_name']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $semester = mysqli_real_escape_string($conn, $_POST['semester']);
    $due_date = mysqli_real_escape_string($conn, $_POST['due_date']);
    $max_score = mysqli_real_escape_string($conn, $_POST['max_score']);

    // Attempt to insert data into the database
    $sql = "INSERT INTO assignment (student_name,course_name,title, description, semester,  due_date, max_score) 
            VALUES ('$username','$course_name','$title', '$description', '$semester',  '$due_date', $max_score)";

    if (mysqli_query($conn, $sql)) {
        echo "Assignment created successfully.";
        header("Location: add_assignments.php");

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
}
?>
