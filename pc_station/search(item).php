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
		<h2>PRODUCT LIST (SEARCH PRODUCT)</h2><hr></br>
           <?php
            session_start();

include 'connection.php';

$name = mysql_real_escape_string($_REQUEST['name']);
$category = mysql_real_escape_string($_REQUEST['category']);

$query= "SELECT * from pc_item where name LIKE '%".$name."%' AND category LIKE '%".$category."%'";

$results = mysql_query($query);
$num_results = mysql_num_rows($results);

if ($num_results !=0)
{
echo "<p>There is $num_results that match your search and are shown below:</p></br>";
echo "<table width='960'>";
echo "<tr>
<th>#</th>
<th>Item Image</th>
<th>Detail</th>
<th>Action</th>
</tr>";


for ($i = 0; $i < $num_results; $i++)
{
$row = mysql_fetch_array($results);
echo "<tr>
<td width=30><center>".$row ['itemID']."</center></td>
<td width=250><center><img src= '".$row['image']."' width='180' height='180' /></center></td>
<td height='200'><a href='viewitem.php?itemID=".$row['itemID']."'><h2>".$row ['name']."</h2></a></br>
<p><b>Category:</b>".$row ['category']."</br></br>
<b>Price:</b>BND$".$row ['price']."</br></br>
<b>Available:</b>".$row ['status']."</br></br>
<b>Date Release:</b>".$row ['date']."</p></br></td>
<td width=150><center>
<p><a href='update(item).php?itemID=".$row['itemID']."'><input type='button' value='Update'></a></p></br>
<p><a href='update(quantity).php?itemID=".$row['itemID']."'><input type='button' value='Stock'></a></p></br>
<p><a href='remove(item).php?itemID=".$row['itemID']."'><input type='button' value='Remove'></td></tr>";
}
echo "</table></br></center>";
echo "</br>";
}

else if ($num_results == 0)
{
	echo "</br>";
	echo "<center>";
	echo "<img src='css/images/success.jpg' width='200' height='200'>";
	echo "<p>There are no results.</p>";
	echo "<p><a href=\"productlist(a).php\"><input type='button' name='back' value='Back to Search'/></a></p>";
	echo "</center>";
}
else
{
	echo "<center><img src='images/warning.jpg' width='200' height='200'>";
	echo "<p>Something wrong on".mysql_error()."</p></center>";
}

?>
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