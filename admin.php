<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard|VicMicrofinance</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }
    .sidebar {
      background-color: rgba(3, 0, 177, 0.9);
      color: white;
      padding: 1rem;
      height: 100vh;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 20px 10px;
    }
    .sidebar a:hover {
      background-color: #08007a;
      border-radius: 5px;
    }
    #menuToggle {
      display: none;
    }
    #clientsCount, #loansCount, #repaymentRate {
  font-size: 3rem; 
  font-weight: bold; 
}
.col-md-4{
  margin-top: 100px;
}
#clientsCount {
  color:rgb(15, 0, 221); 
}

#loansCount {
  color:rgb(255, 251, 0); 
}

#repaymentRate {
  color:rgb(43, 212, 82); 
}

    @media (max-width: 768px) {
      .sidebar {
        display: none;
        position: absolute;
        top: 60px;
        left: 0;
        width: 200px;
        height: calc(100% - 60px);
        z-index: 1000;
      }
      .sidebar a {
        padding: 2px;
      }
      .sidebar.show {
        display: block;
        background-color: #0d25fd;
      }
      #menuToggle {
        display: inline-block;
        background-color: #1d0dfd;
        color: white;
        padding: 0.5rem 1rem;
        border: none;
        margin: 1rem;
      }
    }
  </style>
</head>
<body>
  <div class="d-flex">
    <div class="sidebar" id="navItems">
      <h4 class="fw-bold">VicMicrofinance</h4>
      <a href="requests.php">Loan Requests</a>
      <a href="allusers.php.">Users</a>
      <a href="newuser.php">Add new user</a>
      <a href="index.php">Go to home</a>
    </div>

    <div class="flex-grow-1">
      <span id="menuToggle">&#9776; Menu</span>
      <div class="p-3">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h2 class="text-primary">Admin Dashboard</h2>
          <button class="btn btn-danger" id="logoutBtn">Logout</button>
        </div>
        <div class="row mb-4">
          <div class="col-md-4 mb-3">
            <div class="p-3 bg-white shadow-sm rounded">
              <h5 class="text-primary" id="clientsCount">0</h5>
              <p>Clients</p>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="p-3 bg-white shadow-sm rounded">
              <h5 class="text-primary" id="loansCount">0</h5>
              <p>Loans Issued</p>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="p-3 bg-white shadow-sm rounded">
              <h5 class="text-success" id="repaymentRate">0%</h5>
              <p>Repayment Rate</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script>
    $('#menuToggle').click(function () {
      $('#navItems').toggleClass('show');
    });

    //FUNCTION FOR THE 3 METRICS COUNT UP
    function countUp(id, target, duration, isPercent = false) {
      let $el = $('#' + id);
      let current = 0;
      let stepTime = Math.max(Math.floor(duration / target), 20);
      let increment = Math.ceil(target / (duration / stepTime));

      let interval = setInterval(function () {
        current += increment;
        if (current >= target) {
          current = target;
          clearInterval(interval);
        }
        let formatted = isPercent ? current + "%" : current.toLocaleString();
        $el.text(formatted);
      }, stepTime);
    }
    //TEMPORARY COUNT FOR THE 3 METRICS(TO BE GOT FROM THE DATABASE)
    $(document).ready(function () {
      countUp("clientsCount", 15, 2000);
      countUp("loansCount", 1, 2000);
      countUp("repaymentRate", 100, 2000, true);
    });
  </script>
  <script>

    //LOGOUT MODAL
    $(document).ready(function () {
      $('#logoutBtn').click(function (e) {
        e.preventDefault();
        if (confirm('Are you sure you want to logout?')) {
          window.location.href = 'login.php'; 
        }
      });
    });
  </script>
  
</body>
</html>
