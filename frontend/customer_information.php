<!DOCTYPE html>
<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>
<html>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>


<header>
    <nav class="navbar  ">
        <!-- Navbar content -->
        <div class="list-group list-group-horizontal">


            <div class="dropdown"><a href="homepage.php"
                    class="list-group-item list-group-item-action list-group-item-info"><b>Home</b></a></div>
            <div class="dropdown"><a href="login.php"
                    class="list-group-item list-group-item-action list-group-item-info"><b>LOGIN</b></a></div>
            <div class="dropdown"><a href="registration.php"
                    class="list-group-item list-group-item-action list-group-item-info"><b>Registration</b></a></div>

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


            <div class="dropdown"><a href="cart.php"
                    class="list-group-item list-group-item-action list-group-item-info"><b>Buy Section</b></a></div>
            <div class="dropdown"><a href="customer_information.php"
                    class="list-group-item list-group-item-action list-group-item-info"><b>Customer Information</b></a>
            </div>
            <div class="dropdown"><a href="help_center.php"
                    class="list-group-item list-group-item-action list-group-item-info"><b>Help
                        Center</b></a></div>
    </nav>
</header>


<body background="bg7.jpg">
    <div class="contaier-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5">
                <br><br>
                <form action="" method="POST">
                    <div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input aria-describedby="basic-addon1" input class="form-control" placeholder="Username"
                                type="text" name="Name" value="">
                        </div>
                    </div>
                    <br>
                    <div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">#</span>
                            </div>
                            <input aria-describedby="basic-addon1" input class="form-control" placeholder="Password"
                                type="password" name="Password" value="">
                        </div>
                    </div>
                    <br>
                    <div><input class="btn btn-info" type="submit" name='submit' role="button" value="Show Information">
                    </div>

                    <?php

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "car-shop";

                    $conn = mysqli_connect($servername, $username, $password, $dbname);

                    if (isset($_POST['submit'])) {




                        $user = $_REQUEST["Name"];
                        $pass = $_REQUEST["Password"];

                        $sql = "SELECT * FROM registration_table WHERE Name = '$user' && Password = '$pass' ";
                        $result = mysqli_query($conn, $sql);


                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <br><br>
                    <div>
                        <div>
                            <div class="col-lg-2">
                                <br><br>
                                <form method="POST">
                                    <table class="  table table-bordered">

                                        <tbody>
                                            <tr>
                                                <th scope="row">Name </th>
                                                <td><?php echo $row["Name"] ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">Address </th>
                                                <td><?php echo $row["Address"] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Contact Number </th>
                                                <td><?php echo $row["Contact_Number"] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Email </th>
                                                <td><?php echo $row["Email"] ?></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>

                    <?php

                            }
                        } 
                        
                        else {
                        }
                    }

                    ?>

                </form>
            </div>
        </div>
    </div>


</body>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>






</html>