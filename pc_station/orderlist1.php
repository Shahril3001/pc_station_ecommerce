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
			<?php
			$email=$_GET['email'];
			echo"<li><a href='index2.php?email=".$email."'>Home</a></li>
			    <li><a href='product.php?email=".$email."'>Product</a></li>
			    <li><a href='orderlist1.php?email=".$email."' class='active'>Shipping</a></li>
			    <li><a href='member.php?email=".$email."'>Member</a></li>
			    <li><a href='contact(c).php?email=".$email."'>Contact Us</a></li>";
			?>
			    <li><a href="#" onclick="myFunction()">Sign Out</a></li>
<script>
function myFunction() {
    var x;
    if (confirm("Are you sure to log out?") == true) {
		window.location="<?php echo "logout.php?email=".$email.""; ?>";
    } else {
    }
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
			<p>This summary below are cannot be change unless you delete them and proceed another new order not less than 1 day after submission. Please refer to our <?php echo "<a href='#'>Terms of Use</a>";?> or contact us for more information.</p><center></br>
           <?php
include 'connection.php';
$query = "SELECT * FROM item_order WHERE email='$email';";
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

while ($item = mysql_fetch_array ($result)){

echo "<tr>
<td width=50><center>".$item ['orderID']."</center></td>
<td width=200><center><a href='viewitem2.php?itemID=".$item['itemID']."&email=".$email."'><p>".$item ['name']."</p></a></center></td>
<td>
<b>Price:</b> BND$".$item ['price']."</br></br>
<p><b>Quantity:</b> ".$item ['quantity']."</br></br>
<p><b>Payment Type:</b> ".$item ['type']."</br></br>
<b>Total:</b> BND$".$item ['amount']."</p></br>
<b>Date Order:</b> ".$item ['date']." </br></br>
</td>
<td>
<center>".$item ['status']."</center>
</td>
<td width=200><center>
<p><a href='viewpayment.php?itemID=".$item['itemID']."&email=".$email."&date=".$item['date']."&type=".$item['type']."'><input type='button' value='Payment'></a></p></br>
<p><a href='cancel.php?itemID=".$item['itemID']."&quantity=".$item['quantity']."&date=".$item['date']."&email=".$email."'><input type='button' value='Cancel'></a></p>
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
		<p align=center><a href="">Terms of Use</a> | <a href="">Policy</a> - Copyright &copy; 2016 <a href="#">PC Station</a> - All Rights Reserved</p>
	</div>
	<!-- End Footer -->
	
</div>	
<!-- End Shell -->
	
	
</body>
</html>