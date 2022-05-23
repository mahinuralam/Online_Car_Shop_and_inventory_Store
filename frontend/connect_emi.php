<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car-shop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "INSERT INTO emitable(Name, Email, Address, Contact_Number, Salary) VALUES('$_POST[Name]', '$_POST[Email]', '$_POST[Address]', '$_POST[Contact_Number]', '$_POST[Salary]')";

if (mysqli_query($conn, $sql)) {
    echo
        "<script>
    alert('Thank You ! Your EMI request has been sent to Admin');
    window.location.href='homepage.php';

    </script>";
} else {
    echo "<script>
    alert('Envalid EMI reqeust');
    window.location.href='homepage.php';

    </script>";
}

mysqli_close($conn);