<?php
// Check if the form is submitted
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $curriculum_name = $_POST['curriculum_name'];
    $curriculum_code = $_POST['curriculum_code'];
    $description = $_POST['description'];
    $educational_goals = $_POST['educational_goals'];
    $grade_levels = $_POST['grade_levels'];
    $sql = "INSERT INTO curriculum (curriculum_name, curriculum_code, description, educational_goals, grade_levels) VALUES ('$curriculum_name', '$curriculum_code', '$description', '$educational_goals', '$grade_levels')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    
    // Redirect to a success page or display a success message
    header("Location: curriculum.php");
    exit;
} else {
    // If the form is not submitted, redirect to an error page or display an error message
    // header("Location: error.php");
    // exit;
}
?>
