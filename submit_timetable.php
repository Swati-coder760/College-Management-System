<?php
    include 'db_connection.php';
    echo "kkk";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (isset($_POST['course_name']) && isset($_POST['semester']) && isset($_POST['section']) && isset($_FILES['timetable_image'])) {
        // Store form data in variables
        $course_name = $_POST['course_name'];
        $semester = $_POST['semester'];
        $section = $_POST['section'];


        // Check if the uploaded file is a valid image
        $target_dir = "uploads/"; // Directory where uploaded images will be saved
        $target_file = $target_dir . basename($_FILES["timetable_image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        // Check if file is a JPEG or PNG image
        if($imageFileType != "jpg" && $imageFileType != "png") {
            echo "Sorry, only JPG, PNG files are allowed.";
        } else {
            // Move uploaded file to specified directory
            if (move_uploaded_file($_FILES["timetable_image"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["timetable_image"]["name"])). " has been uploaded.";
             
                // Prepare SQL statement
                $sql = "INSERT INTO class_timetable (course_name, semester, section, timetable_image) VALUES ('$course_name', '$semester', '$section', '$target_file')";

                // Execute the query
                if ($conn->query($sql) === TRUE) {
                    header("Location: add_timetable.php");

                    echo "Class timetable data inserted into database successfully.";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                    // Close statement and connection
                $conn->close();
                
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "Please fill in all required fields.";
    }
} else {
    echo "Form submission method not allowed.";
}
?>
