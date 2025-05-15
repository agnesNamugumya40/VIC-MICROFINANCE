<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Loan Services | Vic Microfinance</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
    require "navigation.php";
    ?>

  <!-- Header Section -->
  <header class=" text-white text-center " style="background-color:rgb(3, 0, 207)" style="padding-top:90px;">
    <h1 class="display-4">Our Loan Services</h1>
    <p class="lead">Choose the loan that best suits your financial journey</p>
  </header>

  <!-- Main Content Section -->
  <section class="container my-5">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
      
      <!-- Business Loan Card -->
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Business Loan</h5>
            <p class="card-text">Grow your business with flexible repayment options and low interest rates tailored for entrepreneurs.</p>
            <a href="login.php" class="btn btn-primary">Apply</a>
          </div>
        </div>
      </div>

      <!-- Personal Loan Card -->
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Personal Loan</h5>
            <p class="card-text">Get funds for emergencies, education, or personal needs. Simple terms, quick disbursement.</p>
            <a href="login.php" class="btn btn-primary">Apply</a>
          </div>
        </div>
      </div>

      <!-- Group Loan Card -->
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Group Loan</h5>
            <p class="card-text">Ideal for small community groups or associations. Shared responsibility, shared success.</p>
            <a href="login.php" class="btn btn-primary">Apply</a>
          </div>
        </div>
      </div>

      <!-- Agricultural Loan Card -->
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Agricultural Loan</h5>
            <p class="card-text">Support for farmers to invest in seeds, tools, and livestock. Empowering rural development.</p>
            <a href="login.php" class="btn btn-primary">Apply</a>
          </div>
        </div>
      </div>

    </div>
</section>
  <!-- Bootstrap JS and Popper.js CDNS-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
<?php 
 require "footer.php";
?>