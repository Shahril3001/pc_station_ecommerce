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
			    <li><a href="index.php">Home</a></li>
			    <li><a href="about.php">About Us</a></li>			    
			    <li><a href="cuslogin.php">My Account</a></li>
			    <li><a href="contact.php" class="active">Contact Us</a></li>
			</ul>
		</div>
		<!-- End Navigation -->
	</div>
	<!-- End Header -->
	
	<!-- Main -->
	<div id="main">
		<div class="cl">&nbsp;</div>
		<img src="css/images/contact.jpg" width="960" height="240" alt="" class="ctop" style="border: solid 1px #A8A8A8 ;"/></br></br>
		<!-- Content -->
		<div id="content">
			<h2>CONTACT US</h2><hr>
        <p>If you have any question, you can submit the	message with fill in your name and email below.</p></br>
		  <form id="contact" action="contact2.php" method="post">
		  <table width="620" height="318">
		  <tr>
		  <input type="hidden" name="date" value="<?php echo date("Y-m-d g:i:s");;?>"/>
            <th width="128" style="color:white;">Name:</th>
			<td width="365" style="background-color:white;"><input type="text" name="fullname" placeholder="(Required)"/></td></tr>
            <tr>
			<th style="color:white;">Email:</th>
			<td style="background-color:white;"><input type="text" name="email" placeholder="(Required)"/></td></tr>
			<tr>
            <th height="135" style="color:white;">Message:</th>
			<td style="background-color:white;"><textarea rows="5" cols="45" name="feedback"></textarea></td>
			</tr>
			<tr>
			<td style="background-color:white;" colspan=2><center><input type="submit" name="submit" value="Submit">
			    <script type="text/javascript">
Your feedback have been send.
                </script>
<input type="reset" name="reset" value="Clear">
<script type="text/javascript">
All are have been cleared.
</script>
			</center></td>
			</tr>
			</table>
	    </form>
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
		<p class="left">
			<a href="index.php">Home</a>
			<span>|</span>
			<a href="about.php">About</a>
			<span>|</span>
			<a href="cuslogin.php">My Account</a>
			<span>|</span>
			<a href="contact.php">Contact Us</a>
		</p>
		<p class="right"><a href="">Terms of Use</a> | <a href="">Policy</a> - Copyright &copy; 2016 <a href="adlogin.php">PC Station</a> - All Rights Reserved</p>
	</div>
	<!-- End Footer -->
	
</div>	
<!-- End Shell -->
	
	
</body>
</html>