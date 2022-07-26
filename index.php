<?php
// Initialize the session
session_start();

// Make sure the user is logged in
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false) {
    header("location: ./auth/login.php");
    exit;
}

?>
