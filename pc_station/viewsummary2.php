<html>
<head>
<title>Ordering Process</title>
</head>
<body>
<?php
include 'connection.php';
$email=$_GET['email'];
$itemID=$_GET['itemID'];
$quantity1=$_GET['quantity1'];
$payment=$_GET['payment'];
$amount=$_GET['amount'];

if($payment == "Credit Card")
{
header("location:credit.php?email=".$email."&itemID=".$itemID."&quantity1=".$quantity1."&amount=".$amount."");
}
elseif($payment == "Debit Card")
{
header("location:debit.php?email=".$email."&itemID=".$itemID."&quantity1=".$quantity1."&amount=".$amount."");
}
elseif($payment == "Cash")
{
header("location:cash.php?email=".$email."&itemID=".$itemID."&quantity1=".$quantity1."&amount=".$amount."");
}
else
{
	echo "<center>Sorry. You are cannot allow to proceed because the form is not yet completed.</br>Please try again and make sure you complete the form before submit. Thank you.</br></br>";
	echo"<input type='button' value='Return' onclick='goBack()'></p>
<script>function goBack(){window.history.back();}</script></br>
</center>";
}

?>
</body>
</html>