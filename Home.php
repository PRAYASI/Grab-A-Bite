<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
    <head>
        <title>Grab A Bite</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <noscript>Sorry but your browser don't support this document</noscript>
        <link rel="stylesheet" type="text/css" href="css_style_sheet.css">
    </head>
    <body>
        <div class="header">
            <table class="center">
            <tr>
            <td><img style="float: left; margin: 0px 0px 0px 0px;" src="Images/icon.png" height="75" width="75" ></td>
            <td><h1>GRAB A BITE</h1></td>
            </tr>
            </table>
        </div>
        <div class="topnav">
            <a href="#">Home</a>
            <?php if($_SESSION['atr']=="Admin"){ echo '<a href="queue.php">Queue</a>';} ?>
			<?php if($_SESSION['atr']=="User"){ echo '<a href="menu.php">Main Menu</a>';} ?>
            <?php if($_SESSION['atr']=="User"){ echo '<a href="cart.php">Cart</a>';} ?>
            <a href="About_Us.php">About Us</a>
            <a href="login.php">Logout</a>
          </div>
        <div class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="Images/Home/image1.gif" style="width:100%">
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="Images/Home/image2.gif" style="width:100%">
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="Images/Home/image3.gif" style="width:100%">
            </div>
            
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            
            </div>
            <br>
            
            <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span> 
              <span class="dot" onclick="currentSlide(2)"></span> 
              <span class="dot" onclick="currentSlide(3)"></span> 
            </div>
            
            <script>
            var slideIndex = 1;
            showSlides(slideIndex);
            
            function plusSlides(n) {
              showSlides(slideIndex += n);
            }
            
            function currentSlide(n) {
              showSlides(slideIndex = n);
            }
            
            function showSlides(n) {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
            }
            </script>
            
        <div class="footer">
            <p style="color:white;">&#169; Vellore Instutide of Technology, Chennai - GRAB A BITE  </p>
        </div>
    </body>
</html>
