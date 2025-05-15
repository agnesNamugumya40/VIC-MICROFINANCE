<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vic's Microfinance</title>
    <link rel="stylesheet" href="home.css" />
  </head>

  <body>
    <?php require "navigation.php"; ?>

    <!--BANNER-->
    <div class="hero" style="background-image: url('images/bankLady.jpg'); background-size: cover; width: 100%; background-position: center; background-repeat: no-repeat;">
      <div class="hero-text">
        <h1>Welcome to Vic microfinance platform</h1>
        <h2>Your partner to <span class="changing-word" id="word">grow</span></h2>
      </div>
    </div>

    <!--THE ICONS-->
    <div class="whatwehave">
      <div class="whatwehavetext">
        <h1>Forget about the long queues !!! <br> Services brought closer to you</h1>
        <a href="services.php">View all services</a>
      </div>
      <div class="whatwehaveicons">
        <div class="row1">
          <div class="icon">
            <a href="services.php#newservices"><img src="images/calculator.png" alt="Loan calculator icon"></a>
            <h4>Loan calculator</h4>
          </div>
          <div class="icon">
            <a href="login.php"><img src="images/loan.png" alt="Loan application icon"></a>
            <h4>Loan application</h4>
          </div>
          <div class="icon">
            <a href="services.php#newservices"><img src="images/wallet.png" alt="Wallet icon"></a>
            <h4>Balance check</h4>
          </div>
        </div>
        <div class="row2">
          <div class="icon">
            <a href="login.php"><img src="images/limit.png" alt="Loan limit icon"></a>
            <h4>Loan limit</h4>
          </div>
          <div class="icon">
            <a href="index.php#messageForm"><img src="images/inquiries.png" alt="Inquiries icon"></a>
            <h4>Inquiries</h4>
          </div>
          <div class="icon">
            <a href="services.php#newservices"><img src="images/ways.png" alt="Ways to bank icon"></a>
            <h4>Ways to bank</h4>
          </div>
        </div>
      </div>
    </div>

    <!--TOP DEALS-->
    <div class="dealstitle slide-in" id="dealstitle">
      <h1>Top deals</h1>
    </div>
    <div class="topdeals slide-in">
      <div class="dealsleft">
        <h3>Hassle-free!</h3>
        <h1>Salary loan</h1>
        <p style="font-size: 20px;">Access your salary early with our salary loan package</p>
        <p>Quick cash when you need it at only <span>5% interest</span></p>
        <a href="login.php"><button>Apply</button></a>
      </div>
      <div class="dealsright">
        <div class="dealstop">
          <h3>School fees loan</h3>
          <h1>Invest in the future</h1>
          <p>Don't let the fees stand in the way of your child's success</p>
          <p>At only <span>9% interest</span></p>
          <a href="login.php"><button>Apply</button></a>
        </div>
        <div class="dealsbottom">
          <h3>Helping small businesses grow</h3>
          <h1>Start up loan</h1>
          <p>Get an interest-free vic-grow loan and start that dream business at a deposit of only UGX 50,000/=, get up to <span>UGX 1,500,000/=</span></p>
          <a href="login.php"><button>Apply</button></a>
        </div>
      </div>
    </div>

    <!--LATEST UPDATES-->
    <div class="latestupdatestitle" id="events">
      <h1>Latest updates</h1>
    </div>
    <div class="slider-container">
      <div class="slider" id="slider">
        <div class="card">
          <p>Upcoming event</p>
          <img src="images/conference.jpg" alt="Youth conference">
          <h3>23/04/2025</h3>
          <p>Join our annual youth conference on financial literacy on 23/04/2025</p>
        </div>
        <div class="card">
          <p>April 10th, 2025</p>
          <img src="images/bankerman.jpg" alt="Customer service update">
          <h3>Customer support update</h3>
          <p>We are now open till 7pm, Monday to Saturday at all branches</p>
        </div>
        <div class="card">
          <p>March 21, 2025</p>
          <img src="images/plantingtrees.jpg" alt="Tree planting campaign">
          <h3>Conserving the environment</h3>
          <p>Participated in Environment Week, 21st–27th March.</p>
        </div>
        <div class="card">
          <p>March 15, 2025</p>
          <img src="images/charity.jpg" alt="Charity activity">
          <h3>Charity</h3>
          <p>Giving back to the community during Ramadan</p>
        </div>
        <div class="card">
          <p>March 1, 2025</p>
          <img src="images/ceoopeningnewbuilding.jpg" alt="Branch opening">
          <h3>Grand opening of new branch</h3>
          <p>Our CEO and team opened a new branch in Ntinda, plot 123-Kigo road</p>
        </div>
        <div class="card">
          <p>February 21, 2025</p>
          <img src="images/newloansofficer.jpg" alt="New loans officer">
          <h3>New staff</h3>
          <p>Ms. Namugumya Agnes <br> Loans Officer</p>
        </div>
      </div>
    </div>

    <!--SUCCESS IN NUMBERS-->
    <div class="successInNumbers">
      <h1 class="successInNumberstitle">SUCCESS IN NUMBERS</h1>
      <h2 style="color: rgb(255, 187, 0);">________________</h2>
      <div class="metrics">
        <div class="users">
          <h2 id="users">4,000+</h2>
          <p>users have trusted us with their cash</p>
        </div>
        <div class="years">
          <h2 id="years">14 Years</h2>
          <p>of supporting communities</p>
        </div>
        <div class="recomendations">
          <h2 id="recomendations">95%</h2>
          <p>customers recommend us</p>
        </div>
      </div>
    </div>

    <!--WHAT OUR CLIENTS SAY-->
    <section class="testimonials">
      <h2 style="text-align:center;margin-bottom:30px;font-size:40px;color:navy">What Our Clients Say</h2>
      <div class="client-container">
        <div class="client">
          <img src="images/bankLady.jpg" alt="Client Agnes Namugumya">
          <h3>Agnes Namugumya</h3>
          <p>Vic microfinance has made my loans and savings so easy. The interactive loan calculator helps me plan better.</p>
          <div class="stars">★★★★★</div>
        </div>
        <div class="client">
          <img src="images/bankerman.jpg" alt="Client Ivan Ssempebwa">
          <h3>Ivan Ssempebwa (Admin)</h3>
          <p>This microfinance system has made managing client accounts smooth...</p>
          <div class="stars">★★★★☆</div>
        </div>
        <div class="client">
          <img src="images/happy woman.jpg" alt="Client Devon Lane">
          <h3>Devon Lane</h3>
          <p>This platform has changed my life... no more queues just to make an inquiry</p>
          <div class="stars">★★★★★</div>
        </div>
      </div>
    </section>

    <!--LEAVE A MESSAGE-->
    <div class="contacttitle" id="messageForm">
      <h1>Would you like to leave us a message?</h1>
    </div>
    <div class="message" id="message">
      <div class="leftmessage">
        <form method="POST" id="contactForm">
          <input type="text" name="name" placeholder="Enter your name here" required><br>
          <input type="email" name="email" placeholder="Email" required><br>
          <textarea name="message" placeholder="Write your message here" required></textarea>
          <button id="msgStatus" type="submit">Submit</button>
        </form>
      </div>
      <div class="rightmessage">
        <img src="images/contsctus.png" alt="Contact us illustration">
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
      $(document).ready(function () {
        const words = ["grow", "invest", "borrow", "save"];
        let index = 0;

        function changeSlideAndWord() {
          const $wordElement = $("#word");
          $wordElement.removeClass("fade-in").addClass("fade-out");
          setTimeout(() => {
            index = (index + 1) % words.length;
            $wordElement.text(words[index]);
            $wordElement.removeClass("fade-out").addClass("fade-in");
          }, 500);
        }

        setInterval(changeSlideAndWord, 3000);

        // Slider
        let currentIndex = 0;
        const $slider = $("#slider");
        const $cards = $slider.children();
        const totalCards = $cards.length;
        const visibleCards = 3;

        function updateSlider() {
          const cardWidth = $cards.eq(0).outerWidth(true);
          $slider.css("transform", "translateX(-" + (currentIndex * cardWidth) + "px)");
        }

        function nextSlide() {
          if (currentIndex === totalCards - visibleCards) {
            currentIndex = 0;
          } else {
            currentIndex++;
          }
          updateSlider();
        }

        setInterval(nextSlide, 4000);
      });
      
    </script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <?php
      require "footer.php";
      ?>
  </body>
</html>
