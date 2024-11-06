<html>
<head>
<title>Add Item (Process)</title>
</head>
<body>

<?php
include 'connection.php';
$name = $_POST['name'];
$category = $_POST['category'];
$description = $_POST['descri'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$status = $_POST['status'];
$date = $_POST['date'];

$target_dir="item/";
$target_dir=$target_dir. basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"],$target_dir);
$imageup=$target_dir;

$query = "INSERT INTO pc_item (itemID, name, image, category, descri, price, quantity, status, total_sold, date) 
VALUES ('','".$name."','".$imageup."','".$category."','".$description."','".$price."','".$quantity."','".$status."','0','".$date."')";

mysql_query($query) or die(mysql_error());
header("location:productlist(a).php");
?>
</body>
</html>