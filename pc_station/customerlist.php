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
			    <li><a href="customerlist.php" class="active">Profile</a></li>
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
		<img src="css/images/profile.jpg" width="960" height="240" alt="" class="ctop" style="border: solid 1px #A8A8A8 ;" /></br></br>
		<!-- Content -->
		<div id="content">
		
			<h2>CUSTOMER LIST</h2><hr></br>
           <?php
include 'connection.php';

$query = "SELECT * FROM customer ORDER BY email ASC;";
$result = mysql_query ($query);
if($result === FALSE){
die (mysql_error());
}

echo "<center><table width=960>";
echo "<tr>
<th>#</th>
<th>Fullname</th>
<th>Email</th>
<th>Phone</th>
<th>Password</th>
<th>Membership</th>
<th>Serial Key</th>
<th>Expired Date</th>
<th>Action</th>
</tr>";

while ($customer = mysql_fetch_array ($result)){

echo "<tr>
<td width=30><center>".$customer ['customerID']."</center></td>
<td width=30><center>".$customer ['fullname']."</center></td>
<td width=30><center>".$customer ['email']."</center></td>
<td width=30><center>".$customer ['phone']."</center></td>
<td width=30><center>".$customer ['password']."</center></td>
<td width=30><center>".$customer ['member']."</center></td>
<td width=30><center>".$customer ['serial']."</center></td>
<td width=30><center>".$customer ['expire_date']."</center></td>
<td width=100><center>
<p><a href='vieworder.php?email=".$customer['email']."'><input type='button' value='View Order'></a></p></br>
<p><a href='update1(c).php?email=".$customer['email']."'><input type='button' value='Update'></a></p>
</td></tr>";
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