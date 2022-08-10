<?php

$servername = servername;
$username = user;
$password = psw;

$conn = new mysqli($servername, $username, $password);
$frmEmail = $_POST['frmEmail'];

if($conn->connect_error){
	die('Connection failed: ' .$conn->connect_error);
} else{
	$stmt = $conn->prepare("INSERT INTO newsletter (fldEmail) values (?)");
	$stmt->bind_param("s", $frmEmail);
	$stmt->execute();
	echo "Registration ok";
	$stmt->close();
	$conn->close();
}

include("php/meta.php");

// try {
// 	$conn = new PDO("mysql:host=$servername;dbname=", $username, $password);
// 	// set the PDO error mode to exception
// 	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 	echo "Connected successfully";
//   } catch(PDOException $e) {
// 	echo "Connection failed: " . $e->getMessage();
//   }
//   $conn = null;

// get the post records

// // database insert SQL code
// $sql = "INSERT INTO `newsletter` (`Id`, `fldEmail`) VALUES ('0', '$frmEmail')";

// // insert in database 
// $rs = mysqli_query($con, $sql);

// if($rs)
// {
// 	echo "Contact Added";
// }
?>