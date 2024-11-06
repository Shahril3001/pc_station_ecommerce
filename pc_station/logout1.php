<html>
<head>
<title>Log Out</title>
</head>
<body>

<?php
include 'connection.php';
$sql="UPDATE admin SET last_login=now()";
mysql_query($sql);
session_start();
session_unset();
session_destroy();
header("location:index.php");
exit();
?>
</body>
</html>