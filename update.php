<?php
// update_user.php
require "connect.php";

// Get posted data from AJAX
$accountNo = $_POST['accountNo'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Prepare and execute update
$sql = "UPDATE users SET firstname = ?, lastname = ?, email = ?, phone = ? WHERE accountNo = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $firstName, $lastName, $email, $phone, $accountNo);

if ($stmt->execute()) {
    echo "User details updated successfully.";
} else {
    echo "Failed to update user: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
