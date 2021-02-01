<?php 
session_start();
$db = mysqli_connect('localhost','root','','grababite') or die("Could not connect to tables");
$attribute=$_SESSION['attribute'];
$food="select * from items where attribute='$attribute'";//Query for extracting the data of the particular submenu
$foodcon=mysqli_query($db,$food) or die("Cannot connect to the tables");
$i=0;
while($foodrow=mysqli_fetch_array($foodcon))
{
	//Storing all the extracted values from the table into the variables
	$fooddetails[$i]['foodid']=$foodrow['foodid'];
	$fooddetails[$i]['foodname']=$foodrow['foodname'];
	$fooddetails[$i]['price']=$foodrow['price'];
	$fooddetails[$i]['image']=$foodrow['image'];
	$i++;
}
if(isset($_POST['buy']))
{
	$item=$_POST['buy'];
	$uid=$_SESSION['id'];
	$fname=$fooddetails[$item]['foodname'];
	$fid=$fooddetails[$item]['foodid'];
	$fprice=$fooddetails[$item]['price'];
	$boolq="select count(*) as total from cart where regno='$uid' and foodid='$fid'";
	$boolconn=mysqli_query($db,$boolq);
	$boolrow=mysqli_fetch_assoc($boolconn);
	if($boolrow['total']==0){
	$qty=1;
	$itemq="insert into cart (regno,foodid,foodname,price,qty) values ('$uid','$fid','$fname','$fprice','$qty')";
	$itemcon=mysqli_query($db,$itemq) or die("Cannot connect to the tables");}
	else
	{
		echo '<script>alert("This item is alreay in the cart")</script>';
	}
}

?>
