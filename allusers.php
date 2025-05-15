<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>All Users|Vic</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f8ff;
    }
    header {
      background-color:rgb(13, 37, 253);
      color: white;
      padding: 20px;
      text-align: center;
    }
    .table thead {
      background-color: #0d6efd;
      color: white;
    }
    .container {
      margin-top: 40px;
    }
  </style>
</head>
<body>

<header>
  <h2>All Registered Users</h2>
  <p>List of users added to the Vic Microfinance platform</p>
</header>

<div class="container">
  <div class="table-responsive">
    <table class="table table-bordered table-striped align-middle">
      <thead>
        <tr>
          <th>Account Number</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Date Added</th>
          <th>Status</th> 
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>

        <?php
        // Fetch all users from the database
        require "connect.php";

        $sql = "SELECT users.*, loan_requests.status AS loan_status FROM users LEFT JOIN loan_requests ON users.accountNo = loan_requests.accountNo";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['accountNo']}</td>
                    <td>{$row['firstname']} {$row['lastname']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['phone']}</td>
                    <td>{$row['date_added']}</td>
                    <td>{$row['loan_status']}</td> <!-- Displaying the loan status -->
                    <td>
                        <button class='btn btn-danger delete-btn' data-id='{$row['accountNo']}'>Delete</button>
                    </td>
                  </tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Confirmation Modal for Delete USING BOOTSTRAP -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this user?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" id="deleteConfirm">Delete</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  $(document).ready(function() {
    // Delete user

    $(".delete-btn").click(function() {
      const accountNo = $(this).data("id");  
      $("#deleteConfirm").click(function() {
        $.ajax({
          url: 'delete_user.php',
          method: 'POST',
          data: { accountNo: accountNo },
          success: function(response) {
            alert(response);
            location.reload(); // Reload the page to reflect changes
          }
        });
      });

      $('#deleteModal').modal('show');
    });
  });
</script>

</body>
</html>
