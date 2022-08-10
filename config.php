<?php

$servername = servername;
$username = user;
$password = psw;
$dbname = dbname;

$conn = new mysqli($servername, $username, $password, $dbname);
$fldEmail = $_POST['frmEmail'];

if($conn->connect_error){
	die('Connection failed: ' .$conn->connect_error);
} else{
	$stmt = $conn->prepare("INSERT INTO newsletter(fldEmail) values (?)");
	$stmt->bind_param("s", $fldEmail);
	$stmt->execute();
	echo "Registration ok";
	$stmt->close();
	$conn->close();
}

include("php/meta.php");
?>