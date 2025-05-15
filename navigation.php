<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .navigation-section{
    position: fixed;
    z-index: 10;
    width: 100%;
    flex-wrap:wrap;
   
}
a{
    text-decoration: none;
}

.uppernav{
    background-color: rgb(12, 0, 66,0.4);padding: 20px; display: flex;width: 100%;flex-wrap: nowrap;
   
}
.navigation-section a:hover{
    color: #ffc107;
    text-decoration: overline;
}

.logo h1{
    font-weight: bold;color: #030e74; font-size: 30px; 
}
.logo h1 span{
    color: rgb(255, 255, 255);font-size: 8px;
}
.navbar {
    display: flex;   background-color: rgba(3, 1, 141, 0.9);width: 100%;
     justify-content: space-between; align-items: center; padding: 20px;
     border-bottom-right-radius: 20px;
     border-bottom-left-radius: 20px;
     backdrop-filter: blur(7px);
     flex-wrap: wrap;

   
}
.navbar ul {
    list-style: none; display: flex; margin: 0; padding: 0; flex-wrap: wrap;
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
.logo{
    width:20%;padding-left: 20px;
  }
  .links{
    width:50%
  }
  .links li{
    text-decoration:none;margin-left:20px;color:white;font-size:20px
  }
  .uppernav{
    flex-wrap:wrap;padding:20px;
    background-color: rgb(12, 0, 66,0.4);
    display:flex;width:100%;
    justify-content:space-between;
  }
  .buttons button{
    width:100%; padding:15px;border-radius:10px;border:none;
  }
  .buttons{
    width:27%;display:flex;margin:auto;
  }
  .login,.signup{
    width:47%; margin:auto; 
  }
  @media(max-width:1100px){
    .navigation-section{
        position: static;
    }
    .uppernav span{
        color:rgb(255, 166, 0);
    }
    .uppernav{
    background-color: rgb(255, 255, 255);padding: 2px;
   
}
    .uppernav{
        flex-direction: column;
    }
    .logo{
        width: 100%;
        text-align: center;
        margin-bottom: 10px;
    }
    .links{
        width: 90%;
        margin:auto;
    }
    .links li{
        margin-left:10px;font-size:10px
      }
      .links ul{
        width: 80%;
        margin: auto;
        margin-bottom: 10px;
      }
      .links a{
        color:black;
      }
      .navbar{
        background-color:rgb(0, 0, 129);
      }
      
      
  }
  @media(max-width:610px){
     .buttons button{
    width:100%; padding:15px;border-radius:10px;border:none;
  }
  .buttons{
    width:50%;display:flex;margin:auto;display:none;
  }
    .join span{
        display: none;
    }
    .navbar {
     padding: 10px;
     border-radius:0;
} 
.navbar ul li { 
   margin-left: 10px; 
}
.navbar ul li a { 
   color: #fff; text-decoration: none; font-size: 18px; 
}

nav a {  
margin: 0 15px; font-weight: bold; 
} 
  }
  @media(max-width:430px){
    .navbar ul li a { 
   color: #fff; text-decoration: none; font-size: 15px; 
}
.navbar {
     padding: 5px;
} 
  }
</style>
<body>
<div class="navigation-section">
    <!--UPPER TRANSPARENT NAV-->
    <div class="uppernav" style="">
                <div class="logo" style="">
                    <h1 style="color:rgb(16, 0, 88);font-weight:70px">Vic<span style="font-size: 10px;color:yellow">microfinance</span></h1> 
                </div>
                <div class="links" style="">
                    <ul style="display:flex;list-style-type:none;"> 
                        <li><a href="about.php" style="">About us</a></li> 
                        <li><a href="index.php#events" >News & events</a></li> 
                        <li><a href="achievements.php" >Achievements</a></li> 
                        <li><a href="faqs.php" >FAQs</a></li> 
                    </ul> 
                </div>
                <div class="buttons" style="">
                    <div class="login" style=" ">
                        <a href="register.php"><button class="join" style="background:rgb(255, 208, 0);">Join <span>us</span></button></a>
                    </div>
                    <div class="signup" style="">
                        <a href="login.php"><button class="login" style="background:rgb(5, 0, 73);color:white">Login</button></a>
                    </div>
                </div>
    </div>

                    <!--THE BLUE NAVIGATION BAR-->
            <nav class="navbar"> 
                <a href="#" class="logo"></a> 
                <ul> 
                    <li><a href="index.php">Home</a></li> 
                    <li><a href="services.php">Services</a></li> 
                    <li><a href="loans.php">Loans</a></li> 
                    <li><a href="index.php#messageForm">Contact</a></li> 
                </ul> 
            </nav>
</div>
</body>
</html>