<?php
session_start();
if(isset($_POST['menu']))
{
$_SESSION['attribute']=$_POST['menu'];
echo "<script>window.open('submenu.php','_self')</script>";
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu page</title>
    <link rel="stylesheet" type="text/css" href="css_style_sheet.css">
    <style>
        img{
            height:300px;
            width:375px;
        }
        #i{
            height:75px;
            width:75px;
        }
        .s
        {
            float: left; margin: 0px 0px 0px 0px;
            height:75px;
            width:75px;
        }
</style></head>
<body>
<div class="header">
            <table class="center">
            <tr>
            <td><img class="s" src="Images/icon.png" ></td>
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
    <br><br>
    <center>
	<form action="menu.php" method="post">
        <table rules="all" >
            <tr class="l2"  height="46px" bgcolor="#00cccc"><td>Breads</td><td>Fresh Juices</td><td>Desserts</td></tr>
        <tr><td>
            <button name="menu" value="snacks"><img src="https://b.zmtcdn.com/data/pictures/chains/4/18553674/1896b7f9df3ecff1483c2644928953b6.jpg" height=290px width=340px></button></td>
        </td>
            <td><button name="menu" value="Juices"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSuM_iz9s0KrsE88-7X69HsqnG4ztGWF93a7g&usqp=CAU.jpg" height=290px width=340px></button></td>
          
        <td>
            <button name="menu" value="Desserts"><img src="https://static.toiimg.com/photo/75508582.cms" height=290px width=340px></button>
        </td>
        </tr>
        <tr class="l2" bgcolor="#00cccc" height="46px"><td>Fried Delights</td><td>Bakery</td><td>Chineese</td></tr>
        <tr>
            <td><button name="menu" value="Fried">
                <img src="https://thecozycook.com/wp-content/uploads/2020/02/Copycat-McDonalds-French-Fries--500x375.jpg" height=270px width=340px>
            </button> </td>
                <td><button name="menu" value="Bakery">
                <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/ipbqqetz5lhgmszatkvp.jpg" height=270px width=340px></td>
            </button>
            <td>
                <button name="menu" value="Fast Food">  <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/zrqiqgmpyrtqjuh8eag8.png" height=270px width=340px>
            </button></td>
        </tr></table>
		</form>
   </center>
</body>
<div class="footer">
            <p style="color:white;">&#169; Vellore Instutide of Technology, Chennai - GRAB A BITE  </p>
        </div>
</body>
</html>