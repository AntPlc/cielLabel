<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = new mysqli('localhost', 'root', '','site_ciel');

if($con->connect_error){
	die('Connection failed: ' .$con->connect_error);
} else{
	$stmt = $con->prepare("INSERT INTO newsletter (fldEmail) values (?)");
	$stmt->bind_param("s", $fldEmail);
	$stmt->execute();
	echo "Registration ok";
	$stmt->close();
	$con->close();
}

// get the post records
// $frmEmail = $_POST['frmEmail'];

// // database insert SQL code
// $sql = "INSERT INTO `newsletter` (`Id`, `fldEmail`) VALUES ('0', '$frmEmail')";

// // insert in database 
// $rs = mysqli_query($con, $sql);

// if($rs)
// {
// 	echo "Contact Added";
// }
?>