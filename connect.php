<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "vic_microfinance_official";

// Establish connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    // Output the error message if connection fails
    die("Connection failed: " . mysqli_connect_error());
}
?>
