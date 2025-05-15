<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Apply for Loan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #fff;
    }
    .loan-container {
      background-color:rgb(189, 182, 228);
      border-radius: 25px;
      box-shadow: 10px 10px 30px rgba(0,0,0,0.4);
      overflow: hidden;
    }
    .loan-img {
      background: url('your-image.jpg') center center/cover no-repeat;
      height: 100%;
      color: yellow;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
      font-size: 1.5rem;
      font-weight: bold;
    }
    .loan-form {
      color: white;
      padding: 2rem;
    }
    .loan-form h2 {
      color: rgb(0, 3, 51);
    }
    .form-control, .form-select {
      border-radius: 10px;
    }
    .btn-submit {
      background-color: #0000cc;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 15px;
    }
    @media (max-width: 767px) {
      .loan-img {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>
<?php
    require "navigation.php";
    ?>

<div class="container py-5">
  <div class="row loan-container">
    <!-- Left Side: Image -->
    <div class="col-md-6 loan-img" style="color: rgb(255, 255, 255);background-image:url('images/graduatebaby.jpg');height:70vh">
      Let's help you catch that dream
    </div>

    <!-- Right Side: Form -->
    <div class="col-md-6 loan-form">
      <h2>Apply for a loan</h2>
      <p>Lorem ipsum dolor sit amet.</p>
      <form id="loanForm">
        <div class="row mb-3">
          <div class="col">
            <input type="text" class="form-control" name="firstname" placeholder="First Name" required>
          </div>
          <div class="col">
            <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
          </div>
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" name="accountNo" placeholder="Account Number" required>
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" name="phone" placeholder="Contact" required>
        </div>
        <div class="mb-3">
          <input type="number" class="form-control" name="amount" placeholder="Amount to borrow" required>
        </div>
        <div class="mb-3">
          <label for="loanType" class="form-label">Loan type</label>
          <select class="form-select" name="loanType" required>
            <option value="">-- Select loan type --</option>
            <option value="Salary loan">Salary loan</option>
            <option value="Vic grow (startup)">Vic grow (startup)</option>
            <option value="School fees loan">School fees loan</option>
            <option value="Emergency loan">Emergency loan</option>
            <option value="Agricultural loan">Agricultural loan</option>
            <option value="Business loan">Business loan</option>
          </select>
        </div>
        <button type="submit" class="btn btn-submit w-100">Submit</button>
      </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
  $('#loanForm').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
      url: 'apply_loan.php',
      type: 'POST',
      data: {
        firstName: $('input[name="firstname"]').val(),
        lastName: $('input[name="lastname"]').val(),
        accountNo: $('input[name="accountNo"]').val(),
        phone: $('input[name="phone"]').val(),
        amount: $('input[name="amount"]').val(),
        loanType: $('select[name="loanType"]').val()
      },
      success: function(response) {
        alert(response);
      },
      error: function() {
        alert('Something went wrong. Please try again.');
      }
    });
  });
</script>

</body>
</html>
