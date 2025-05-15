<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Loan Requests</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Pending Loan Requests</h2>

        <table class="table table-bordered bg-white">
            <thead class="table-primary" >
                <tr>
                    <th>Account No</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Amount</th>
                    <th>Loan Type</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                 require "connect.php";
                 $query = "SELECT * FROM loan_requests WHERE status = 'Pending'";
                 $result = mysqli_query($conn, $query);
                 
                 if (mysqli_num_rows($result) > 0) {
                     while ($row = mysqli_fetch_assoc($result)) {
                         echo "<tr id='row-{$row['accountNo']}'>";
                         echo "<td>{$row['accountNo']}</td>";
                         echo "<td>{$row['firstName']} {$row['lastName']}</td>";
                         echo "<td>{$row['phone']}</td>";
                         echo "<td>{$row['amount']}</td>";
                         echo "<td>{$row['loanType']}</td>";
                         echo "<td id='status-{$row['accountNo']}'>{$row['status']}</td>";
                         echo "<td>
                                 <button class='btn btn-success btn-sm approve' data-id='{$row['accountNo']}'>Approve</button>
                                 <button class='btn btn-danger btn-sm reject' data-id='{$row['accountNo']}'>Reject</button>
                               </td>";
                         echo "</tr>";
                     }
                 } else {
                     echo "<tr><td colspan='7' class='text-center'>No pending loan requests.</td></tr>";
                 }
                 
                 mysqli_close($conn);
                 
            ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('.approve, .reject').on('click', function() {
            let accountNo = $(this).data('id');
            let action = $(this).hasClass('approve') ? 'approve' : 'reject';

            $.ajax({
                url: 'process_loan.php',
                type: 'POST',
                data: {
                    accountNo: accountNo,
                    action: action
                },
                success: function(response) {
                    alert(response);
                    if (action === 'approve') {
                        $('#status-' + accountNo).text('Approved');
                    } else {
                        $('#status-' + accountNo).text('Rejected');
                    }
                    $('#row-' + accountNo + ' .approve, #row-' + accountNo + ' .reject').remove(); // Remove buttons
                }
            });
        });
    </script>
</body>
</html>
