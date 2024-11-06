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
		<!-- Content -->
		<div id="content">
			<h2>ADD ITEM</h2><hr></br>
           <center>
	<form action="additem2.php" method="post" enctype="multipart/form-data">
	<table width="960px">

<tr>
<th colspan=2>Item Detail</th>
</tr>

<tr>
<td width="140"><b>Name:</b></td><td> <input type="text" size=120 name="name"/></br></td>
</tr>
<tr>
<td><b>Image:</b></td><td><input type="file" name="image"/></br></td>
</tr>
<tr>
<td><b>Category:</b></td><td><select name="category">
<option value="">--- Select the category here ---</option>
<option value="Mobile Phones & Accessories">Mobile Phones & Accessories</option>
<option value="Computers & Tablets">Computers & Tablets</option>
<option value="Computers Accessories">Computers Accessories</option>
<option value="Cameras Accessories">Cameras Accessories</option>
<option value="TV, Audio & Surveillance">TV, Audio & Surveillance</option>
<option value="Video Games & Consoles">Video Games & Consoles</option>
<option value="Musical Instruments & Gears">Musical Instruments & Gears</option>
<option value="Others">Others</option>
  </select></br></td>
</tr>
<tr>
<td><b>Description:</b></td><td><textarea name="descri" cols="120" rows="20">
<li></li><br>
<li></li><br>
<li></li><br>
<li></li><br>
<li></li><br>
<li></li><br>
<li></li><br>
<li></li><br>
<li></li><br>
<li></li><br>
</textarea></br></br></td>
</tr>
<tr>
<td><b>Price(BND$):</b></td><td>BND$ <input type="text" name="price"/></br></td>
</tr>
<tr>
<td><b>Quantity:</b></td><td><input type="number" name="quantity"/></br></td>
</tr>
<tr>
<td><b>Available:</b></td><td><select name="status">
    <option value="">--- Select the condition here ---</option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
  </select></td>
</tr>
<input type="hidden" name="date" value="<?php echo date("Y-m-d g:i:s");;?>"/>
<tr>
<td colspan=2><center><input type="submit" value="Add">
<input type="button" name="back" value="Cancel" onClick="goBack()">
<script>
function goBack(){
window.history.back();
}
</script></center></td>
</tr>
</table>
</form>
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