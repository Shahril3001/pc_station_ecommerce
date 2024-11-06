<! DOCTTYPE html>

<html>
<head>
<title>Membership Form</title>
</head>

<body>
<?php
include 'connection.php';
$serial= $_POST['serial'];
$email=$_GET['email'];

$query1=mysql_query("SELECT * FROM customer WHERE email='$email'");
$query2=mysql_fetch_array($query1);
$member = $query2['serial'];

	if($serial == $member)
	{
	$date = date("Y-m-d");
	$expire = date('Y-m-d',strtotime($date. ' + 1 days'));
	
	$query3 = "UPDATE customer SET member='Activated', expire_date='$expire' WHERE email='$email'";
	$success = mysql_query($query3);
		if($success)
		{ 
        echo "<center>";
		echo "<h2>Congratulations! You have success activate membership. Enjoy your shopping now.</h2>";
		echo "</br>";
		echo "<img src='css/images/success.jpg' width='300' height='300'>";
		echo "<p></p>";
		echo "<h3>To continue, please click 'Finish button' below.</h3></a>";
		echo "<p></p>";
		echo "<p><a href='member.php?email=".$email."'><input type='button' name='login' value='Finish'/></p>";
		echo "</center>";
		}
	}
else
{
	echo"You have fill in wrong serial key. Please try again.";
	
}


?>
</body>
</html>