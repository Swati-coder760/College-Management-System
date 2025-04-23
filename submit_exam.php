<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection
    include 'db_connection.php';

    // Escape user inputs for security
    $exam_name = mysqli_real_escape_string($conn, $_POST['exam_name']);
    $exam_code = mysqli_real_escape_string($conn, $_POST['exam_code']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $exam_date = mysqli_real_escape_string($conn, $_POST['exam_date']);
    $exam_time = mysqli_real_escape_string($conn, $_POST['exam_time']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $instructor = mysqli_real_escape_string($conn, $_POST['instructor']);
    $total_marks = mysqli_real_escape_string($conn, $_POST['total_marks']);
    $passing_marks = mysqli_real_escape_string($conn, $_POST['passing_marks']);

    // Attempt to insert data into the database
    $sql = "INSERT INTO exam (exam_name, exam_code, description, exam_date, exam_time, location, instructor, total_marks, passing_marks) VALUES ('$exam_name', '$exam_code', '$description', '$exam_date', '$exam_time', '$location', '$instructor', $total_marks, $passing_marks)";

    if (mysqli_query($conn, $sql)) {
        echo "Exam added successfully.";
        header("Location: add_exam.php");

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
}
?>
