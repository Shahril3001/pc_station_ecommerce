<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>PC Station</title>
	<link rel="stylesheet" href="css/style3.css" type="text/css" media="all" />
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
			echo"<li><a href='index2.php?email=".$email."' class='active'>Home</a></li>
			    <li><a href='product.php?email=".$email."'>Product</a></li>
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
		<center>
		<h2>WELCOME TO CUSTOMER DASHBOARD</h2>
		<?php 
		include 'connection.php';
		$email=$_GET['email'];
		$query1=mysql_query("SELECT * FROM customer WHERE email='$email'");
		$query2=mysql_fetch_array($query1);?>
		<p>[Your Last Login Was: <?php echo $query2['last_login']; ?>.]</p>
		</center></br>
		<hr></br>
		<!-- Content Slider -->
			<div id="slider" class="box">
				<div id="slider-holder">
					<ul>
					    <li><a href="#"><img src="css/images/banner/banner5.jpg" width=960px height=252px alt="" /></a></li>
					    <li><a href="#"><img src="css/images/banner/banner2.jpg" width=960px height=252px alt="" /></a></li>
					    <li><a href="#"><img src="css/images/banner/banner3.jpg" width=960px height=252px alt="" /></a></li>
					    <li><a href="#"><img src="css/images/banner/banner6.png" width=960px height=252px alt="" /></a></li>
					</ul>
				</div>
				<div id="slider-nav">
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
				</div>
			</div>
			<!-- End Content Slider --></br></br>
		<!-- Content -->
		<div id="content">
		<h2 align=left>CUSTOMER PROFILE</h2>
	  <hr>
	  <p>This is your profile in our database. You can update them by click "Update Profile button".</p></br>
	  
	  <center>     
           <?php
include 'connection.php';

if(isset($_GET['email'])){
$email=$_GET['email'];
$query = "SELECT * FROM customer WHERE email='$email'";
$result = mysql_query($query);

if($result === FALSE){
	die(mysql_error());
}
echo"<table width=400>";
echo"<tr>
<th colspan=3>Personal Detail</th>";

while($customer = mysql_fetch_array($result)){
	echo "
	<tr>
	<td width=100><b>Full Name:</b></td><td>   ".$customer['fullname']."</td>
	</tr>
	<tr>
	<td><b>H/P No:</b></td><td>  ".$customer['phone']."</td>
	</tr>
	<tr>
	<td><b>Email:</b></td><td>  ".$customer['email']."</td>
	</tr>
	<tr>
	<td><b>Password:</b></td><td>   ".$customer['password']."</td>
	</tr>
	<tr>
	<td><b>Membership:</b></td><td>  ".$customer['member']."</td>
	</tr>
	<tr>
	<td><b>Expired Date:</b></td><td>  ".$customer['expire_date']."</td>
	</tr>
	";
	
	echo "</table>";

	?>
	</br>
	<?php  echo"<a href='update(c).php?email=".$customer['email']."'><input type='button' value='Update Profile'></a>"; }}?>
						</br>
						</br>
		</div>
		<!-- End Content -->
		
		<!-- Sidebar -->
		<div id="sidebar">
				<h2>HISTORY</h2><hr>
				</br>
				<?php
include 'connection.php';

$query = "SELECT * FROM p_shipping WHERE email='$email';";
$result = mysql_query ($query);
if($result === FALSE){
die (mysql_error());
}
echo"<div style='height:300px;width:auto;overflow:auto;'>";
echo "<center><table width=510>";
echo "<tr>
<th>#</th>
<th>Email</th>
<th>Date</th>
</tr>";

while ($ship = mysql_fetch_array ($result)){

echo "<tr>
<td width=30>".$ship ['shippingID']."</td>
<td width=260><a href='vieworder2.php?email=".$ship['email']."&date=".$ship['date']."'>".$ship ['email']."</a></td>
<td><center>".$ship ['date']."</center></td>
</tr>";
}
echo "</table></br></center>";
echo"</div>";
?>
		</br>	
		</div>
		<!-- End Sidebar --> 
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