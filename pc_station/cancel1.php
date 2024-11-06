<!DOCTYPE html>
<html>
<head>
<title>Delete Payment</title>
</head>
<body>
<?php
include 'connection.php';
if (isset($_GET['itemID']))
{
	$itemID =$_GET['itemID'];
	$email =$_GET['email'];
	$quantity =$_GET['quantity'];
	$date =$_GET['date'];
	$query1=mysql_query("SELECT from item_order where itemID='$itemID' AND quantity='$quantity' AND date='$date' AND email='$email'");
	$query2=mysql_query("DELETE from item_order where itemID='$itemID' AND quantity='$quantity' AND date='$date' AND email='$email'");
	$query3=mysql_query("SELECT from p_cash where itemID='$itemID' AND date='$date' AND email='$email'");
	$query4=mysql_query("DELETE from p_cash where itemID='$itemID' AND date='$date' AND email='$email'");
	$query5=mysql_query("SELECT from p_credit where itemID='$itemID' AND date='$date' AND email='$email'");
	$query6=mysql_query("DELETE from p_credit where itemID='$itemID' AND date='$date' AND email='$email'");
	$query7=mysql_query("SELECT from p_debit where itemID='$itemID' AND date='$date' AND email='$email'");
	$query8=mysql_query("DELETE from p_debit where itemID='$itemID' AND date='$date' AND email='$email'");
	$query9=mysql_query("SELECT from p_shipping where date='$date' AND email='$email'");
	$query10=mysql_query("DELETE from p_shipping where date='$date' AND email='$email'");

		?>
		<script>alert('Delete successful.');</script>
	<?php
	header('Location:orderlist.php');
}
?>
</body>
</html>