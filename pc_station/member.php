<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>PC Station</title>
	<link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />
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
			    <li><a href='orderlist1.php?email=".$email."'>Shipping</a></li>
			    <li><a href='member.php?email=".$email."' class='active'>Member</a></li>
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
		<img src="css/images/customer.jpg" width="960" height="240" alt="" class="ctop" style="border: solid 1px #A8A8A8 ;"/></br></br>
		<!-- Content -->
		<div id="content">
		<h2>MEMBERSHIP ACTIVATION</h2><hr></br>
<div id="login" style="margin:8px;background-color:#E7FB8B; padding:25px 25px 40px 25px;width:500px;border: solid 2px #E2F978;">
		<?php
$email=$_GET['email'];
echo "<form action='member2.php?email=".$email."' method='post' enctype='multipart/form-data'>";
 ?>
<center><h2>MEMBERSHIP ACTIVATION</h2><hr>
<p>Please enter your serial key to activate the membership . To get the serial key you need to pay membership fees BND$45 of our company nearby. As you activate it, you will get 10% discount every item that you buy. Please contact us for more information.</p></br></br>
<input type='text' name='serial' placeholder="Serial Key" class="textox"></br></br></br>

<input type="submit" value="Activate"></br></br>
</form>
</center>
</div>


		</div>
		<!-- End Content -->
		
		<!-- Sidebar -->
		<div id="sidebar">
			
			<!-- Categories -->
			<div class="box categories">
				<h2>Mailing Address</h2>
				<div class="box-content">
          <h3>PC Station Inc.</h3>
          <p>PC Station, PC Station Complex, Gadong BE3519,BSB<br />
          <br />
          Tel: +673 242 2455</p></br>
          <h2>Our Location</h2></br>
          <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.2009831743717!2d114.91428721477831!3d4.90600384120913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3222f5452ea1388d%3A0xf6138d8c4ea7a5ea!2sThe+Mall+Cineplex!5e0!3m2!1sms!2sbn!4v1456893481516" width="310" height="324" frameborder="0" style="border:0" allowfullscreen></iframe></p>
				</div>
			</div></br>
			
			
			<!-- End Categories -->
			
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