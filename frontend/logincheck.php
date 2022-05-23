<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car-shop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}


$user = $_REQUEST["Name"];
$pass = $_REQUEST["Password"];

$sql = "SELECT * FROM registration_table WHERE Name = '$user' && Password = '$pass' ";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
	echo
		"<script>
    window.location.href='homepage.php';
    </script>";
} else {
	echo
		"<script>
    alert('Please Register Your Self');
    window.location.href='registration.php';
    </script>";
}