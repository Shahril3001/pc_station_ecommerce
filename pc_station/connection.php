<!DOCTYPE html>
<head>

<?php
$host="localhost";//host name
$dbuser="user";//Mysql username
$dbpass="1234";// Mysql password

$db_name="pc_shopping";//database name
$tbl_name="admin";// Table name
//connect to server and select database

mysql_connect("$host","$dbuser","$dbpass")
or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

?>
</body>
</html>