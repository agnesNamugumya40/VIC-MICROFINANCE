<?php
session_start(); // Start session

require "connect.php";

// Sanitize inputs
$email = trim($_POST['email']);
$password = trim($_POST['password']);

// Check user_credentials table
$sql = "SELECT * FROM user_credentials WHERE email = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $_SESSION['user_email'] = $email; // Store email in session
    echo "success";
} else {
    echo "Incorrect email or password";
}

$stmt->close();
$conn->close();
?>
