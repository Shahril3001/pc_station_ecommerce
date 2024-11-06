<html>
<head>
<title>Publish Movie</title>
</head>
<body>
<?php
include 'connection.php';

	if(isset($_GET['email'])){
	$email=$_GET['email'];
	$date=$_GET['date'];
	
	$query1=mysql_query("SELECT * FROM p_shipping WHERE email='$email' AND date='$date'");
	$query2=mysql_fetch_array($query1);
	
$email = $query2['email'];
$date = $query2['date'];


$query3 = "UPDATE p_shipping SET status='Checked' WHERE email='$email' AND date='$date'";




$success = mysql_query($query3);
		if($success)
		{	 
mysql_query($query3) or die(mysql_error());
header("location:vieworder1.php?email=".$email."&date=".$date."");
		}
}
?>
</body>
</html>