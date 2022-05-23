<?php session_start(); ?>
<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html lang="en">
<style>
    footer {
        text-align: center;
        background-color: #333;
        color: #fff;
        padding: 0px;
        position: absolute;
        bottom: -10px;
        width: 100%;
        /* position: fixed;
z-index: 1; */
    }
</style>


<style>
    .dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }



    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 10px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 20px;
        font-size: 16px;
        border: none;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }
</style>

<head>
    <title> Welcome to the shop </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<header>
    <nav class="navbar  ">
        <!-- Navbar content -->
        <div class="list-group list-group-horizontal">

            <div class="dropdown"><a href="homepage.php" class="list-group-item list-group-item-action list-group-item-info"><b>Home</b></a></div>
            <div class="dropdown"><a href="login.php" class="list-group-item list-group-item-action list-group-item-info"><b>LOGIN</b></a></div>
            <div class="dropdown"><a href="registration.php" class="list-group-item list-group-item-action list-group-item-info"><b>Registration</b></a></div>

            <div class="dropdown">
                <a href="view_product.php" class="list-group-item list-group-item-action list-group-item-info"><b>View
                        Cars</b></a>
                <div class="dropdown-content">
                <a class="list-group-item list-group-item-action list-group-item-info" href="Mazda.php"><b>Mazda</b></a>
                    <a class="list-group-item list-group-item-action list-group-item-info" href="Ferrari.php"><b>Ferrari</b></a>
                    <a class="list-group-item list-group-item-action list-group-item-info" href="Audi.php"><b>Audi</b></a>
                    <a class="list-group-item list-group-item-action list-group-item-info" href="Ford.php"><b>Ford</b></a>
                    <a class="list-group-item list-group-item-action list-group-item-info" href="BMW.php"><b>BMW</b></a>
                    <a class="list-group-item list-group-item-action list-group-item-info" href="Jeep.php"><b>Jeep</b></a>
                </div>
            </div>

            <div class="dropdown"><a href="cart.php" class="list-group-item list-group-item-action list-group-item-info"><b>Buy Section</b></a></div>
            <div class="dropdown"><a href="customer_information.php" class="list-group-item list-group-item-action list-group-item-info"><b>Customer Information</b></a>
            </div>
            <div class="dropdown"><a href="help_center.php" class="list-group-item list-group-item-action list-group-item-info"><b>Help
                        Center</b></a></div>
    </nav>
</header>

<body background="bg8.jpg">
    <div class="Container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>Buy Car Section</h1>
            </div>
            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Model</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php

                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {

                                $sr = $key + 1;
                                $total = $total + $value['Price'];

                                echo "
                                            <tr>
                                            <td>$sr</td>
                                            <td>$value[Item_Name]</td>
                                            <td>$value[Price]</td>
                                            
                                            <td>
                                                <form action='manage_cart.php' method='POST'>
                                                    <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                </form>
                                            </td>
                                            </tr>
                                ";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4 my-5">

                    <h3 class="text-center">Total:</h4>
                        <br>
                        <h5 class="text-center"><?php echo "$total" ?> BDT</h5>
                        <br>
                        <form action="buyOnCash.php" method="POST">
                            <div class="center">
                            <center>
                                <button class="btn btn-info" class="btn btn-primany btn-block">Buy on Cash</button>
                            </center>
                            </div>
                        </form>

                        </br>

                        <form action="emi.php" method="GET">
                            <div class="center">
                            <center>
                                <button class="btn btn-info" hrfclass="btn btn-primany btn-block">Buy on EMI</button>
                            </center>
                            </div>
                        </form>
                </div>
            </div>


        </div>
    </div>
    </div>


</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


</html>