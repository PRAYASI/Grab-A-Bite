<?php include('submenuserver.php') ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['attribute']; ?>-Sub menu </title>
	<link rel="stylesheet" type="text/css" href="css_style_sheet.css">
	<style>
	 img{​​​​

            height:300px;

            width:375px;

        }​​​​

        .s

        {​​​​

            float: left; margin: 0px 0px 0px 0px;

            height:75px;

            width:75px;

        }
		button

        {​​

        background-color: #00cccc;

        border: none;

        color: #333k;

        padding: 16px 32px;

        text-decoration: none;

        margin: 4px 2px;

        cursor: pointer;

        border-radius: 4px;

        }
	</style>
</head>
<body>
    <!--bgcolor="#871205"-->
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
          <br><center>
	<form action="submenu.php" method="post">
          <table><tr><td><h1><?php echo strtoupper($_SESSION['attribute']); ?></h1></td></tr></table></center>
    <table rules="all" frame="none" cellspacing="10px" cellpadding=6 frame="box" align="center">
	<?php 
	for($j=0;$j<$i;$j=$j+4)
	{
		echo '<tr>';
		echo '<td><img src="data:image/jpeg;base64,'.base64_encode($fooddetails[$j]['image']).'" /></td>
		<td><img src="data:image/jpeg;base64,'.base64_encode($fooddetails[$j+1]['image']).'" /></td>
		<td><img src="data:image/jpeg;base64,'.base64_encode($fooddetails[$j+2]['image']).'" /></td>
		<td><img src="data:image/jpeg;base64,'.base64_encode($fooddetails[$j+3]['image']).'" /></td></tr>';
		echo '<tr bgcolor=" #00cccc" class="l2">';
		echo '<td>'.$fooddetails[$j+0]['foodname'].'</td>
		<td>'.$fooddetails[$j+1]['foodname'].'</td>
		<td>'.$fooddetails[$j+2]['foodname'].'</td>
		<td>'.$fooddetails[$j+3]['foodname'].'</td></tr>';
		echo '<tr bgcolor="#333" style="color:white;" cell padding=6  class="l3">';
		echo '<td>Rs.'.$fooddetails[$j+0]['price'].'</td>
		<td>Rs.'.$fooddetails[$j+1]['price'].'</td>
		<td>Rs.'.$fooddetails[$j+2]['price'].'</td>
		<td>Rs.'.$fooddetails[$j+3]['price'].'</td></tr>';
		echo '<tr bgcolor="#333" style="color:white;" cell padding=6  class="l3">';
		$a=$j+1;
		$b=$j+2;
		$c=$j+3;
		echo '<td><button name="buy" value='.$j.'>Add to cart</button></td>
		<td><button name="buy" value='.$a.'>Add to cart</button></td>
		<td><button name="buy" value='.$b.'>Add to cart</button></td>
		<td><button name="buy" value='.$c.'>Add to cart</button></td></tr>';
	}
	?>
	</table>
	<!--<table rules="all" frame="none" cellspacing="10px" cell padding=6 frame="box">
        <tr>
            <td><img src="https://www.readersdigest.ca/wp-content/uploads/2014/02/black-forest-cake-scaled.jpg"></td>
            <td><img src="https://images-gmi-pmc.edge-generalmills.com/586d4c5d-5c89-40aa-85ca-e67e942e12f4.jpg"></td>
            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRtlqnofk9T2YxubT1NJX4LieggBGQXarnb0Q&usqp=CAU"></td>
            <td><img src="https://cache.desktopnexus.com/thumbseg/1324/1324947-bigthumbnail.jpg"></td>
        </tr>
        <tr bgcolor="#c45549" class="l2">
            <td>Black Forest</td><td>Brownies</td><td>Cookies</td><td>Pancakes</td>
        </tr>
        <tr bgcolor="#faff75" class="l3" cell padding=6 >
            <td>Rs.70</td><td>Rs.65</td><td>Rs.40</td><td>Rs.90</td>
        </tr>
        <br><br>
        <tr>
            <td><img src="https://www.simplyrecipes.com/wp-content/uploads/2018/03/GF-Chocolate-Donuts-LEAD-HORIZONTAL.jpg"></td>
            <td><img src="https://static.toiimg.com/photo/54866662.cms"></td>
            <td><img src="https://envato-shoebox-0.imgix.net/ea59/76fa-792c-4648-a884-fafc43a1f2d6/1077+%2812%29.jpg?auto=compress%2Cformat&fit=max&mark=https%3A%2F%2Felements-assets.envato.com%2Fstatic%2Fwatermark2.png&markalign=center%2Cmiddle&markalpha=18&w=700&s=c5319829a1953b6b2195631ba08028ad.png"></td>
            <td><img src="https://theeclectickitchen.com/wp-content/uploads/2014/12/Crystal-Cartier-apple-pie-3261crop1.jpg"></td>
        </tr>
        <tr bgcolor="#c45549" class="l2">
            <td>Donut</td><td>Cupcakes</td><td>Choco Truffle</td><td>Apple Pie</td>
        </tr>
        <tr  bgcolor="#faff75" cell padding=6  class="l3">
            <td>Rs.70</td><td>Rs.65</td><td>Rs.40</td><td>Rs.90</td>
        </tr>
    </table>-->
	</form>
    <br><br><br><br>
	
    <center>Copyright &COPY GRAB A BITE</center>
	        <div class="footer">
            <p style="color:white;">&#169; Vellore Instutide of Technology, Chennai - GRAB A BITE  </p>
        </div>
</body>
</html>