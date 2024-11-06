<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>PC Station</title>
	<link rel="stylesheet" href="css/style1.css" type="text/css" media="all" />
	<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
	
	<meta name="keywwords" content="Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms" />
	<meta name="description" content="Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms" />
	
	<!-- JS -->
	<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>	
	<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>	
	<script src="js/jquery-func.js" type="text/javascript"></script>	
	<!-- End JS -->
	
</head>
<body>
	
<!-- Shell -->	
<div class="shell">
	
	<!-- Header -->	
	<div id="header">
		<div id="logo"><h1>PC STATION</h1></div>
		
		<!-- Navigation -->
		<div id="navigation">
			<ul>
			    <li><a href="index1.php">Home</a></li>
			    <li><a href="productlist(a).php" class="active">Product</a></li>
			    <li><a href="customerlist.php">Profile</a></li>
			    <li><a href="orderlist.php">Shipping</a></li>
			    <li><a href="feedback.php">Feedback</a></li>
			    <li><a href="#" onclick="myFunction()">Sign Out</a></li>
				<script>
				function myFunction() {
				var x;
				if (confirm("Are you sure to log out?") == true) {
				window.location="logout1.php";
				} else {}
				}
				</script>
			</ul>
		</div>
		<!-- End Navigation -->
	</div>
	<!-- End Header -->
	
	<!-- Main -->
	<div id="main">
		<div class="cl">&nbsp;</div>
		
		<!-- Content -->
		<div id="content">
			<h2>ITEM (VIEW DETAIL)</h2><hr></br>
          <?php
include 'connection.php';

if(isset($_GET['itemID'])){
$itemID=$_GET['itemID'];
$query = "SELECT * FROM pc_item WHERE itemID='$itemID'";
$result = mysql_query($query);

if($result === FALSE){
	die(mysql_error());
}
echo"<table width=960>";
while($item = mysql_fetch_array($result)){
	echo "<tr>
	<td rowspan=9 width=270><img src= '".$item['image']."' width='270' height='270'/></td>
	<th width=590 colspan=3>Detail</th>
	</tr>
	<tr>
	<td colspan=3 height=150>
	<b>Name:</b> ".$item['name']."</br></br>
	<b>Price:</b> BND$".$item['price']."</br></br>
	<b>Available:</b> ".$item['status']."</br></br>
	<b>Quantity Left:</b> ".$item['quantity']."</br></br>
	<b>Date Release:</b> ".$item['date']."</br><p style='margin-bottom:50px;'></p>
	<p align=right><input type='button' onClick='window.print()' value='Print'> <input type='button' value='Return' onclick='goBack()'></p>
<script>function goBack(){window.history.back();}</script></td>
	</tr>
	<tr>
	<td width=196px><center><p style='color:green;font-size:20px;'>Free</p>
	Shipping</center></td>
	<td width=196px><center><p style='color:green;font-size:20px;'>".$item['total_sold']."</p>
	Sold</center></td>
	<td width=196px><center><p style='color:green;font-size:20px;'>".$item['date_return']."-day</p>
	Returns</center></td>
	</tr>
	
	</table></br>
	<table width='960px'>
	<tr>
	<td style='color:white;font-family : Arial Narrow;background-color:#6BB90B;'><b>Description</b></td>
	</tr>
	<tr>
	<td style='height:250px;padding:30px;'>".$item['descri']."</td>
	</tr>
	
	";
	echo "</table>";
	?>
</center>
</br>
	
<?php
}
}
?>
		</div>
		<!-- End Content -->
		
		<div class="cl">&nbsp;</div>
	</div>
	<!-- End Main -->
	
	<!-- Footer -->
	<div id="footer">
		<p align=center>Copyright &copy; 2016 <a href="">PC Station</a> - All Rights Reserved</p>
	</div>
	<!-- End Footer -->
	
</div>	
<!-- End Shell -->
	
	
</body>
</html>