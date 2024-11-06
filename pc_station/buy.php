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
			    <li><a href='product.php?email=".$email."' class='active'>Product</a></li>
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
		<img src="css/images/orderbanner.jpg" width="960" height="240" alt="" class="ctop" style="border: solid 1px #A8A8A8 ;"/></br></br>
		<!-- Content -->
		<div id="content">
		<?php
include 'connection.php';

	if(isset($_GET['email'])){
	$email=$_GET['email'];
	$query1=mysql_query("SELECT * FROM customer WHERE email='$email'");
	$query2=mysql_fetch_array($query1);
	
	$itemID=$_GET['itemID'];
	$query3=mysql_query("SELECT * FROM pc_item WHERE itemID='$itemID'");
	$query4=mysql_fetch_array($query3);

?>
<h2>ORDER ITEM</h2><hr>
<p>Please fill in completely this form before submit. Thank you.</p></br>
<center>
<?php
echo "<table style='width:960px; height:490px;font-size:19px;'>";
echo "<form action='buy2.php?email=".$email."&itemID=".$itemID."' method='post' enctype='multipart/form-data'>";
 ?>

<input type="hidden" name="email" value="<?php echo $query2['email']; ?>" />
<input type="hidden" name="member" value="<?php echo $query2['member']; ?>" />
<input type="hidden" name="feemember" value="<?php echo $query2['feemember']; ?>" />
<input type="hidden" name="itemID" value="<?php echo $query4['itemID']; ?>" />

<tr>
<th colspan=6>Order Detail</th>
</tr>

<tr>
<td width=200><b>Item Name:</b></td>
<td><input type="text" name="name" value="<?php echo $query4['name']; ?>" size=70 readonly /></td>
</tr>

<tr>
<td><b>Price(BND$):</b></td>
<td><input type="text" name="price" value="<?php echo $query4['price']; ?>" size=20 readonly /></td>
</tr>

<tr>
<td><b>Available:</b></td>
<td><input type="text" value="<?php echo $query4['status']; ?>" size=20 readonly /></td>
</tr>

<tr>
<td><b>Quantity Left:</b></td>
<td><input type="text" value="<?php echo $query4['quantity']; ?>" size=20 readonly /></td>
</tr>

<tr>
<td><b>Quantity Buy:</b></td>
<td><input type="number" name="quantity1"/></td>
</tr>

<tr>
<td><b>Type of Payment:</b></td>
<td colspan=2><input type="radio" name="payment" value="Cash">Cash &nbsp &nbsp &nbsp
<input type="radio" name="payment" value="Credit Card"/>Credit Card &nbsp &nbsp
<input type="radio" name="payment" value="Debit Card"/>Debit Card &nbsp &nbsp </td>
</tr>

<input type="hidden" name="date" value="<?php echo date("Y-m-d");?>"/>

<tr>
<td colspan=6 style="padding:15px;">
<p>I confirm that I have read and agree with PC Station Company <?php $email=$_GET['email'];
          echo "<a href='#'>Terms of Use</a>";?> and agree that the above information may be used by Brunei Trade Development Council for incorporation in all or any of its database for business matching, and for any other purpose as stated in <?php $email=$_GET['email'];
          echo "<a href='#'>Privacy Policy Statement.</a>";?></p></br></br>
<center><input type="submit" name="submit" value="Confirm">
    <script type="text/javascript">
You have success add the order. Please proceed to payment receipt.
    </script>
<input type="button" name="back" value="Cancel" onclick="goBack()">
<script>
function goBack(){
window.history.back();
}
</script></center></td>
</tr>
<?php
echo "</form>";
echo "</table>";
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
<?php
}
?>	
</body>
</html>