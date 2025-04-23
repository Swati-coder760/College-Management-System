<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection
    include 'db_connection.php';

    // Escape user inputs for security
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $zip = mysqli_real_escape_string($conn, $_POST['zip']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $prev_school = mysqli_real_escape_string($conn, $_POST['prev_school']);
    $education_level = mysqli_real_escape_string($conn, $_POST['education_level']);
    $grad_year = mysqli_real_escape_string($conn, $_POST['grad_year']);
    $gpa = mysqli_real_escape_string($conn, $_POST['gpa']);
    $program = mysqli_real_escape_string($conn, $_POST['program']);
    $start_date = mysqli_real_escape_string($conn, $_POST['start_date']);
    $sat_score = mysqli_real_escape_string($conn, $_POST['sat_score']);
    $act_score = mysqli_real_escape_string($conn, $_POST['act_score']);
    $toefl_score = mysqli_real_escape_string($conn, $_POST['toefl_score']);
    $activities = mysqli_real_escape_string($conn, $_POST['activities']);
    $volunteer_exp = mysqli_real_escape_string($conn, $_POST['volunteer_exp']);
    $personal_statement = mysqli_real_escape_string($conn, $_POST['personal_statement']);
    $agree = isset($_POST['agree']) ? 1 : 0; // Checkbox value (1 for checked, 0 for unchecked)

    // Handle file uploads
    $transcript_file = $_FILES['transcript']['name'];
    $recommendation_file = $_FILES['recommendation']['name'];
    $target_dir = "uploads/";
    $transcript_target_file = $target_dir . basename($transcript_file);
    $recommendation_target_file = $target_dir . basename($recommendation_file);

    // Move uploaded files to the uploads directory
    move_uploaded_file($_FILES["transcript"]["tmp_name"], $transcript_target_file);
    move_uploaded_file($_FILES["recommendation"]["tmp_name"], $recommendation_target_file);

    // Insert data into the database
    $sql = "INSERT INTO applications (first_name, last_name, gender, dob, phone, email, address, city, state, zip, country, prev_school, education_level, grad_year, gpa, program, start_date, sat_score, act_score, toefl_score, activities, volunteer_exp, personal_statement, transcript_file, recommendation_file, agree) 
            VALUES ('$first_name', '$last_name', '$gender', '$dob', '$phone', '$email', '$address', '$city', '$state', '$zip', '$country', '$prev_school', '$education_level', '$grad_year', '$gpa', '$program', '$start_date', '$sat_score', '$act_score', '$toefl_score', '$activities', '$volunteer_exp', '$personal_statement', '$transcript_file', '$recommendation_file', '$agree')";

    if (mysqli_query($conn, $sql)) {
        echo "Application submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
}
?>
