<?php
// Include database connection
include 'db_connection.php';

// Check if firstname is set and not empty
if(isset($_POST['faculty_name']) && !empty($_POST['faculty_name'])){
    // Sanitize input to prevent SQL injection
    $faculty_name = mysqli_real_escape_string($conn, $_POST['faculty_name']);

    // Query to retrieve last name and user type based on first name
    $query = "SELECT * FROM faculty WHERE faculty_name = '$faculty_name'";
    $result = mysqli_query($conn, $query);

    // Check if query was successful
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $userData = array(
            'usertype' => $row['usertype']
        );
        // Encode the data as JSON and echo it
        echo json_encode($userData);
    } else {
        echo "No matching user found";
    }
} else {
    echo "Please select a first name";
}

// Close the database connection
mysqli_close($conn);
?>
