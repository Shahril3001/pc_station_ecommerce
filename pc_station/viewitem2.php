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
			$email=$_GET['email'];
			echo"<li><a href='index2.php?email=".$email."'>Home</a></li>
			    <li><a href='product.php?email=".$email."' class='active'>Product</a></li>
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
		<div class="searchform">
		
         <?php $email=$_GET['email']; echo"<form id='formsearch' name='formsearch' method='post' enctype='multipart/form-data' action='search2(item).php?email=".$email."'>";?>		
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
			<h2>ITEM (VIEW DETAIL)</h2><hr></br>
          <?php
include 'connection.php';

if(isset($_GET['itemID'])){
$itemID=$_GET['itemID'];
$query = "SELECT * FROM pc_item WHERE itemID='$itemID'";
$result = mysql_query($query);

if($result === FALSE){
	die(mysql_error());
}
echo"<table width=960>";
while($item = mysql_fetch_array($result)){
	echo "<tr>
	<td rowspan=9 width=270><img src= '".$item['image']."' width='270' height='270'/></td>
	<th width=590 colspan=3>Detail</th>
	</tr>
	<tr>
	<td colspan=3 height=150>
	<b>Name:</b> ".$item['name']."</br></br>
	<b>Price:</b> BND$".$item['price']."</br></br>
	<b>Available:</b> ".$item['status']."</br></br>
	<b>Quantity Left:</b> ".$item['quantity']."</br><p style='margin-bottom:60px;'></p>
	<p align=right><a href='buy.php?itemID=".$item['itemID']."&email=".$email."'><input type='button' value='Buy'></a> <a href='product.php?email=".$email."'><input type='button' value='Return'></a></p></td>
	</tr>
	<tr>
	<td width=196px><center><p style='color:green;font-size:20px;'>Free</p>
	Shipping</center></td>
	<td width=196px><center><p style='color:green;font-size:20px;'>".$item['total_sold']."</p>
	Sold</center></td>
	<td width=196px><center><p style='color:green;font-size:20px;'>".$item['date_return']."-day</p>
	Returns</center></td>
	</tr>
	
	</table></br>
	<table width='960px'>
	<tr>
	<td style='color:white;font-family : Arial Narrow;background-color:#6BB90B;'><b>Description</b></td>
	</tr>
	<tr>
	<td style='height:250px;padding:30px;'>".$item['descri']."</td>
	</tr>
	
	";
	echo "</table>";
	?>
</center>
</br>
	
<?php
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
		<p align=center><a href="">Terms of Use</a> | <a href="">Policy</a> - Copyright &copy; 2016 <a href="#">PC Station</a> - All Rights Reserved</p>
	</div>
	<!-- End Footer -->
	
</div>	
<!-- End Shell -->
	
	
</body>
</html>