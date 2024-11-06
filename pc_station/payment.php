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
			include 'connection.php';
			if(isset($_GET['email'])){
			$email=$_GET['email'];
			$query1=mysql_query("SELECT * FROM customer WHERE email='$email'");
			$query2=mysql_fetch_array($query1);
			?>
			
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
		<img src="css/images/our-products.jpg" width="960" height="240" alt="" class="ctop" style="border: solid 1px #A8A8A8 ;" /></br></br>
		<!-- Content -->
		<div id="content">
		
<h2>PAYMENT FORM (CREDIT)</h2><hr></br><center>
<?php
echo "<table width='960px'>";
echo "<form action='credit2.php?email=".$email."' method='post' enctype='multipart/form-data'>";
 ?>
<tr>
<th colspan=2>Credit Card Detail</th>
</tr>

<tr>
<td width=250><b>Full Name:</b></td>
<td><input type="text" name="fullname" value="<?php echo $query2['fullname']; ?>" size=60 /></td>
</tr>

<tr>
<td><b>Email:</b></td>
<td><input type="text" name="icnumber" value="<?php echo $query2['email']; ?>" size=60 readonly /></td>
</tr>

<tr>
<td><b>Address:</b></td>
<td><input type="text" name="address" size=80 /></td>
</tr>

<tr>
<td><b>Bank Name:</b></td>
<td><input type="text" name="bankname" placeholder="(Required)" size=30 /></td>
</tr>

<tr>
<td><b>Pin Number:</b></td>
<td><input type="text" name="nocredit" placeholder="(Required)" size=30 /></td>
</tr>

<tr>
<td><b>Expired Date:</b></td>
<td><input type="date" name="expired_date" /></td>
</tr>

<input type="hidden" name="date" value="<?php echo date("Y-m-d g:i:s");?>"/>

<tr>
<td colspan=2>
<p>I confirm that I have read and agree with PC Station Company <?php $email=$_GET['email'];
          echo "<a href='#'>Terms of Use</a>";?> and agree that the above information may be used by Brunei Trade Development Council for incorporation in all or any of its database for business matching, and for any other purpose as stated in <?php $email=$_GET['email'];
          echo "<a href='#'>Privacy Policy Statement.</a>";?></p></br>
<center><input type="submit" value="Confirm">
<script type="text/javascript">
Congratulations! You have success. Please wait the order until it have send to you home.
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
		<p align=center>Copyright &copy; 2016 <a href="adlogin.php">PC Station</a> - All Rights Reserved</p>
	</div>
	<!-- End Footer -->
	
</div>	
<!-- End Shell -->
<?php
}
?>
</body>
</html>