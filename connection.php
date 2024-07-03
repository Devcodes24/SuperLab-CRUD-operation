<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test";

$conn = mysqli_connect($host, $user, $pass, $dbname);

// Checking connection

if ($conn){
echo " " ;}
else{
	echo "DB not connected";
}


?>
