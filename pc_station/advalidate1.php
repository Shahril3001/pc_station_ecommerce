<! DOCTTYPE html>

<html>
<head>
<title>Validate Form</title>
</head>

<body>
<?php
include 'connection.php';

$myusername=$_POST['username'];
$mypassword=$_POST['password'];

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);

$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM admin WHERE username='".$myusername."' and password ='".$mypassword."'";
$result= mysql_query($sql);
$count= mysql_num_rows($result);

	if($count==1)
	{
		session_start();
		$_SESSION["username"] = $myusername;
		$_SESSION["password"] = $password;
	
		header("location:index1.php");
	}


	else
	{
		echo "<center>";
		echo "Wrong Username or Password";
		echo "</center>";
		header("location:adlogin1.php");
		
	}
	
?>
</body>
</html>