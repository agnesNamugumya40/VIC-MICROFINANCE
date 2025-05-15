<?php
require "connect.php";

$email = trim($_POST['email']);
$password = trim($_POST['password']);
$accountNo = trim($_POST['accountNo']);

// Check if accountNo and email exist in users table
$check = mysqli_prepare($conn, "SELECT * FROM users WHERE accountNo = ? AND email = ?");
mysqli_stmt_bind_param($check, "ss", $accountNo, $email);
mysqli_stmt_execute($check);
$result = mysqli_stmt_get_result($check);

if (mysqli_num_rows($result) == 0) {
    echo "<span style='color:red;'>Account number and email do not match our records.</span>";
    mysqli_stmt_close($check);
    mysqli_close($conn);
    exit;
}
mysqli_stmt_close($check);

// Check if already registered
$check2 = mysqli_prepare($conn, "SELECT * FROM user_credentials WHERE accountNo = ?");
mysqli_stmt_bind_param($check2, "s", $accountNo);
mysqli_stmt_execute($check2);
$result2 = mysqli_stmt_get_result($check2);

if (mysqli_num_rows($result2) > 0) {
    echo "This account is already registered.";
    mysqli_stmt_close($check2);
    mysqli_close($conn);
    exit;
}
mysqli_stmt_close($check2);

// Save credentials
$insert = mysqli_prepare($conn, "INSERT INTO user_credentials (email, password, accountNo) VALUES (?, ?, ?)");
mysqli_stmt_bind_param($insert, "sss", $email, $password, $accountNo);

if (mysqli_stmt_execute($insert)) {
    echo "Registration successful! You can now log in.";
} else {
    echo "Failed to register user.";
}

mysqli_stmt_close($insert);
mysqli_close($conn);
?>
