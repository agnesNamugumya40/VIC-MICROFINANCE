<?php
require "connect.php";

$accountNo = $_POST['accountNo'];
$action = $_POST['action'];

// Fetch the loan request 
$loanCheck = $conn->prepare("SELECT amount FROM loan_requests WHERE accountNo = ? AND status = 'Pending'");
$loanCheck->bind_param("s", $accountNo);
$loanCheck->execute();
$loanResult = $loanCheck->get_result();

if ($loanResult->num_rows === 0) {
    echo "No pending loan found for this account.";
    exit;
}

$loanData = $loanResult->fetch_assoc();
$amount = $loanData['amount'];

if ($action === 'approve') {
    
    // Update loan status
    $updateLoan = $conn->prepare("UPDATE loan_requests SET status = 'Approved' WHERE accountNo = ?");
    $updateLoan->bind_param("s", $accountNo);
    $updateLoan->execute();

    // Update user's account balance
    $updateBalance = $conn->prepare("UPDATE users SET accountBalance = accountBalance + ? WHERE accountNo = ?");
    $updateBalance->bind_param("ds", $amount, $accountNo);
    $updateBalance->execute();

    echo "Loan approved and account balance updated.";
} elseif ($action === 'reject') {
    // Just update the loan status
    $rejectLoan = $conn->prepare("UPDATE loan_requests SET status = 'Rejected' WHERE accountNo = ?");
    $rejectLoan->bind_param("s", $accountNo);
    $rejectLoan->execute();

    echo "Loan request rejected.";
} else {
    echo "Invalid action.";
}

$conn->close();
?>
