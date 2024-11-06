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
			    <li><a href="productlist(a).php">Product</a></li>
				<li><a href="customerlist.php">Profile</a></li>
			    <li><a href="orderlist.php" class="active">Shipping</a></li>
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
		<img src="css/images/shipping.jpg" width="960" height="240" alt="" class="ctop" style="border: solid 1px #A8A8A8 ;"/></br></br>
		<!-- Content -->
		<div id="content">
		
			<h2>ORDER LIST</h2><hr></br>
			<p align=center><a href="creditlist.php"><input type="button" value="Credit Card Payment" /></a>
			<a href="debitlist.php"><input type="button" value="Debit Card Payment" /></a>
			<a href="cashlist.php"><input type="button" value="Cash Payment" /></a></p></br></br>
           <?php
include 'connection.php';
$query = "SELECT * FROM item_order;";
$result = mysql_query ($query);
if($result === FALSE){
die (mysql_error());
}

echo "<center><table width=960>";
echo "<tr>
<th width=20>#</th>
<th>Item Name</th>
<th>Detail</th>
<th>Status</th>
<th>Action</th>
</tr>";

while ($porder = mysql_fetch_array ($result)){

echo "<tr>
<td width=50><center>".$porder ['orderID']."</center></td>
<td width=200><center><a href='viewitem.php?itemID=".$porder['itemID']."'><p>".$porder ['name']."</p></a></center></td>
<td>
<b>Price:</b> BND$".$porder ['price']."</br></br>
<p><b>Quantity:</b> ".$porder ['quantity']."</br></br>
<p><b>Payment Type:</b> ".$porder ['type']."</br></br>
<b>Total:</b> BND$".$porder ['amount']."</p></br>
<b>Date Order:</b> ".$porder ['date']." </br></br>
</td>
<td>
<center>".$porder ['status']."</center>
</td>
<td width=200><center>
<p><a href='viewpayment1.php?itemID=".$porder['itemID']."&email=".$porder['email']."&date=".$porder['date']."&type=".$porder['type']."'><input type='button' value='Payment'></a></p></br>
<p><a href='update(status).php?orderID=".$porder['orderID']."'><input type='button' name='apply' value='Update Status'></a></p></br>
<p><a href='cancel1.php?itemID=".$porder['itemID']."&email=".$porder['email']."&quantity=".$porder['quantity']."&date=".$porder['date']."'><input type='button' value='Remove'></a></p></br>
</td>
</tr>
";
}
echo "</table></br></center>";
?>
</center>
</br>
		</div>
		<!-- End Content -->
		
		<div class="cl">&nbsp;</div>
	</div>
	<!-- End Main -->
	
	<!-- Footer -->
	<div id="footer">
		<p align=center>Copyright &copy; 2016 <a href="adlogin.php">PC Station</a> - All Rights Reserved</p>
	</div>
	<!-- End Footer -->
	
</div>	
<!-- End Shell -->
	
	
</body>
</html>