<?php

  require "connect.php";
  
$accountNo = $_GET['accountNo'];

$sql = "SELECT * FROM users WHERE accountNo = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $accountNo);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    echo json_encode(mysqli_fetch_assoc($result));
} else {
    echo json_encode([]);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
