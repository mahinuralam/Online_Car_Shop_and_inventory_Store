<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online shopping management system";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_REQUEST["submit"])) {
	$user = $_REQUEST["Name"];
	$pass = $_REQUEST["Password"];
	$query = mysql_query("SELECT * FROM registration_table WHERE Name=$user && $pass");
	$rowcount = mysql_num_rows($query);
	if ($rowcount == true) {
		echo "your username and password is right";
	} else {
		echo "your username and password is wrong";
	}
} else {
	echo "Hoinai";
}