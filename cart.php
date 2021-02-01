<?php include('cartserver.php') ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css_style_sheet.css">
    <title>Cart</title>
    <style>
		img
		{
            height:300px; 
            width:375px;
        }
		#i
		{
            height:75px;
            width:75px;
		}
		.cmnts
		{
			position:relative;
			width:80%;
			top:15%;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			left:10%;
		}
			.cmnt
		{
			position:relative;
			height:15%;
			width:80%;
			top:15%;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			left:10%;
		}
		button
        {
        background-color: #00cccc;
        border: none;
        color: #333k;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
		cursor: pointer;
		border-radius: 4px;
		}
		.s
        {
            float: left; margin: 0px 0px 0px 0px;
            height:75px;
            width:75px;
        }
		.t
        {
        margin-left: auto;
		margin-right: auto;
		border:none;
        border-collapse: collapse;
        }
        th
        {
        color: #004d99;
        padding: 10px;
        }
        td
        {
            padding: 10px;     
		}
		h2,h3
		{
		    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;
		}
    </style>
</head>
<body >
<div id="body" style="position:absolute;top:0;left:0;width:100%;height:100%;background-color:black;opacity:0.5;z-index:3;visibility:hidden;">
</div>  <!--bgcolor="#871205"-->
<div class="header">
            <table class="center">
            <tr>
            <td><img class="s" src="Images/icon.png" ></td>
            <td><h1>GRAB A BITE</h1></td>
            </tr>
            </table>
        </div>
        <div class="topnav">
            <a href="Home.php">Home</a>
            <a href="menu.php">Main Menu</a>
            <a href="cart.php">Cart</a>
            <a href="About_Us.php">About Us</a>
            <a href="login.php">Logout</a>
          </div>
          <br>
		  <?php 
		  $sum=0;
		  for($j=0;$j<$i;$j++)
		  {
			  //Dynamically showing the list of items available in the shop which was extracted in the server
			  	echo 
				'<form action="cart.php" method="post">
				<div class="cmnts">';
				echo '<table class="t" border=1>
				<tr><td rowspan=3><img style="" src="data:image/jpeg;base64,'.base64_encode( $cart[$j]['image'] ).'
				"width="30%" height="30%"/></td>
				<td>Food name:'.$cart[$j]['foodname'].'</td></tr>
				<tr><td>Food price: Rs. '.$cart[$j]['price'].' per piece</td></tr>
				<tr><td>Quantity: <input name="qty" type="number" value='.$cart[$j]['qty'].' ></td></tr>
				</table>
				<button style="position:absolute;float:right;top:40%;left:90%;" name="update" value='.$cart[$j]['foodid'].'>
				Update</button>
				<button style="position:absolute;float:right;top:60%;left:90%;" name="delete" value='.$cart[$j]['foodid'].'>
				Delete</button>';
				echo '</form></div>';//Displaying the image name and price of the food 
				$sum=$sum+($cart[$j]['price']*$cart[$j]['qty']);
		  }
		  
		  ?>
		  <div class="cmnt">
		  <form action="cart.php" method="post">
		  <br><br>
		  <table border=0 > <tr><td>Total Amount:</td><td><?php echo $sum; ?></td></tr></table>
		  <?php if($sum==0){echo '<button style="position:absolute;float:right;top:30%;left:90%;" name="check" value='.$sum.' disabled>Check out</button>';}
		  else{ echo '<button style="position:absolute;float:right;top:30%;left:90%;" name="check" value='.$sum.'>Check out</button>';} ?>
		  </form></div>
    <br><br><br><br>
     <div class="footer">
            <p style="color:white;">&#169; Vellore Instutide of Technology, Chennai - GRAB A BITE  </p>
        </div>
</body>
</html>
<?php
if(isset($_POST['check']))
{
	//Displaying the 3-D Card which confirms us after clicking the checkout button
	$queue="select * from cart where regno='$uid'";
	$queueconn=mysqli_query($db,$queue) or die ("Could not connect to tables");
	echo '<script>document.getElementById("body").style.visibility="visible";</script>';
	echo '<div style="position:absolute;top:30%;left:25%;width:50%;z-index:11;background-color: #333;
	color: #f2f2f2;margin-left:15px;">';
	echo '<form action="cart.php" method="post">';
	echo '<h1>Are you sure You wanna place the order ?</h1>';
	echo '<h3>Please choose the payment method</h3>';
	echo '<input type="radio" name="payment" value="Cash">Cash On Delivery';
	echo '<br><input type="radio" name="payment" value="gpay">Google pay<br>';
	$products="";
	$total=0;
	//Collecting the information from the Cart page
	while($queuerow=mysqli_fetch_array($queueconn))
	{
		//Storing the data in a variable
		echo $queuerow['qty']."*".$queuerow['foodname']." with price ".$queuerow['price']."<br>";
		$total=$total+($queuerow['qty']*$queuerow['qty']);
		$products.=$queuerow['qty']."*".$queuerow['foodname']." with price ".$queuerow['price']."<br>";
		//Adding them to the queue table later
	}
	echo 'Grand Total = '.$_POST['check'];
	echo '<button name="pay" value="'.$products.'">Pay</button><a href="cart.php"><button>Back</button></a> </center>';
	echo "</form><h2>Note: In case if you'd like to pay through G-Pay<br>Pay to the number mentioned below <br>
		and please dont forget to mention your register number in the message(PH.NO: 9988776655)</div>";
}
if(isset($_POST['pay']))
{
	if(isset($_POST['payment']))
	{
		$queue="select * from cart where regno='$uid'";
		$queueconn=mysqli_query($db,$queue) or die ("Could not connect to tables");
		$total=0;
		while($queuerow=mysqli_fetch_array($queueconn))
		{
			$total=$total+($queuerow['price']*$queuerow['qty']);
		}
		$details=$_POST['pay'];
		$payment=$_POST['payment'];
		$uname=$_SESSION['uname'];
		$queueinsert="insert into queue (regno,name,details,payment) value ('$uid','$uname','$details','$payment')";
		$queueq=mysqli_query($db,$queueinsert) or die ("Could not connect to tables");
		$delete="delete from cart where regno='$uid'";
		$deleteq=mysqli_query($db,$delete) or die ("Could not connect to tables");
		echo "<script>window.open('home.php','_self')</script>";
	}
	else
	{
		$queue="select * from cart where regno='$uid'";
		$queueconn=mysqli_query($db,$queue) or die ("Could not connect to tables");
		echo '<script>document.getElementById("body").style.visibility="visible";</script>';
		echo '<div style="position:absolute;top:30%;left:25%;width:50%;z-index:11;background-color: #333;color: #f2f2f2;margin-left:15px;">';
		echo '<form action="cart.php" method="post">';
		echo '<h1>Enter the payment mehod</h1>';
		echo '<h1>Are you sure You wanna place the order ?</h1>';
		echo '<h3>Please choose the payment method</h3>';
		echo '<input type="radio" name="payment" value="Cash">Cash On Delivery';
		echo '<br><input type="radio" name="payment" value="gpay"><br>Google pay';
		$products="";
		$total=0;
		while($queuerow=mysqli_fetch_array($queueconn))
		{
			echo $queuerow['qty']."*".$queuerow['foodname']." with price ".$queuerow['price']."<br>";
			$total=$total+($queuerow['price']*$queuerow['qty']);
			$products.=$queuerow['qty']."*".$queuerow['foodname']." with price ".$queuerow['price']."\n";
			echo $total;
		}
		echo 'Grand Total = '.$total;
		echo '<button name="pay" value="'.$products.'">Pay</button><a href="cart.php"><button>Back</button></a> </center>';
		echo "</form><h2>Note: In case if you'd like to pay through G-Pay<br>Pay to the number mentioned below <br>
		and please dont forget to mention your register number in the message(PH.NO: 9988776655)</div>";
	}
}
?> 