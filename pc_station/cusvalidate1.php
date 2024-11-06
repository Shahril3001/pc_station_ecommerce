
<! DOCTTYPE html>

<html>
<head>
<title>Validate Form</title>
</head>

<body>
<?php
include 'connection.php';

$myemail=$_POST['email'];
$mypassword=$_POST['password'];

$myemail = stripslashes($myemail);
$mypassword = stripslashes($mypassword);

$myemail = mysql_real_escape_string($myemail);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM customer WHERE email ='".$myemail."' and password ='".$mypassword."'";
$result= mysql_query($sql);
$count= mysql_num_rows($result);

	if($count==1)
	{
		session_start();
		$_SESSION["email"] = $myemail;
		$_SESSION["password"] = $password;
		header("location:index2.php?email=".$myemail."");
	}


	else
	{
		echo "<center>";
		echo "Wrong username or Password";
		echo "</center>";
		header("location:cuslogin1.php");
		
	}
	
?>
</body>
</html>