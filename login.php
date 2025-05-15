<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link rel="stylesheet" href="login.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<?php
    require "navigation.php";
?>

  <!-- LOGIN FORM -->
  <section>
    <div class="loginbox">
      <form id="loginForm">
        <h1>VIC<span style="color: rgb(17, 0, 255); font-size: 10px;">micro</span></h1>
        <h2>Login to continue</h2>

        <div class="inputbox">
          <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
          <input type="email" id="email" name="email" required />
          <label>Email</label>
        </div>

        <div class="inputbox">
          <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
          <input type="password" id="password" name="password" required />
          <label>Password</label>
        </div>

        <div class="rememberforgot">
          <label><input type="checkbox" /> Remember me</label>
          <a href="#" class="forgot">Forgot password?</a>
        </div>

        <button type="submit">Login</button>

        <div class="signinlink">
          <p>Don't have an account? <a href="register.php" class="register">Register</a></p>
        </div>
      </form>
    </div>
  </section>

  <!-- ICONS -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <!-- AJAX SCRIPT -->
  <script>
    $(document).ready(function () {
      $('#loginForm').on('submit', function (e) {
        e.preventDefault();

        const email = $('#email').val();
        const password = $('#password').val();

        // Check for admin credentials
        if (email === 'vicadmin@vic.ac.ug' && password === '123') {
          // Redirect to admin dashboard if the credentials match
          window.location.href = 'admin.php'; // Redirect to admin page
        } else {
          // Proceed with regular login
          $.ajax({
            url: 'loginbackend.php',
            method: 'POST',
            data: { email, password },
            success: function (response) {
              if (response.trim() === 'success') {
                alert('Login successful!');
                window.location.href = 'mydashboard.php'; // Redirect to user dashboard
              } else {
                alert(response); // Show error message if login fails
              }
            },
            error: function () {
              alert('Invalid email or password');
            }
          });
        }
      });
    });
  </script>
</body>
</html>
