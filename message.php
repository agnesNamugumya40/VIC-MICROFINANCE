<?php
  require "connect.php";
// Receive POST data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Basic validation
if (empty($name) || empty($email) || empty($message)) {
    die("All fields are required.");
}

// Prepare and execute insert query (procedural)
$query = "INSERT INTO inquiries (name, email, message) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $query); //to prepare the above query on the server

if ($stmt) {              //if query is prepared on server
    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);   //binds actual values to the placeholders in te query
    if (mysqli_stmt_execute($stmt)) {
        echo "success";
    } else {
        echo "error executing statement";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "error preparing statement";
}

// Close connection
mysqli_close($conn);
?>
