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
		
			<h2>CUSTOMER LIST (UPDATE)</h2><hr></br></br>
          <?php

	include 'connection1.php';

	if(isset($_GET['email'])){
	$email=$_GET['email'];

	$query1=mysql_query("SELECT * FROM customer WHERE email='$email'");

	$query2=mysql_fetch_array($query1);
	
	if(isset($_POST['submit'])){
	
		$_var1 = $_POST['new_member'];

	$query3 = "UPDATE customer SET member='$_var1' WHERE email='$email'";
	$success = mysql_query($query3);
		if($success)
		{	 

            header('location:customerlist.php');	
				}
}
		else
		{
		echo "";
		}
?>
<form method="post" enctype="multipart/form-data">
<table width=960>
<tr>
<th colspan=3>Personal Detail</th>
</tr>
<td width=250><b>Full Name:</b></td><td><input type="text" size="30"  value="<?php echo $query2['fullname']; ?>" readonly /></td>
</tr>

<tr>
<td><b>Membership:</b></td><td><select name="new_member">
    <option value="<?php echo $query2['member']; ?>">--- Select the status here ---</option>
    <option value="Activated">Activated</option>
    <option value="Not Activated">Not Activated</option>
  </select></td>
</tr>

<?php
}
?>
<tr>
<td colspan=2><center><input type="submit" name="submit" value="Update" /> <input type="button" name="back" value="Cancel" onclick="goBack()">
<script>
function goBack(){
window.history.back();
}
</script></center></td>
</tr>
</table></br>

</form>
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