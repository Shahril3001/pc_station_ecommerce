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
		<img src="css/images/our-products.jpg" width="960" height="240" alt="" class="ctop" style="border: solid 1px #A8A8A8 ;"/></br></br>
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
			<h2>PRODUCT LIST (SEARCH PRODUCT)</h2><hr></br>
           <?php
            session_start();

include 'connection.php';
$email=$_GET['email'];
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
<th>Item Image</th>
<th>Detail</th>
<th>Action</th>
</tr>";


for ($i = 0; $i < $num_results; $i++)
{
$row = mysql_fetch_array($results);
echo "<tr>
<td width=250><center><img src= '".$row['image']."' width='180' height='180' /></center></td>
<td height='200'><a href='viewitem2.php?itemID=".$row['itemID']."&email=".$email."'><h2>".$row ['name']."</h2></a></br>
<b>Price:</b> &nbsp &nbsp &nbsp &nbsp BND$".$row ['price']."</br></br>
<b>Available:</b> &nbsp ".$row ['status']."</br></br>
<p>Buy It Now</p></br><b style='color:green;'>Free International Shipping<b></td>
<td width=150><center>
<p><a href='buy.php?itemID=".$row['itemID']."&email=".$email."'><input type='button' value='Buy'></a></p></td></tr>";
}
echo "</table></br></center>";
echo "</br>";
}

else if ($num_results == 0)
{
	echo "</br>";
	echo "<center>";
	echo "<img src='css/images/success.jpg' width='200' height='200'>";
	echo "<p>There are no results.</p></br>";
	echo "<p><a href=\"product.php?email=".$email."\"><input type='button' name='back' value='Back to Search'/></a></p>";
	echo "</center>";
}
else
{
	echo "<center><img src='images/warning.jpg' width='200' height='200'>";
	echo "<p>Something wrong on".mysql_error()."</p></center>";
}

?>
</br>
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