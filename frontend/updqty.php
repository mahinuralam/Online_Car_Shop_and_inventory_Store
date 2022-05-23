<?php 

session_start(); 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car-shop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

foreach ($_SESSION['cart'] as $key => $value) {
    
    printf($value['Item_Name']);

    $nm = $value['Item_Name'];

$sql = "UPDATE product_table SET Quantity = Quantity - 1 WHERE Name = '$nm'";

if (mysqli_query($conn, $sql)) {
    echo
            "<script>
            alert('Thank you');
            window.location = 'homepage.php';
        </script>";
} else {
    echo "<script>
        alert('Hoinai !');
        </script>";
}

}

mysqli_close($conn);

    




?>