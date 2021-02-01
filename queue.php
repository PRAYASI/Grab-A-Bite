<?php 
session_start();
$db = mysqli_connect('localhost','root','','grababite') or die("Could not connect to tables");
$uid=$_SESSION['id'];
if(isset($_POST['clear']))
{
	$qid=$_POST['clear'];
	$delete="delete from queue where qid='$qid'";
	$deletecon=mysqli_query($db,$delete);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css_style_sheet.css">
    <title>Queue</title>
    <style>
    * 
        {
        box-sizing: border-box;
        }
        body 
        {
        margin: 0;
        background-color: "#590c04";
        }
        /* Style the header */
        .header 
        {
        background-color: #00cccc;
        padding: 2px;
        text-align: center;
        }
        /* Style the top navigation bar */
        .topnav 
        {
        overflow: hidden;
        background-color: #333;
        }
        /* Style the topnav links */
        .topnav a
        {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }
        /* Change color on hover */
        .topnav a:hover 
        {
        background-color: #ddd;
        color: black;
        }
        .l2{
            text-align: center;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;
            font-size:24px;
            height:46px;
        }
        .l3{
            text-align: center;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;
            font-size:20px;
            height:36px;
        }
        img{
            height:300px; 
            width:375px;
        }
        #i{
            height:75px;
            width:75px;
        }
		.cmnts{
	position:relative;
	width:80%;
	top:15%;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
		.footer{
			top:100%;
		}
</style></head>
<body>
    <!--bgcolor="#871205"-->
    <div class="header">
        <h1>GRAB A BITE</h1>
        </div>
        <div class="topnav">
            <a href="home.php">Home</a>
            <?php if($_SESSION['atr']=="Admin"){ echo '<a href="queue.php">Queue</a>';} ?>
			<?php if($_SESSION['atr']=="User"){ echo '<a href="menu.php">Main Menu</a>';} ?>
            <?php if($_SESSION['atr']=="User"){ echo '<a href="cart.php">Cart</a>';} ?>
            <a href="About_Us.php">About Us</a>
            <a href="login.php">Logout</a>
          </div>
          <br><center>
		  <?php 
		  $display="select * from queue order by qid asc";
		  $displayq=mysqli_query($db,$display);
		  $i=0;//Extracting the value from the queue table using the query
		  while($displayrow=mysqli_fetch_array($displayq))
		  {
			  //Displaying the orders in the queue dynamically 
			  echo '<div class="cmnts">
			  <table>
			  <tr><td>Regno:</td><td>'.$displayrow['regno'].'</td></tr>
			  <tr><td>Name:</td><td>'.$displayrow['name'].'</td></tr>
			  <tr><td>Items and Quantities:</td><td>'.$displayrow['details'].'</td></tr>
			  </table>
			  <form action="queue.php" method="post"> 
			  <button style="position:absolute;float:right;top:20%;left:90%;" name="clear" value='.$displayrow['qid'].'>Clear</button>
			  </form>
			  </div><br>';
		  }
		  
		  ?>
    <br><br><br><br>
     <div class="footer">
            <p style="color:white;">&#169; Vellore Instutide of Technology, Chennai - GRAB A BITE  </p>
        </div>
    <center>Copyright &COPY GRAB A BITE</center>
</body>
</html>