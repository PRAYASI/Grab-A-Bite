<?php 
	session_start();
	if(isset($_POST["Submit"]))
	{
	$regno="";
	$password="";
	$db = mysqli_connect('localhost','root','','grababite') or die("Could not connect to tables");
	$regno=mysqli_real_escape_string($db,$_POST["regno"]);
	$password=mysqli_real_escape_string($db,$_POST["password"]);
	$regno=strtoupper($regno);
	if(empty($regno)) echo "<script>window.open('login.php','_self');alert('Enter the username');</script>";
	if(empty($password)) echo "<script>alert('Enter the password');</script>";
	$query="select * from users where userid='$regno' and password='$password'";//Validating the password
	$conrows=mysqli_query($db,$query);
	$row=mysqli_fetch_array($conrows);// Connecting to sql and fetching array
	$rows=mysqli_num_rows($conrows);
	if($rows==1)
	{	//If the number is 1 then the credentials are valid thereby directing them 
		//to the corresponding page with respect to the user
		$_SESSION['uname']=$row['username'];
		$_SESSION['id']=$regno;//Extracting the values 
		$_SESSION['atr']=$row['attribute'];
		if($row['attribute']=="Admin"){//directing them to the webpge
		echo "<script>window.open('home.php','_self')</script>";}
		else {echo "<script>window.open('home.php','_self')</script>";}
	}
	else
	{
		echo "<script>alert('Invalid user credentials')</script>";
	}
	}
?>