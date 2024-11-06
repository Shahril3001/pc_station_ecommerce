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
		<img src="css/images/our-products.jpg" width="960" height="240" alt="" class="ctop" style="border: solid 1px #A8A8A8 ;" /></br></br>
		<!-- Content -->
		<div id="content">
			<h2>PRODUCT LIST (STOCK)</h2><hr></br>
		 <center>
           <?php

	include 'connection.php';

	if(isset($_GET['itemID'])){
	$itemID=$_GET['itemID'];

	$query1=mysql_query("SELECT * FROM pc_item WHERE itemID='$itemID'");

	$query2=mysql_fetch_array($query1);
	if(isset($_POST['submit'])){
				
		$_var6 = $_POST['new_total_sold'];				
		$_var7 = $_POST['new_quantity'];				
		$_var8 = $_POST['new_date_return'];				

	$query3 = "UPDATE pc_item SET total_sold='$_var6', quantity='$_var7', date_return='$_var8' WHERE itemID='$itemID'";
	$success = mysql_query($query3);
		if($success)
		{		
            header('location:productlist(a).php');	
		}
}
		else
		{
		echo "";
		}
?>

<center><table width=960>
<form method="post" enctype="multipart/form-data">

<tr>
<th width=200>Name:</th>
<td style="background-color:#;"><input type="text" name="new_name" size="50" 
value="<?php echo $query2['name']; ?>" readonly /></td>
</tr>

<tr>
<th width=200>Total Sold:</th>
<td style="background-color:#;"><input type="number" name="new_total_sold" size="50" 
value="<?php echo $query2['total_sold']; ?>" /></td>
</tr>

<tr>
<th width=200>Quantity:</th>
<td style="background-color:#;"><input type="number" name="new_quantity" size="50" 
value="<?php echo $query2['quantity']; ?>" /></td>
</tr>

<tr>
<th width=200>Date Return:</th>
<td style="background-color:#;"><input type="number" name="new_date_return" size="50" 
value="<?php echo $query2['date_return']; ?>" /></td>
</tr>

<tr>
<td colspan='2' align='center' style="background-color:#;"><input type="submit" name="submit" 
value="Update" /> <input type="button" name="back" value="Cancel" onclick="goBack()">
<script>
function goBack(){
window.history.back();
}
</script></td>
</tr>
</form>
</table></center>
</br>
<?php
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