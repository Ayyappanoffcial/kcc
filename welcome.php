<?php
// Start the session
session_start();

// If session variable is not set, redirect to login page
if (!isset($_SESSION["username"])) {
    echo"<script>window.location.href='logdisplay.php'</script>";
    exit;
}

// Display welcome message
echo "Welcome, " . $_SESSION["username"] . "! You are logged in.";

?>