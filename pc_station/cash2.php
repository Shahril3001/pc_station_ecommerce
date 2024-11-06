<html>
<head>
<title>Payment Process</title>
</head>
<body>
<?php
include 'connection.php';
$fullname= $_POST['fullname'];
$email= $_POST['email'];
$address= $_POST['address'];
$date= $_POST['date'];

$itemID= $_POST['itemID'];
$name= $_POST['name'];
$price= $_POST['price'];
$quantity= $_POST['quantity'];
$amount= $_POST['amount'];

$query1=mysql_query("SELECT * FROM pc_item WHERE itemID='$itemID'");
$query2=mysql_fetch_array($query1);

$new_var1 = $query2['total_sold'] + $quantity;
$new_var2 = $query2['quantity'] - $quantity;

$query3 = "UPDATE pc_item SET  total_sold='$new_var1', quantity='$new_var2' WHERE itemID='$itemID'";
$success3 = mysql_query($query3);

$query4 = ("INSERT INTO p_shipping (shippingID, email, status, date)
VALUES ('','".$email."','New','".$date."')");
$success4 = mysql_query($query4);

$query5 = ("INSERT INTO p_cash (paymentID, fullname, email, address, itemID,  amount, date)
VALUES ('','".$fullname."','".$email."','".$address."','".$itemID."','".$amount."','".$date."')");
$success5 = mysql_query($query5);

$query6 =("INSERT INTO item_order (orderID, email, itemID, name, price, quantity, amount, type, status, date)
VALUES ('','".$email."','".$itemID."','".$name."','".$price."','".$quantity."','".$amount."','Cash','Pending','".$date."')");
$success6 = mysql_query($query6);


if($success3 & $success4 & $success5 & $success6)
{
$email=$_GET['email'];
echo "<center>";
echo "<h2>Congratulations! Buying Item Success.</h2>";
echo "</br>";
echo "<img src='css/images/success.jpg' width='300' height='300'>";
echo "<p></p>";
echo "<h3>To continue, please click 'Finish button' below.</h3></a>";
echo "<p></p>";
echo "<p><a href='orderlist1.php?email=".$email."'><input type='button' onclick='myOrder()' value='Finish'/>
<script>
function myOrder() {
alert('You have success buying an item. Check the order status and visit to email for receive the payment summary from us. Thank you!');
}
</script>
</p>";
echo "</center>";	
}
else
{
	echo"Sorry, you can not allow to proceed because there is  an error. Please try again in 15 minutes.";
	die (mysql_error());
}
?>
</body>
</html>