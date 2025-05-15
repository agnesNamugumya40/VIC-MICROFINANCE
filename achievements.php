<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Achievements|Vic</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /*SECOND BLUE NAVIGATION BAR*/
.navbar {
    display: flex;   background-color: rgba(3, 0, 177, 0.9);width: 100%;
     justify-content: space-between; align-items: center; padding: 20px;
     border-bottom-right-radius: 20px;
     border-bottom-left-radius: 20px;
     backdrop-filter: blur(7px);
     flex-wrap: wrap;

   
}
.navbar ul {
    list-style: none; display: flex; margin: 0; padding: 0; 
} 
.navbar ul li { 
   margin-left: 20px; 
}
.navbar ul li a { 
   color: #fff; text-decoration: none; font-size: 18px; 
}

nav a {  
margin: 0 15px; font-weight: bold; 
} 
    body {
      background: linear-gradient(to right,rgb(32, 6, 180),rgb(255, 255, 255));
      color: #fff;
    }
    .card {
      border-radius: 1rem;
      background-color: #ffffff;
      color: #333;
      box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .card:hover {
      transform: scale(1.03);
      box-shadow: 0 0.5rem 1.5rem rgba(0,0,0,0.2);
    }
    .achievement-icon {
      font-size: 40px;
      color: #007bff;
    }
    
  </style>
</head>

<body>
<?php
    require "navigation.php";
    ?>
  <!-- Achievements Section -->
  <div class="container py-5">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-black">Our Achievements</h2>
      <p class="text-grey">We're proud of how far we've come in serving our communities.</p>
    </div>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="card p-4 text-center">
          <div class="achievement-icon mb-3">🏦</div>
          <h5 class="fw-semibold">5,000+ Accounts Created</h5>
          <p class="text-muted">Thousands of users now have access to financial services.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-4 text-center">
          <div class="achievement-icon mb-3">💸</div>
          <h5 class="fw-semibold">UGX 2 Billion in Loans</h5>
          <p class="text-muted">Loans disbursed to support small businesses and individuals.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-4 text-center">
          <div class="achievement-icon mb-3">📈</div>
          <h5 class="fw-semibold">98% Repayment Rate</h5>
          <p class="text-muted">High repayment rate shows trust and responsibility.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-4 text-center">
          <div class="achievement-icon mb-3">🤝</div>
          <h5 class="fw-semibold">200+ Community Projects</h5>
          <p class="text-muted">Funded and supported local development programs.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-4 text-center">
          <div class="achievement-icon mb-3">🌍</div>
          <h5 class="fw-semibold">10 Districts Covered</h5>
          <p class="text-muted">Our reach is growing steadily across Uganda.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-4 text-center">
          <div class="achievement-icon mb-3">🕒</div>
          <h5 class="fw-semibold">10+ Years of Service</h5>
          <p class="text-muted">Over a decade of empowering people financially.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
require "footer.php";
?>