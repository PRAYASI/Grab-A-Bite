<?php 
session_start();
$db = mysqli_connect('localhost','root','','grababite') or die("Could not connect to tables");
$uid=$_SESSION['id'];
if(isset($_POST['update']))
{
	$fid=$_POST['update'];
	$qty=$_POST['qty'];
	$check="select * from items where foodid='$fid'";
	$checkconn=mysqli_query($db,$check);
	$checkrow=mysqli_fetch_array($checkconn);
	if($checkrow['qty']>=$qty){
	$update="update cart set qty='$qty' where regno='$uid' and foodid='$fid'";
	$updateconn=mysqli_query($db,$update) or die ("Could not connect to tables");
	$updateqt="update items set qty=qty-'$qty' where foodid='$fid'";
	$updateqtc=mysqli_query($db,$updateqt);}
	else{
		echo '<script>alert("Cannot order more than the available quantity '.$checkrow['qty'].'")</script>';
	}
}
if(isset($_POST['delete']))
{
	$fid=$_POST['delete'];
	$delete="delete from cart where regno='$uid' and foodid='$fid'";
	$deleteconn=mysqli_query($db,$delete) or die ("Could not connect to tables");
}

$cartq="select * from cart where regno='$uid'";
$cartconn=mysqli_query($db,$cartq);
$i=0;
while($cartrow=mysqli_fetch_array($cartconn))
{
	$cart[$i]['foodname']=$cartrow['foodname'];
	$cart[$i]['price']=$cartrow['price'];
	$cart[$i]['qty']=$cartrow['qty'];
	$cart[$i]['foodid']=$cartrow['foodid'];
	$fpic=$cartrow['foodid'];
	$pic="select * from items where foodid='$fpic'";
	$picconn=mysqli_query($db,$pic);
	$picrow=mysqli_fetch_array($picconn);
	$cart[$i]['image']=$picrow['image'];
	$i++;
}





?>