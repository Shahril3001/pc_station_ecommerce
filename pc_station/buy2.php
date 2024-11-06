<html>
<head>
<title>Ordering Process</title>
</head>
<body>
<?php
include 'connection.php';

$email= $_POST['email'];
$member= $_POST['member'];
$itemID= $_POST['itemID'];
$payment= $_POST['payment'];
$date= $_POST['date'];
$price= $_POST['price'];
$quantity1= $_POST['quantity1'];

	if($member == "Activated")
	{
	$amount= $price * $quantity1;
	$amount1= ($amount * 90)/100;
		
		header("location:viewsummary.php?email=".$email."&itemID=".$itemID."&quantity1=".$quantity1."&payment=".$payment."&amount=".$amount1."&date=".$date."");
	}
	else
	{
	$amount= $price * $quantity1;	
	header("location:viewsummary.php?email=".$email."&itemID=".$itemID."&quantity1=".$quantity1."&payment=".$payment."&amount=".$amount."&date=".$date."");	
	}

?>
</body>
</html>