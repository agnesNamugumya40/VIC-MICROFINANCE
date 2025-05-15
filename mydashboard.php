<?php
session_start(); // Start the session

$conn = mysqli_connect("localhost", "root", "", "vic_microfinance_official");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get logged in user's email from session
$email = $_SESSION['user_email'];

// Fetch user data based on email
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

// Get latest loan status
$loanStatus = "No loan found";

$sqlLoan = "SELECT status FROM loan_requests WHERE accountNo = ? ORDER BY id DESC LIMIT 1";
$stmtLoan = mysqli_prepare($conn, $sqlLoan);
mysqli_stmt_bind_param($stmtLoan, "s", $user['accountNo']);
mysqli_stmt_execute($stmtLoan);
$resultLoan = mysqli_stmt_get_result($stmtLoan);

if (mysqli_num_rows($resultLoan) > 0) {
    $row = mysqli_fetch_assoc($resultLoan);
    $loanStatus = $row['status'];
}

mysqli_stmt_close($stmt);
mysqli_stmt_close($stmtLoan);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f1f6fe;
            padding: 30px;
        }
        .container {
            max-width: 900px;
            margin: auto;
            background: #f1f6fe;
        }
        .card {
            background: rgb(1, 1, 49);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0px 3px 8px rgba(0,0,0,0.1);
            color:white;
        }
        .card h3 {
            margin-top: 0;
        }
        .btn {
            background-color: #006eff;
            color: white;
            padding: 10px 18px;
            border: none;
            cursor: pointer;
            border-radius: 8px;
        }
        .btn:hover {
            background-color: #0056cc;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Welcome to Your Dashboard</h2>

    <!-- Personal Info Cards -->
    <div class="card">
        <h3>Account Info</h3>
        <p><strong>First Name:</strong> <?php echo $user['firstname']; ?></p>
        <p><strong>Last Name:</strong> <?php echo $user['lastname']; ?></p>
        <p><strong>Account Number:</strong> <?php echo $user['accountNo']; ?></p>
        <p><strong>Account Balance:</strong> UGX <?php echo number_format($user['accountBalance'], 2); ?></p>
        <p><strong>Loan Status:</strong> <?php echo $loanStatus; ?></p>
    </div>

    <!-- Apply for Loan -->
    <div class="card">
        <h3>Apply for a Loan</h3>
        <form action="loan_application.php" method="POST">
            <input type="hidden" name="accountNo" value="<?php echo $user['accountNo']; ?>">
            <button class="btn" type="submit">Apply for Loan</button>
        </form>
    </div>
    <!-- Logout Button -->
<div class="card" style="text-align: right;">
    <form action="logout.php" method="POST">
        <button class="btn" type="submit">Logout</button>
    </form>
</div>

</div>

</body>
</html>
