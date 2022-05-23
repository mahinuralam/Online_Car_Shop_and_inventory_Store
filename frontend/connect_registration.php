<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car-shop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "INSERT INTO registration_table(Name, Email, Password, Address, Contact_Number) VALUES('$_POST[Name]', '$_POST[Email]', '$_POST[Password]', '$_POST[Address]', '$_POST[Contact_Number]')";

if (mysqli_query($conn, $sql)) {
    echo
        "<script>
    alert('Welcome');
    window.location.href='view_product.php';
    </script>";
} else {
    echo "<script>
    alert('This username or email is already in use try again !');
    window.location.href='registration.php';
    </script>";
}

mysqli_close($conn);