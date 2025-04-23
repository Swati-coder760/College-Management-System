<?php
// Include database connection
include 'db_connection.php';

// Check if firstname is set and not empty
if(isset($_POST['firstname']) && !empty($_POST['firstname'])){
    // Sanitize input to prevent SQL injection
    $selectedFirstName = mysqli_real_escape_string($conn, $_POST['firstname']);

    // Query to retrieve last name based on first name
    $query = "SELECT lastname FROM user WHERE firstname = '$selectedFirstName'";
    $result = mysqli_query($conn, $query);

    // Check if query was successful
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $lastname = $row['lastname'];
        echo $lastname;
    } else {
        echo "No matching last name found";
    }
} else {
    echo "Please select a first name";
}

// Close the database connection
mysqli_close($conn);
?>
