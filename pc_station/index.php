<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>PC Station</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
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
			    <li><a href="index.php" class="active">Home</a></li>
			    <li><a href="about.php">About Us</a></li>
			    <li><a href="cuslogin.php">My Account</a></li>
			    <li><a href="contact.php">Contact Us</a></li>
			</ul>
		</div>
		<!-- End Navigation -->
	</div>
	<!-- End Header -->
	
	<!-- Main -->
	<div id="main">
		<div class="cl">&nbsp;</div>
		
		<!-- Content -->
		<div id="content">
			
			<!-- Content Slider -->
			<div id="slider" class="box">
				<div id="slider-holder">
					<ul>
					    <li><a href="#"><img src="css/images/banner/banner5.jpg" width=720px height=252px alt="" /></a></li>
					    <li><a href="#"><img src="css/images/banner/banner2.jpg" width=720px height=252px alt="" /></a></li>
					    <li><a href="#"><img src="css/images/banner/banner3.jpg" width=720px height=252px alt="" /></a></li>
					    <li><a href="#"><img src="css/images/banner/banner6.png" width=720px height=252px alt="" /></a></li>
					</ul>
				</div>
				<div id="slider-nav">
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
				</div>
			</div>
			<!-- End Content Slider -->
			</br>
			<div id="product-grid">
	<div class="txt-heading"><h1 style="padding-left:12px;">LATEST PRODUCTS</h1></div>
	<?php
	include 'connection.php';
$query = "SELECT * FROM pc_item ORDER BY date DESC LIMIT 8;";
$result = mysql_query ($query);
if($result === FALSE){
die (mysql_error());
}
while ($item = mysql_fetch_array ($result)){
	?>
		<div class="product-item">
			<div class="product-image"><?php echo "<img src='".$item['image']."' width='290' height='200' />" ; ?></div>
			<div class="product-name"><p><?php echo"<a href='viewitem1.php?itemID=".$item['itemID']."'><b>".$item ['name']."</b></a>";?></p></div>
			<div class="product-price">BND$<?php echo $item['price']; ?></div>
		</div>
	<?php
	}
	?>
</div>
		</div>
		<!-- End Content -->
		
		<!-- Sidebar -->
		<div id="sidebar">
			
			<!-- Categories -->
			<div class="box categories">
				<h2>Product Categories</h2>
				<div class="box-content">
					<ul>
					<?php echo"
						<li><a href='productlist.php?category=all'>All Product</a></li>
					    <li><a href='productlist.php?category=Mobile Phones & Accessories'>Mobile Phones & Accessories</a></li>
					    <li><a href='productlist.php?category=Computers & Tablets'>Computers & Tablets</a></li>
					    <li><a href='productlist.php?category=Computers Accessories'>Computers Accessories</a></li>
					    <li><a href='productlist.php?category=Cameras Accessories'>Cameras Accessories</a></li>
					    <li><a href='productlist.php?category=TV, Audio & Surveillance'>TV, Audio & Surveillance</a></li>
					    <li><a href='productlist.php?category=Video Games & Consoles'>Video Games & Consoles</a></li>
					    <li><a href='productlist.php?category=Musical Instruments & Gears'>Musical Instruments & Gears</a></li>
						";
						?>
					</ul>
				</div>
			</div></br>
			
			<div class="box categories">
				<h2>Search Product</h2>
				<div class="box-content">
				<form id='formsearch' name='formsearch' method='post' enctype='multipart/form-data' action='search1(item).php'>	
				<center>				
				</br><p><input type='text' name='name' value='' placeholder='Search by name' size=27></p></br>
				<p><select name="category" width=10>
				<option value="">--- Category ---</option>
				<option value="Mobile Phones & Accessories">Mobile Phones & Accessories</option>
				<option value="Computers & Tablets">Computers & Tablets</option>
				<option value="Computers Accessories">Computers Accessories</option>
				<option value="Cameras Accessories">Cameras Accessories</option>
				<option value="TV, Audio & Surveillance">TV, Audio & Surveillance</option>
				<option value="Video Games & Consoles">Video Games & Consoles</option>
				<option value="Musical Instruments & Gears">Musical Instruments & Gears</option>
				<option value="Others">Others</option>
				</select><p></br>
				<input type='submit' value='Search'/> <input type='reset' value='Clear'/>
				</center>
				</form></br>
				</div>
			</div>
			
			
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