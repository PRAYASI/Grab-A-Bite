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
            <a href="home.php">Home</a>
            <?php if($_SESSION['atr']=="Admin"){ echo '<a href="queue.php">Queue</a>';} ?>
			<?php if($_SESSION['atr']=="User"){ echo '<a href="menu.php">Main Menu</a>';} ?>
            <?php if($_SESSION['atr']=="User"){ echo '<a href="cart.php">Cart</a>';} ?>
            <a href="About_Us.php">About Us</a>
            <a href="login.php">Logout</a>
          </div>
        <img style="display: block; margin-left: auto; margin-right: auto; width: 40%;"src="Images/Capture.gif" height="250" width="600">
<p>Hey !!! We are Loura, Sabhari, Anthra, Prayasi - four friends from Vellore Institude of Technology, Chennai who are the builders of this website. We worked really hard for this.
    We learned a lot in this process, both technical and life skils. Our knowlege on HTML, CSS, JavaScript, PHP, Software Engineering has improved. Also we have learned how to work with a team professionally, 
    we learned hear everyones idea and come up with solutions that helped eveeryone.
</p>
            
        <div class="footer">
            <p style="color:white;">&#169; Vellore Instutide of Technology, Chennai - GRAB A BITE  </p>
        </div>
    </body>
</html>
