<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <?php
    require "navigation.php";
    ?>
  <section>
    <div class="loginbox">
      <form id="signupForm">
        <h1>VIC<span style="color: rgb(17, 0, 255);font-size: 10px;">micro</span></h1>
        <h2>Join Vic Microfinance</h2>
        <p style="color: white; font-size: 14px;font-style: italic;">Ensure you have an account with us before signing up</p>

        <div class="inputbox">
          <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
          <input type="email" id="email" name="email" required>
          <label>Email</label>
        </div>

        <div class="inputbox">
          <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
          <input type="password" id="password" name="password" required>
          <label>Password</label>
        </div>

        <div class="inputbox">
          <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
          <input type="text" id="accountNo" name="accountNo" required>
          <label>Account Number</label>
        </div>

        <div class="rememberforgot">
          <label><input type="checkbox"> Remember me</label>
        </div>

        <button type="submit" style="background-color: rgb(255, 196, 0);">Sign Up</button>

        <div class="signinlink">
          <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
      </form>

      <div id="message" style="margin-top: 15px; color: white;"></div>
    </div>
  </section>

  <footer style="background-color: rgb(1, 1, 71);color: rgb(169, 156, 228); text-align: center;padding: 5px;">
    &copy;VicMicrofinance 2025 | All rights reserved
  </footer>

  <!-- jQuery + Ionicons -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <!-- AJAX script -->
  <script>
  $(document).ready(function () {
    $('#signupForm').on('submit', function(e) {
      e.preventDefault();

      $.ajax({
        type: 'POST',
        url: 'register_user.php',
        data: $(this).serialize(),
        success: function(response) {
          if (response.includes("Registration successful!")) {
            alert("Registration successful! You can now log in.");
            window.location.href = "login.php";
          } else {
            alert(response); 
          }
        },
        error: function() {
          alert("Something went wrong. Please try again.");
        }
      });
    });
  });
</script>

</script>

</body>
</html>
