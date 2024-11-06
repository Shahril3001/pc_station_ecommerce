<html>
<head>
<title>Contact Us</title>
</head>
<body>
<?php
include 'connection.php';


$fullname= $_POST['fullname'];
$email= $_POST['email'];
$feedback= $_POST['feedback'];
$date= $_POST['date'];

$query = "INSERT INTO contact (contactID, fullname, email, feedback, date)
VALUES ('','".$fullname."','".$email."','".$feedback."','".$date."')";

mysql_query($query) or die(mysql_error());
header("location:contact.php");
?>
</body>
</html>