<?php
// Database connection
require "connect.php";

// Get form data
$accountNo = $_POST['accountNo'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$deposit = $_POST['deposit'];

// Check if account number already exists
$check = mysqli_prepare($conn, "SELECT accountNo FROM users WHERE accountNo = ?");
mysqli_stmt_bind_param($check, "s", $accountNo);
mysqli_stmt_execute($check);
mysqli_stmt_store_result($check);

if (mysqli_stmt_num_rows($check) > 0) {
    echo "Account number already exists!";
    mysqli_stmt_close($check);
    mysqli_close($conn);
    exit;
}
mysqli_stmt_close($check);

// Insert user into database
$stmt = mysqli_prepare($conn, "INSERT INTO users (accountNo, firstname, lastname, phone, email, accountBalance) VALUES (?, ?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "sssssd", $accountNo, $firstname, $lastname, $phone, $email, $deposit);

if (mysqli_stmt_execute($stmt)) {
    echo "User added successfully!";
} else {
    echo "Error adding user: " . mysqli_stmt_error($stmt);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
