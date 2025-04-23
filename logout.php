<?php
// Start a PHP session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect the user back to the login page after logout
header("Location: index.php");
exit();
?>
