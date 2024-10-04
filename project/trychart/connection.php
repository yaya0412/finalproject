<?php
// Database credentials
$servername = "localhost";
$username = "root"; // Default username for local servers
$password = ""; // Leave empty if no password is set
$dbname = "companyprofile";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
