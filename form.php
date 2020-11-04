<?php
if($_POST["message"]) {
    mail("your@email.address", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Charlie Bear</title>
    <link rel="stylesheet" href="CharlieBear.css">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
      <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">
  </head>
<body> 
    <div class="wrapper">
    <!--<div class="wrapper">-->
        <!--<div class="header-container">-->
            <header>
                <!--<h1 class="title">Charlie Bear</h1>-->
                <nav>
                    <ul>
                        <li><a href="#product">Products</a></li>
                        <li><a href="#about-us">About Us</a></li>
                        <li><a href="https://www.instagram.com/charliebear_nyc/">Instagram</a></li>
                    </ul>
                </nav>
            </header>
    
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
  <!--  <div class="snowflake">
        <img src="snowflake.png">
    </div>-->
    <div class="to-top"> <!--To Top Labels-->
      <a href="CharlieBear.html">↑This Way Up↑</a>
    </div>
      
    <div class="to-top2"> <!--To Top Labels--><a href="CharlieBear.html" >↑This Way Up↑</a>
    </div>
        
    <div class="logos">
         <img class="charlie-bear"src="thick-border-01.png" alt="Charlie Bear">
  
        <img class="bear-head" src="head-only-01.png">
             
         
         <img class="bear-head2" src="head-only-01.png">

        <div class="email"><h3>Get in touch with us!</h3>
<form method="post" action="contact.php">
    <textarea name="message"></textarea>
    <input type="submit">
</form>
            </div>
    </div> 
<a name="product"></a>
        <div class="window-bears">
           <img class="window-bears2" src="coming-soon-01.png">
            
    </div>
     <!--</div>-->
             <!--   <div class="absolute-window">
                <a href="https://www.scottkayhan.com/"> <figure><img src="vintage-tee-fur.png" alt="New Order Shirt"> 
                    <figcaption> Fur Shirt - $59.99</figcaption>
                    </figure>
                    </a>
                    
                </div>-->
            <!---->
            
             
                <!--<div class="new-order2">
                <a href="https://www.scottkayhan.com/"> <figure><img src="vintage-tee.png" alt="Shirt">
                    <figcaption> Black Shirt - $59.99</figcaption>
                    </figure> </a>
                </div>
                 </div>
                <div class="trucker-hat">
                 <a href="https://www.scottkayhan.com/"><img src="trucker-hat.png" alt="Trucker Hat"></a>
                 </div>
         </div>-->
         
       
    
        <br>
    <!--<img title="src=" src="blank-paint-01.png">-->
    <div class="primary-content"> <a name="about-us"><br></a>
        <br>
        <br>
        
            <h2>About Us:</h2>
			<p class="intro">
				Quis diam et erat convallis dapibus. Morbi mauris urna, ultrices vel hendrerit at, dignissim a odio. Donec a nibh ut lectus finibus luctus. Nullam ut nisi molestie felis consectetur finibus non quis tortor. In ut dolor sem. <a href="Gosling.html">Ryan Gosling</a> and <a href="Ford.html">Harrison Ford</a>, with <a href="Armas.html">Ana de Armas</a>, Sylvia Hoeks, Robin Wright, Mackenzie Davis, Carla Juri, Lennie James, Dave Bautista, and Jared Leto in supporting roles. Ford and Edward James Olmos reprise their roles from the original. Gosling plays K, a Nexus-9 replicant "blade runner" who uncovers a secret that threatens to destabilize society and the course of civilization. Visually stunning and narratively satisfying, Blade Runner 2049 deepens and expands its predecessor's story while standing as an impressive filmmaking achievement in its own right.
            </p>
            
             </div>
    

       
       
   <!-- <h2>Process:</h2>
        <div id="par"><p>Quis diam et erat convallis dapibus. Morbi mauris urna, ultrices vel hendrerit at, dignissim a odio. Donec a nibh ut lectus finibus luctus. Nullam ut nisi molestie felis consectetur finibus non quis tortor. In ut dolor sem. Pellentesque vitae luctus magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus ligula diam, aliquet sit amet massa quis, luctus tristique lacus. Praesent sit amet viverra ante, fermentum ultrices metus. Praesent condimentum facilisis facilisis. Praesent pharetra eget lacus vel congue. -->
        <!--<p> Curabitur vehicula nunc vitae tincidunt pellentesque. Nullam egestas augue nec orci venenatis pulvinar. Praesent id consequat quam, eu consequat metus. Duis erat lorem, pharetra vitae egestas sit amet, varius quis eros. Sed et massa eu ex vestibulum gravida vel non urna. Aenean euismod nulla sed arcu congue pellentesque. Donec risus nunc, porta quis cursus consequat, lacinia tincidunt ligula. In hac habitasse platea dictumst. Praesent fringilla lectus vel est auctor imperdiet. Etiam condimentum congue diam in pellentesque. Praesent gravida metus id odio scelerisque, in egestas diam fermentum. Maecenas vel maximus est, ut facilisis leo.</p> -->
         
       <!--  
         <p>Fusce nec ex velit. Etiam gravida porttitor sollicitudin. Etiam a lectus facilisis, ullamcorper nisl vitae, tempus tortor. Fusce sed urna pharetra, accumsan ex at, tempor nulla. Sed mauris tortor, finibus ut lobortis sed, vestibulum a elit. Nunc congue diam nunc, ac facilisis erat euismod sed. Phasellus viverra, enim sit amet ullamcorper condimentum, erat odio hendrerit massa, sed congue neque ante a justo. Phasellus et lacus vel arcu interdum sollicitudin. Morbi vitae ligula mattis, aliquet magna ut, sollicitudin velit. Etiam consequat fringilla aliquam. Donec sit amet justo sed risus hendrerit fermentum.
             
        <br>    
         <br>  
         <br>  
         <br>  
         
             <h2>Philosophy:</h2>
         <p>Auis diam et erat convallis dapibus. Morbi mauris urna, ultrices vel hendrerit at, dignissim a odio. Donec a nibh ut lectus finibus luctus. Nullam ut nisi molestie felis consectetur finibus non quis tortor. In ut dolor sem. Pellentesque vitae luctus magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus ligula diam, aliquet sit amet massa quis, luctus tristique lacus. Praesent sit amet viverra ante, fermentum ultrices metus. </p><p>Praesent condimentum facilisis facilisis. Praesent pharetra eget lacus vel congue. Curabitur vehicula nunc vitae tincidunt pellentesque. Nullam egestas augue nec orci venenatis pulvinar. Praesent id consequat quam, eu consequat metus. Duis erat lorem, pharetra vitae egestas sit amet, varius quis eros. Sed et massa eu ex vestibulum gravida vel non urna. Aenean euismod nulla sed arcu congue pellentesque. Donec risus nunc, porta quis cursus consequat, lacinia tincidunt ligula. In hac habitasse platea dictumst. Praesent fringilla lectus vel est auctor imperdiet. Etiam condimentum congue diam in pellentesque. Praesent gravida metus id odio scelerisque, in egestas diam fermentum. Maecenas vel maximus est, ut facilisis leo.</p> 
         -->

         <br>    
         <br>  
         <br>  
         <br> 
         <!--<p> Vivamus posuere dolor quam, et finibus felis consectetur vitae. Donec ornare purus tellus, vitae lacinia metus euismod sit amet. Morbi rhoncus mauris ut orci interdum tristique. Donec sed purus in nulla aliquam ultrices. Etiam consectetur et erat vitae tempor. Donec eget egestas risus. Duis ultrices, dui vel dictum pulvinar, metus nulla tristique nisi, sit amet lacinia massa turpis euismod purus.</p>
-->
        <!-- <p>Praesent sit amet viverra ante, fermentum ultrices metus. Praesent condimentum facilisis facilisis. Praesent pharetra eget lacus vel congue. Curabitur vehicula nunc vitae tincidunt pellentesque. Nullam egestas augue nec orci venenatis pulvinar. Praesent id consequat quam, eu consequat metus. Duis erat lorem, pharetra vitae egestas sit amet, varius quis eros. Sed et massa eu ex vestibulum gravida vel non urna. Aenean euismod nulla sed arcu congue pellentesque. Donec risus nunc, porta quis cursus consequat, lacinia tincidunt ligula. In hac habitasse platea dictumst. Praesent fringilla lectus vel est auctor imperdiet. Etiam condimentum congue diam in pellentesque. Praesent gravida metus id odio scelerisque, in egestas diam fermentum. Maecenas vel maximus est, ut facilisis leo.</p>-->
   <!--</div> Paragraph div
     </div> --> <!--Wrapper div-->
    <footer class="main-footer" id="footer">
        <h2 class="insta"><a href="https://www.instagram.com/charliebear_nyc/">Instagram</a></h2> <h3>https://www.instagram.com/charliebear_nyc/</h3>
			<p>All rights reserved to the state of <a href="#">New York</a>.</p>
		
		</footer>
       </div>
    </body>
</html>