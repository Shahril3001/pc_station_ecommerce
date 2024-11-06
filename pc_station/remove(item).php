<!DOCTYPE html>
<html>
<head>
<title>Delete Destination</title>
</head>
<body>
<?php
include 'connection.php';
if (isset($_GET['itemID']))
{
	$itemID =$_GET['itemID'];
	$query1=mysql_query("SELECT from pc_item where itemID='$itemID'");
	$query2=mysql_query("DELETE from pc_item where itemID='$itemID'");
		?>
		<script>alert('Delete successful.');</script>
	<?php
	header('Location:index1.php');
}
?>
</body>
</html>