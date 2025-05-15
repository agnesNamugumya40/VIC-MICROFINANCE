<?php
require "connect.php";

// Get account number from POST
$accountNo = $_POST['accountNo'];

// 1. Delete from user_credentials
$stmt1 = mysqli_prepare($conn, "DELETE FROM user_credentials WHERE accountNo = ?");
mysqli_stmt_bind_param($stmt1, "s", $accountNo);
mysqli_stmt_execute($stmt1);
mysqli_stmt_close($stmt1);

// 2. Delete from loan_requests
$stmt2 = mysqli_prepare($conn, "DELETE FROM loan_requests WHERE accountNo = ?");
mysqli_stmt_bind_param($stmt2, "s", $accountNo);
mysqli_stmt_execute($stmt2);
mysqli_stmt_close($stmt2);

// 3. Delete from users
$stmt3 = mysqli_prepare($conn, "DELETE FROM users WHERE accountNo = ?");
mysqli_stmt_bind_param($stmt3, "s", $accountNo);

if (mysqli_stmt_execute($stmt3)) {
    echo "User deleted successfully!";
} else {
    echo "Failed to delete user: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt3);
mysqli_close($conn);
?>
