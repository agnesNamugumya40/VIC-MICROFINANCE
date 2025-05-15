<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abou|Vic</title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="main.js">
    <link href="https://cdn.jsdelivr.net/gh/yesiamrocks/cssanimation.io@1.0.3/cssanimation.min.css" rel="stylesheet">
</head>
<?php
    require "navigation.php";
    ?>
<body> 
    <div class="about ">
        <H1 class="cssanimation open">About us</H1>
    </div>
    <!--PICTURES AND TEXT DIV-->
    <div class="services">
        <div class="servicesleft">
            <div class="LEFTleftdiv">
                <img src="images/graduatebaby.jpg" alt="Graduates" />
            </div>
            <div class="LEFTrightdiv">
                <div class="upper">
                    <img src="images/bankerman.jpg" alt="Banker" />
                </div>
                <div class="lower">
                    <h1>14+</h1>
                    <p>Years of experience</p>
                </div>
            </div>
        </div>
        <div class="servicesright">
            <h3>ABOUT VIC MICROFINANCE</h3>
            <h1>Innovative strategies for your personal growth</h1>
            <p>Unlock your full potential with forward-thinking approaches designed to enhance your personal and professional journey.</p> <br>
            <div class="lists">
                <div class="leftlist">
                    <ul>
                        <li>Financial support</li>
                        <li>Goal mapping</li>
                        <li>Collaboration</li>
                    </ul>
                </div>
                <div class="rightlist">
                    <ul>
                        <li>Regular skill assessment</li>
                        <li>Networking</li>
                        <li>Feedback</li>
                    </ul>
                </div>
            </div>
            <button class="learnmore"><a href="Register.php">Join us</a></button>
        </div>
    </div>

    <div class="main">
        <div class="mainleft">
            <div class="vision">
                <h3>Our Vision</h3>
                <p>To be the leading provider of innovative and accessible financial solutions, empowering individuals and businesses to achieve financial stability and sustainable growth through responsible lending and savings programs.</p>            
            </div>
            <div class="mission">
                <h3>Our Mission</h3>
                <p>To provide affordable and flexible financial services to underserved communities, fostering financial inclusion and economic empowerment through transparent, customer-centric lending and savings solutions.</p>
            </div>
            <div class="values">
                <h3>Core values</h3>
                <p>Integrity <br> Innovation <br> Empowerment</p>
            </div>
        </div>
        <div class="mainright">
            <h3>Making you feel more comfortable in financial management</h3>
            <p>With almost all our services being accessible online, you can manage your finances from anywhere, anytime.</p>
            <a href="index.php#messageForm"><button>Contact us</button></a>
        </div>
    </div>

    <!--GOALS-->
    <div class="goals">
        <div class="goalspicture">
            <img src="images/letshelpyoucalculateyourloan.jpg" alt="Loan Assistance" />
        </div>
        <div class="goalstext">
            <h1>We are here to help you achieve your goals</h1>
            <p>Our team is dedicated to providing you with the necessary resources and guidance to help you achieve your financial goals.</p>
            <a href="services.php"><button>View services</button></a>
        </div>
    </div>

    <div class="achievedgoals" >
        <div class="goal">
            <img src="images/give.png" alt="Commitment" />
            <h3>Commitment</h3>
            <p>We are committed to providing our clients with the best financial solutions, tailored to their needs.</p>
        </div>
        <div class="goal">
            <img src="images/care.png" alt="Customer Care" />
            <h3>Customer Care</h3>
            <p>Our customer service is always available to provide support and assist with any inquiries you may have.</p>
        </div>
        <div class="goal">
            <img src="images/up.png" alt="Sustainability" />
            <h3>Sustainability</h3>
            <p>We focus on long-term financial stability, offering services that promote sustainable growth for all our clients.</p>
        </div>
    </div>

    <div class="satisfactions" style="margin-bottom:30px">
        <div class="satisfaction">
            <h1>2,800+</h1>
            <p>Satisfied clients</p>
        </div>
        <div class="satisfaction">
            <h1>3,465+</h1>
            <p>Projects finished</p>
        </div>
        <div class="satisfaction">
            <h1>4.8</h1>
            <p>Client satisfaction rating</p>
        </div>
        <div class="satisfaction">
            <h1>30+</h1>
            <p>Branch offices</p>
        </div>
    </div>

   
           

</body>
</html>
<?php 
 require "footer.php";
?>

