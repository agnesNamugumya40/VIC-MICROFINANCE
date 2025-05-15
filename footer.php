<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Responsive Footer</title>
  <style>
    

    
    main {
      width: 100%;
      background-color: rgb(0, 5, 32);
      color: #ccc;
    }

    footer {
      display: flex;
      width: 80%;
      margin: auto;
      justify-content: space-between;
      padding: 40px 0;
      flex-wrap: wrap;
      gap: 30px;
    }

    footer h1 {
      color: blue;
    }

    footer h1 span {
      font-size: 10px;
      color: white;
    }

    footer h3 {
      color: #f8d027;
      margin-bottom: 10px;
    }

    footer p {
      margin: 8px 0;
    }

    footer a {
      color: #ccc;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    footer img {
      width: 20px;
    }

    hr {
      width: 70%;
      margin: 20px auto;
      border-color: #444;
    }

    .copyright {
      text-align: center;
      padding: 10px;
      font-weight: lighter;
      color: gray;
    }

    /* Responsive styles */
    @media (max-width: 768px) {
      footer {
        flex-direction: column;
        text-align: center;
        align-items: center;
      }

      footer div {
        width: 100%;
      }

      footer a {
        justify-content: center;
      }

      hr {
        width: 90%;
      }
    }
  </style>
</head>
<body>
  <main>
    <footer>
      <div class="location">
        <h1>Vic<span>microfinance</span></h1>
        <address>
          <p>Plot 123K, Kigo Road,<br />Kigo - Uganda</p>
          <p>📞 +256 705 629 370</p>
          <p>📞 +256 770 771 997</p>
        </address>
      </div>

      <div class="links">
        <h3>QUICK LINKS</h3>
        <p><a href="login.php">My Profile</a></p>
        <p><a href="loans.php">Loans</a></p>
        <p><a href="faqs.php">FAQs</a></p>
        <p><a href="services.php">Services</a></p>
        <p><a href="index.php">Home</a></p>

      </div>

      <div class="contact">
        <h3>Connect with Us</h3>
        <p>
          <a href="https://wa.me/256705629370" target="_blank">
            <img src="images/whatsapp.png" alt="WhatsApp" />+256 705 62 93 70
          </a>
        </p>
        <p>
          <a href="https://instagram.com" target="_blank">
            <img src="images/instagram.png" alt="Instagram" />@vic_microfinance
          </a>
        </p>
        <p>
          <a href="https://tiktok.com" target="_blank">
            <img src="images/tiktokicon.png" alt="TikTok" />@vic_microfinance
          </a>
        </p>
        <p>
          <a href="mailto:info@vicmicrofinance.com" target="_blank">
            <img src="images/gmail.png" alt="Email" />vicmicrofinance@vic.ac.ug
          </a>
        </p>
      </div>
    </footer>

    <hr />
    <h3 class="copyright">
      &copy; Vic Microfinance 2025. All rights reserved.
    </h3>
  </main>
</body>
</html>
