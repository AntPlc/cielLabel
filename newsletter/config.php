<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','site_ciel');

// get the post records
$frmEmail = $_POST['frmEmail'];

// database insert SQL code
$sql = "INSERT INTO `newsletter` (`Id`, `fldEmail`) VALUES ('0', '$frmEmail')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Added";
}
?>