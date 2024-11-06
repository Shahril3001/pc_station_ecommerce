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
	$quantity =$_GET['quantity'];
	$date =$_GET['date'];
	if (isset($_GET['email']))
$email=$_GET['email'];
{
	$query1=mysql_query("SELECT from item_order where itemID='$itemID' AND quantity='$quantity' AND date='$date' ");
	$query2=mysql_query("DELETE from item_order where itemID='$itemID' AND quantity='$quantity' AND date='$date'");
	$query3=mysql_query("SELECT from p_cash where itemID='$itemID' AND date='$date'");
	$query4=mysql_query("DELETE from p_cash where itemID='$itemID' AND date='$date'");
	$query5=mysql_query("SELECT from p_credit where itemID='$itemID' AND date='$date'");
	$query6=mysql_query("DELETE from p_credit where itemID='$itemID' AND date='$date'");
	$query7=mysql_query("SELECT from p_debit where itemID='$itemID' AND date='$date'");
	$query8=mysql_query("DELETE from p_debit where itemID='$itemID' AND date='$date'");
	$query7=mysql_query("SELECT from p_shipping where email='$email' AND date='$date'");
	$query8=mysql_query("DELETE from p_shipping where email='$email' AND date='$date'");

		?>
		<script>alert('Delete successful.');</script>
	<?php
	header('Location:orderlist1.php?email='.$email.'');
}
}
?>
</body>
</html>