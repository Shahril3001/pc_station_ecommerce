<html>
<head>
<title>Log Out</title>
</head>
<body>

<?php
include 'connection.php';
$email=$_GET['email'];
$sql="UPDATE customer SET last_login=now() WHERE email='".$email."'";
mysql_query($sql);
session_start();
session_unset();
session_destroy();
header("location:index.php");
exit();
?>
</body>
</html>