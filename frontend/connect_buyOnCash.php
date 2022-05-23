<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car-shop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "INSERT INTO buyoncash(Name, Email, Address, Contact_Number) VALUES('$_POST[Name]', '$_POST[Email]', '$_POST[Address]', '$_POST[Contact_Number]')";

if (mysqli_query($conn, $sql)) {
    echo
        "<script>
    alert('Prebooking Completed');
    window.location.href='view_product.php';
    </script>";
} else {
    echo "<script>
    alert('ERROR');
    window.location.href='view_product.php';
    </script>";
}

mysqli_close($conn);