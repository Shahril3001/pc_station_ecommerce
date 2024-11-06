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
		<img src="<?php $_GET['type']=0; $_GET['folder']='css/images/banner'; include 'randim.php'; ?>" width="960" height="240" alt="" class="ctop" style="border: solid 1px #A8A8A8 ;"/></br></br>
		<!-- Content -->
		<div id="content">
		
			<h2>ORDER LIST</h2><hr></br>
           <?php
include 'connection.php';
if(isset($_GET['orderID'])){
	$orderID=$_GET['orderID'];
	

	$query1=mysql_query("SELECT * FROM item_order WHERE orderID='$orderID'");

	$query2=mysql_fetch_array($query1);
	
	if(isset($_POST['submit'])){
	
		$_var1 = $_POST['new_status'];

	$query3 = "UPDATE item_order SET status='$_var1' WHERE orderID='$orderID'";
	$success = mysql_query($query3);
		if($success)
		{	 
            header('location:orderlist.php');	
		}
	}
		else
		{
		echo "";
		}
?>

<center>
<table width=960>
<form method="post" enctype="multipart/form-data">
<tr>
<th width=250>Order ID:</th>
<td style="background-color:#;"><?php echo $query2['orderID']; ?></td>
</tr>

<tr>
<th>Customer Email:</th>
<td style="background-color:#;"><?php echo $query2['email']; ?></td>
</tr>

<tr>
<th>Total Payment($):</th>
<td style="background-color:#;">$<?php echo $query2['amount']; ?></td>
</tr>

<tr>
<th>Quantity:</th>
<td style="background-color:#;"><?php echo $query2['quantity']; ?></td>
</tr>

<tr>
<th>Date Order:</th>
<td style="background-color:#;"><?php echo $query2['date']; ?></td>
</tr>

<tr>
<th>Order Status:</th>
<td style="background-color:#;"><select name="new_status">
    <option><?php echo $query2['status']; ?> </option>
    <option value="Pending">Pending</option>
    <option value="Deliver">Deliver</option>
    <option value="Success">Success</option>
    <option value="Cancelled">Cancelled</option>
  </select></td>
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
</table>
</center>
<?php
}
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
		<p align=center>Copyright &copy; 2016 <a href="">PC Station</a> - All Rights Reserved</p>
	</div>
	<!-- End Footer -->
	
</div>	
<!-- End Shell -->
	
	
</body>
</html>