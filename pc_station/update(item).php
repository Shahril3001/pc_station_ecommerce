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
			<h2>PRODUCT LIST (UPDATE)</h2><hr></br>
		 <center>
           <?php

	include 'connection.php';

	if(isset($_GET['itemID'])){
	$itemID=$_GET['itemID'];

	$query1=mysql_query("SELECT * FROM pc_item WHERE itemID='$itemID'");

	$query2=mysql_fetch_array($query1);
	if(isset($_POST['submit'])){
	$target_dir = "item/";
	$target_dir = $target_dir . basename( $_FILES["new_image"]["name"]);
	$uploadOk=1;

	if (file_exists($target_dir . $_FILES["new_image"]["name"])) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
	if ($uploadOk==0) {
		echo "Sorry, your file was not uploaded.";
	} 
	else { 
    if (move_uploaded_file($_FILES["new_image"]["tmp_name"], $target_dir)) 
	{
		$imageup = $target_dir;
		echo "<img src='" . $imageup . "' />";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
	
		$_var1 = $imageup;
		$_var2 = $_POST['new_name'];		
		$_var3 = $_POST['new_category'];		
		$_var4 = $_POST['new_price'];		
		$_var5 = $_POST['new_descri'];		
		$_var6 = $_POST['new_status'];							

	$query3 = "UPDATE pc_item SET  image='$_var1', name='$_var2', category='$_var3', price='$_var4', descri='$_var5', status='$_var6' WHERE itemID='$itemID'";
	$success = mysql_query($query3);
		if($success)
		{	
		$old_pic= $query2['image'];
			if (file_exists($old_pic)) 
			{
				unlink($old_pic); 
			} 	
            header('location:productlist(a).php');	
		}
}
		else
		{
		echo "";
		}
?>

<center><table width=960>
<form method="post" enctype="multipart/form-data">
<tr>
<th width=120>Image:</th>
<td style="background-color:#; color:black;"><input type="file" name="new_image"  />	Old picture: <?php echo "<img src='".$query2['image']."' width='50' height='50' />" ; ?></td>
</tr>

<tr>
<th width=200>Name:</th>
<td style="background-color:#;"><input type="text" name="new_name" size="50" 
value="<?php echo $query2['name']; ?>" /></td>
</tr>

<tr>
<th width=200>Category:</th>
<td style="background-color:#;"><select name="new_category">
<option value="<?php echo $query2['category']; ?>">--- Select the category here ---</option>
<option value="Mobile Phones & Accessories">Mobile Phones & Accessories</option>
<option value="Computers & Tablets">Computers & Tablets</option>
<option value="Computers Accessories">Computers Accessories</option>
<option value="Cameras Accessories">Cameras Accessories</option>
<option value="TV, Audio & Surveillance">TV, Audio & Surveillance</option>
<option value="Video Games & Consoles">Video Games & Consoles</option>
<option value="Musical Instruments & Gears">Musical Instruments & Gears</option>
<option value="Others">Others</option>
</select></td>
</tr>

<tr>
<th width=200>Price:</th>
<td style="background-color:#;">BND$ <input type="text" name="new_price" size="43" 
value="<?php echo $query2['price']; ?>" /></td>
</tr>
<tr>
<th width=200>Available:</th>
<td style="background-color:#;"><select name="new_status">
    <option value="<?php echo $query2['status']; ?>">--- Select the status here ---</option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
  </select></td>
</tr>

<tr>
<th width=200>Description:</th>
<td style="background-color:#;"><textarea name="new_descri" cols="120" rows="20"><?php echo $query2['descri']; ?></textarea></td>
</tr>

<tr>
<td colspan='2' align='center' style="background-color:#;"><input type="submit" name="submit" 
value="Update" /> <input type="button" name="back" value="Cancel" onclick="goBack()">
<script>
function goBack(){
window.history.back();
}
</script></td>
</tr>
</form>
</table></center>
</br>
<?php
}
?>
		</div>
		<!-- End Content -->
		
		<div class="cl">&nbsp;</div>
	</div>
	<!-- End Main -->
	
	<!-- Footer -->
	<div id="footer">
		<p align=center>Copyright &copy; 2016 <a href="">PC Station</a> - All Rights Reserved</p>
	</div>
	<!-- End Footer -->
	
</div>	
<!-- End Shell -->
	
	
</body>
</html>