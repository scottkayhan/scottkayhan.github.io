<?php

if($_POST["submit"]) {
    $recipient="scottkayhan@gmail.com";
    $subject="Form to email message";
    $senderEmail=$_POST["senderEmail"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Charlie Bear</title>
    <link rel="stylesheet" href="index.css">
    <!--<link rel="php" href="contact.php">-->
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
      <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">
  </head>
<body> <a name="top"></a><div class="top">
    <br>
    <br>
    </div>
    
    <div class="wrapper">
    <!--<div class="wrapper">-->
        <!--<div class="header-container">-->
            <!--<header>-->
                <!--<h1 class="title">Charlie Bear</h1>-->
               <!-- <nav>
                    <ul>
                        <li><a href="#product">Products</a></li>
                        <li><a href="#about-us">About Us</a></li>
                        <li><a href="https://www.instagram.com/charliebear_nyc/">Instagram</a></li>
                    </ul>
                </nav>-->
           <!-- </header>-->
    
    <style>
/* customizable snowflake styling */
.snowflake {
  color: #fff;
  font-size: 1em;
  font-family: Arial, sans-serif;
  text-shadow: 0 0 5px #000;
}

        @-webkit-keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@-webkit-keyframes snowflakes-shake{0%,100%{-webkit-transform:translateX(0);transform:translateX(0)}50%{-webkit-transform:translateX(80px);transform:translateX(80px)}}@keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@keyframes snowflakes-shake{0%,100%{transform:translateX(0)}50%{transform:translateX(80px)}}.snowflake{position:fixed;top:-10%;z-index:9999;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:default;-webkit-animation-name:snowflakes-fall,snowflakes-shake;-webkit-animation-duration:10s,3s;-webkit-animation-timing-function:linear,ease-in-out;-webkit-animation-iteration-count:infinite,infinite;-webkit-animation-play-state:running,running;animation-name:snowflakes-fall,snowflakes-shake;animation-duration:10s,3s;animation-timing-function:linear,ease-in-out;animation-iteration-count:infinite,infinite;animation-play-state:running,running}.snowflake:nth-of-type(0){left:1%;-webkit-animation-delay:0s,0s;animation-delay:0s,0s}.snowflake:nth-of-type(1){left:10%;-webkit-animation-delay:1s,1s;animation-delay:1s,1s}.snowflake:nth-of-type(2){left:20%;-webkit-animation-delay:6s,.5s;animation-delay:6s,.5s}.snowflake:nth-of-type(3){left:30%;-webkit-animation-delay:4s,2s;animation-delay:4s,2s}.snowflake:nth-of-type(4){left:40%;-webkit-animation-delay:2s,2s;animation-delay:2s,2s}.snowflake:nth-of-type(5){left:50%;-webkit-animation-delay:8s,3s;animation-delay:8s,3s}.snowflake:nth-of-type(6){left:60%;-webkit-animation-delay:6s,2s;animation-delay:6s,2s}.snowflake:nth-of-type(7){left:70%;-webkit-animation-delay:2.5s,1s;animation-delay:2.5s,1s}.snowflake:nth-of-type(8){left:80%;-webkit-animation-delay:1s,0s;animation-delay:1s,0s}.snowflake:nth-of-type(9){left:90%;-webkit-animation-delay:3s,1.5s;animation-delay:3s,1.5s}.snowflake:nth-of-type(10){left:25%;-webkit-animation-delay:2s,0s;animation-delay:2s,0s}.snowflake:nth-of-type(11){left:65%;-webkit-animation-delay:4s,2.5s;animation-delay:4s,2.5s}
        </style>
    
    
    <div class="snowflakes" aria-hidden="true">
      <div class="snowflake">
      ❅
      </div>
      <div class="snowflake">
      ❆
      </div>
      <div class="snowflake">
      ❅
      </div>
      <div class="snowflake">
      ❆
      </div>
      <div class="snowflake">
      ❅
      </div>
      <div class="snowflake">
      ❆
      </div>
      <div class="snowflake">
        ❅
      </div>
      <div class="snowflake">
        ❆
      </div>
      <div class="snowflake">
        ❅
      </div>
      <div class="snowflake">
        ❆
      </div>
      <div class="snowflake">
        ❅
      </div>
      <div class="snowflake">
        ❆
      </div>
    </div>

    <div class="to-top"> <!--To Top Labels-->
      <a href="index.html">↑This Way Up↑</a>
    </div>
      
    <div class="to-top2"> <!--To Top Labels--><a href="#top" >↑This Way Up↑</a>
    </div>
      
          
    <div class="logos">
        <img class="charlie-bear"src="thick-border-01.png" alt="Charlie Bear">
        <img class="bear-head" src="replacement-head-01.png">
        <img class="bear-head2" src="replacement-head-01.png">
    </div>
        
<a name="product">
    <div class="notified">
    
        <br>
        <br>
        <br>
        <br>

    
    </div>
    <div class="email">
        <h3>GET NOTIFIED ABOUT NEW PROJECTS</h3>
        <br>
        Enter your email:
        <br>
        <br>
        <form action="contact.php" method="post" enctype="text/plain">
        <input type="text" name="name" for="email">
        
      <!-- <input type="email" id="email" name="email">-->
       <input type="submit" id="button" value="SUBMIT">
            </form>
    </div>  
    <ul>
        <br>
        <li class="product">PRODUCTS </li>
    </ul>

        <div class="window-bears">
           <img class="window-bears2" src="coming-soon-01.png">
    <ul>
        <div class="sold-out">
            <li class="sold-out">
                <a href="#product">
                    <img class="cart" src="cart.png">SOLD OUT</a><img class="cart2" src="cart.png">
            </li>
        </div>
    </ul>     
          
        <div class="window-bears">
           <img class="window-bears2" src="coming-soon-01.png">
    <ul>
        <div class="sold-out">
            <li class="sold-out">
                <a href="#product">
                    <img class="cart" src="cart.png">SOLD OUT</a><img class="cart2" src="cart.png">
            </li>
        </div>
    </ul> 
  <!--  </div>-->

    
    

        
            <!--<h2>About Us:</h2>-->
			<!--<<!--p class="intro">-->
				<!--<mark>About Us:<br></mark>Quis diam et erat convallis dapibus. Morbi mauris urna, ultrices vel hendrerit at, dignissim a odio. Donec a nibh ut lectus finibus luctus. Nullam ut nisi molestie felis consectetur finibus non quis tortor. In ut dolor sem. <a href="Gosling.html">Ryan Gosling</a> and <a href="Ford.html">Harrison Ford</a>, with <a href="Armas.html">Ana de Armas</a>, Sylvia Hoeks, Robin Wright, Mackenzie Davis, Carla Juri, Lennie James, Dave Bautista, and Jared Leto in supporting roles. -->
         <!--   </p>-->
            
             <!--</div>-->

   
    <footer class="main-footer" id="footer">
        <h4 class="insta">
            <a href="https://www.instagram.com/charliebear_nyc/">INSTAGRAM</a>
        </h4>
        <p class="footer">All rights reserved. </p>
		
		</footer>
    </body>
</html>