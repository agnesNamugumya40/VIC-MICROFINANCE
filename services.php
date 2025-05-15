<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="services.css">
</head>
<body>
    <?php
    require "navigation.php";
    ?>
    <div class="barner">
        <div class="text">
            <h1>Our services built specifically for your needs</h1>
            <a href="loans.php"><button class="servicesbutton">Loan Services</button></a>
            <a href="index.php#dealstitle"><button class="getstarted">Special offers</button></a>
        </div>
        <div class="picture" id="newservices">
            <img src="images/barnerwoman.png" alt="">
        </div>
    </div>
    <section class="digital-services">
    
        <h2>Newly added Digital Services</h2>
    
        <div class="services-container">
    
            <div class="service" data-service="web">Loan Calculator</div>
    
            <div class="service" data-service="mobile">Balance check</div>
    
            <div class="service" data-service="uiux">Ways to bank</div>
    
        </div>
    
    
    
        <div class="service-details">
    
            <div id="web" class="details">
                <div id="loan-calculator" class="digital-service">
                    <h3>Loan Calculator</h3>
                    <label>Loan Amount:</label><br><br>
                    <input type="number" id="loanAmount" placeholder="Enter amount" required><br><br>
                    <label>Interest Rate (%):</label><br><br>
        
                    <input type="number" id="interestRate" placeholder="Enter interest rate" required><br><br>
                    <label>Loan Term (Months):</label><br><br>
                    <input type="number" id="loanTerm" placeholder="Enter term in months" required><br><br>
                    <button onclick="calculateLoan()" >Calculate</button>
        
                    <p id="loanResult">Results will show here</p>
        
                </div>
            </div>
    
            <div id="mobile" class="details">
                <div id="balance-check" class="digital-service">

                    <h3>Balance Check</h3>
        
                    <p>Quickly check your account balance online.</p>
        
                    <label>Enter Account Number:</label><br><br>
        
                    <input type="text" id="accountNumber" placeholder="Enter account number">
        
                    <button onclick="checkBalance()">Check Balance</button>
        
                    <p id="balanceResult">Results will show here</p>
        
                </div>        
            </div>
            <div id="uiux" class="details">
                <div id="ways-to-bank" class="digital-service">
                    <h3>Ways to Bank</h3>
                    <p>Explore different ways to access our banking services:</p>
                    <ul>
                        <li>Online Banking</li>
                        <li>Mobile App</li>
                        <li>ATM Services</li>
                        <li>Agent Banking</li>
                        <li>USSD Banking</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="offers">



        <div class="offer">
            <h3>Loan Services</h3>
            <p>Flexible and fast financing solutions for your needs.</p>
            <ul>
                <li>Personal Loan</li>
                <li>Business Loan</li>
                <li>Emergency Loan</li>
                <li>Education Loan</li>
                <li>Agricultural Loan</li>
                <li>Startup Loan </li>
            </ul>
            <a href="loans.php" class="btn">See more</a>
        </div>



        <div class="offer">
            <h3>Savings & Investment</h3>
            <p>Secure and high-yield savings plans.</p>
            <ul>
                <li>Savings Accounts</li>
                <li>Fixed Deposits</li>
                <li>Group Savings (SACCOs)</li>
            </ul>
            <a href="login.php" class="btn">Start saving</a>
        </div>



        <div class="offer">
            <h3>Financial Advisory & Training</h3>
            <p>Expert guidance for financial success.</p>
            <ul>
                <li>Business Advisory</li>
                <li>Loan Management Training</li>
                <li>Savings & Investment Workshops</li>
            </ul>
            <a href="index.php#messageForm" class="btn">Contact us</a>
        </div>

        <div class="offer">
            <h3>Digital Banking Services</h3>
            <p>Convenient & secure banking at your fingertips.</p>
            <ul>
                <li>Online Account Management</li>
                <li>Mobile Banking</li>
                <li>Automated Loan Applications</li>
            </ul>
            <a href="login.php" class="btn">Get Started Online</a>
        </div>
        <div class="offer">
            <h3>Special Offers & Promotions</h3>
            <p>Exclusive deals to help you save more.</p>
            <ul>
                <li>Seasonal Loan Discounts</li>
                <li>Referral Bonuses</li>
                <li>Financial Literacy Seminars</li>
            </ul>
            <a href="index.php#dealstitle" class="btn">See Offers</a>
        </div>



        <div class="offer">
            <h3>Customer Support & Assistance</h3>
            <p>We're always here to help.</p>
            <ul>
                <li>24/7 Customer Service</li>
                <li>Live Chat Assistance</li>
            </ul>
            <a href="index.php#messageForm" class="btn">Contact Support</a>

        </div>
    </section>
   
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="main.js"></script>
</body>
</html>
<?php 
 require "footer.php";
?>
