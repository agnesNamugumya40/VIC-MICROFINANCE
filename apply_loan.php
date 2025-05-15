<?php
require "connect.php";

// Get data from AJAX POST request
$accountNo = $_POST['accountNo'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phone = $_POST['phone'];
$loanType = $_POST['loanType'];
$amount = $_POST['amount'];

// Check if account exists and details match in users table
$checkQuery = "SELECT * FROM users WHERE accountNo = ? AND firstname = ? AND phone = ?";
$checkStmt = $conn->prepare($checkQuery);
$checkStmt->bind_param("sss", $accountNo, $firstName, $phone);
$checkStmt->execute();
$result = $checkStmt->get_result();

if ($result->num_rows > 0) {
    // Insert into loan_requests table
    $insertQuery = "INSERT INTO loan_requests (accountNo, firstName, lastName, phone, loanType, amount) 
                    VALUES (?, ?, ?, ?, ?, ?)";
    $insertStmt = $conn->prepare($insertQuery);

    if ($insertStmt) {
        $insertStmt->bind_param("sssssd", $accountNo, $firstName, $lastName, $phone, $loanType, $amount);
        if ($insertStmt->execute()) {
            echo "Loan request submitted successfully.";
        } else {
            echo "Error inserting loan request: " . $insertStmt->error;
        }
    } else {
        echo "Error preparing insert statement: " . $conn->error;
    }
} else {
    echo "No matching user found with those details.";
}

$conn->close();
?>
