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
			    <li><a href="productlist(a).php" class="active">Product</a></li>
			    <li><a href="customerlist.php">Profile</a></li>
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
		<img src="css/images/our-products.jpg" width="960" height="240" alt="" class="ctop" style="border: solid 1px #A8A8A8 ;" /></br></br>
		<div class="searchform">
          <form id='formsearch' name='formsearch' method='post' enctype='multipart/form-data' action='search(item).php'>			
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
		 <center><p><a href="additem.php"><input type="button" value="Click Here To Add Item!" /></a></p></br></br>
           <?php
include 'connection.php';

$query = "SELECT * FROM pc_item ORDER BY date ASC;";
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
<td height='200'><a href='viewitem.php?itemID=".$item['itemID']."'><h2>".$item ['name']."</h2></a></br>
<p><b>Category:</b>".$item ['category']."</br></br>
<b>Price:</b>BND$".$item ['price']."</br></br>
<b>Available:</b>".$item ['status']."</br></br>
<b>Date Release:</b>".$item ['date']."</p></br></td>
<td width=150><center>
<p><a href='update(item).php?itemID=".$item['itemID']."'><input type='button' value='Update'></a></p></br>
<p><a href='update(quantity).php?itemID=".$item['itemID']."'><input type='button' value='Stock'></a></p></br>
<p><a href='remove(item).php?itemID=".$item['itemID']."'><input type='button' value='Remove'></td></tr>";
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