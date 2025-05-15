<?php
require "connect.php";
$accountNo = $_POST['accountNo'];

//READ LOAN REQUESTS TABLE TO CHECK FOR THE ACCOUNT NUMBER
$query = $conn->prepare("SELECT status FROM loan_requests WHERE accountNo = ? ORDER BY id DESC LIMIT 1");
$query->bind_param("s", $accountNo);
$query->execute();
$result = $query->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['status'];              
} else {
    echo "No loan request found.";
}

$conn->close();
?>
