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
		<div id="navigation" class="ddsmoothmenu">
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
		<img src="css/images/our-products.jpg" width="960" height="240" alt="" class="ctop" style="border: solid 1px #A8A8A8 ;" /></br></br>
		<div class="searchform">
          <form id='formsearch' name='formsearch' method='post' enctype='multipart/form-data' action='search1(item).php'>			
		  <input type='text' name='name' value='' placeholder='Search by name'> <select name="category" width=10>
<option value="">--- Category ---</option>
<option value="Mobile Phones & Accessories">Mobile Phones & Accessories</option>
<option value="Computers & Tablets">Computers & Tablets</option>
<option value="Computers Accessories">Computers Accessories</option>
<option value="Cameras Accessories">Cameras Accessories</option>
<option value="TV, Audio & Surveillance">TV, Audio & Surveillance</option>
<option value="Video Games & Consoles">Video Games & Consoles</option>
<option value="Musical Instruments & Gears">Musical Instruments & Gears</option>
<option value="Others">Others</option>
  </select>
            <input type='submit' value='Search'/>
          </form>
        </div>
		<!-- Content -->
		<div id="content">
		<h2>PRODUCT LIST</h2><hr></br>
            <?php
include 'connection.php';
if(isset($_GET['category'])){
$category=$_GET['category'];
if($category == "all")
{
$query = "SELECT * FROM pc_item";
$result = mysql_query ($query);
if($result === FALSE){
die (mysql_error());
}
echo "<center><table width=960>";
echo "<tr>
<th>Item Image</th>
<th>Detail</th>
<th>Action</th>
</tr>";

while ($item = mysql_fetch_array ($result)){
echo "<tr>
<td width=250><center><img src= '".$item['image']."' width='180' height='180' /></center></td>
<td height='200'><a href='viewitem1.php?itemID=".$item['itemID']."'><h2>".$item ['name']."</h2></a></br>
<b>Price:</b> &nbsp &nbsp &nbsp &nbsp BND$".$item ['price']."</br></br>
<b>Available:</b> &nbsp ".$item ['status']."</br></br>
<p>Buy It Now</p></br><b style='color:green;'>Free International Shipping<b></td>
<td width=150><center>
<p><a href='cuslogin.php'><input type='button' value='Buy'></a></p></td></tr>";
}
echo "</table></br></center>";
}

else
{
if(isset($_GET['category'])){
$category=$_GET['category'];
$query = "SELECT * FROM pc_item WHERE category LIKE '%".$category."%'";
$result = mysql_query ($query);
if($result === FALSE){
die (mysql_error());
}
echo "<center><table width=960>";
echo "<tr>
<th>#</th>
<th>Item Image</th>
<th>Detail</th>
<th>Action</th>
</tr>";

while ($item = mysql_fetch_array ($result)){
echo "<tr>
<td width=30><center>".$item ['itemID']."</center></td>
<td width=250><center><img src= '".$item['image']."' width='180' height='180' /></center></td>
<td height='200'><a href='viewitem1.php?itemID=".$item['itemID']."'><h2>".$item ['name']."</h2></a></br>
<b>Price:</b> &nbsp &nbsp &nbsp &nbsp BND$".$item ['price']."</br></br>
<b>Available:</b> &nbsp ".$item ['status']."</br></br>
<p>Buy It Now</p></br><b style='color:green;'>Free International Shipping<b></td>
<td width=150><center>
<p><a href='cuslogin.php'><input type='button' value='Buy'></a></p></td></tr>";
}
echo "</table></br></center>";
?>

<?php
}
}
}
?>	
		</div>
		<!-- End Content -->
		
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