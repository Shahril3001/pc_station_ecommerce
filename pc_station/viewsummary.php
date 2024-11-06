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
			    <li><a href='item.php?email=".$email."' class='active'>Product</a></li>
			    <li><a href='orderlist1.php?email=".$email."'>Shipping</a></li>
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
		<img src="css/images/orderbanner.jpg" width="960" height="240" alt="" class="ctop" style="border: solid 1px #A8A8A8 ;" /></br></br>
		<!-- Content -->
		<div id="content">
		<h2>ORDER SUMMARY</h2><hr>
		<p>This is your order summary. Please proceed to payment method for continue.</p></br>
	 
           <?php
include 'connection.php';
if(isset($_GET['itemID'])){
$itemID=$_GET['itemID'];
$query3=mysql_query("SELECT * FROM pc_item WHERE itemID='$itemID'");
$query4=mysql_fetch_array($query3);

$quantity1=$_GET['quantity1'];
$payment=$_GET['payment'];
$amount=$_GET['amount'];
$date=$_GET['date'];


echo "<center><table width=960>";
echo "<tr>
<th>Name</th>
<th>Price</th>
<th>Quantity Item</th>
<th>Payment Type</th>
<th>Total Amount</th>
<th>Date</th>
<th>Action</th>
</tr>";

echo "<tr>
<td width=200>".$query4['name']."</td>
<td>BND$".$query4['price']."</td>
<td><center>".$quantity1."</center></td>
<td><center>".$payment."</center></td>
<td>BND$".$amount."</td>
<td>".$date."</td>
<td><center><p><a href='viewsummary2.php?email=".$email."&itemID=".$itemID."&quantity1=".$quantity1."&payment=".$payment."&amount=".$amount."'><input type='button' value='Go To Payment'></a></p></br>
<p><input type='button' onclick='myCancel()' value='Cancel'></p></center>
<script>
function myCancel() {
    var x;
    if (confirm('Are you sure to cancel the order?') == true) {
		window.location='product.php?email=".$email."'
    } else {
    }
}
</script>
</td>
</tr>";
}
echo "</table></center>";
?>
</br>

		</div>
		<!-- End Content -->
		
		<div class="cl">&nbsp;</div>
	</div>
	<!-- End Main -->
	
	<!-- Footer -->
	<div id="footer">
		<p align=center><a href="">Terms of Use</a> | <a href="">Policy</a> - Copyright &copy; 2016Copyright &copy; 2016 <a href="#">PC Station</a> - All Rights Reserved</p>
	</div>
	<!-- End Footer -->
	
</div>	
<!-- End Shell -->

</body>
</html>