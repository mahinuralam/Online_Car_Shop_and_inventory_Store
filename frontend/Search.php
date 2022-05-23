<!DOCTYPE html>
<html>

<head>
    <title> Welcome to the shop </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>


<header>
    <div class="list-group list-group-horizontal-md">
        <a href="homepage.php" class="list-group-item list-group-item-action list-group-item-info"><b>Home</b></a>
        <a href="login.php" class="list-group-item list-group-item-action list-group-item-info"><b>LOGIN</b></a>
        <a href="registration.php"
            class="list-group-item list-group-item-action list-group-item-info"><b>Registration</b></a>
        <a href="view_product.php" class="list-group-item list-group-item-action list-group-item-info"><b>View
                Products</b></a>
        <a href="cart.php" class="list-group-item list-group-item-action list-group-item-info"><b>My Cart</b></a>
        <a href="customer_information.php"
            class="list-group-item list-group-item-action list-group-item-info"><b>Customer Information</b></a>
        <a href="help_center.php" class="list-group-item list-group-item-action list-group-item-info"><b>Help
                Center</b></a>
    </div>

    <body background="2.jpg">
        <div class="contaier-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5">
                    <br><br>
                    <form action="Search.php" method="POST">
                        <div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                </div>
                                <input input class="form-control" placeholder="Username" type="text" name="Name"
                                    value="">
                            </div>
                        </div>
                        <br>
                        <div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">#</span>
                                </div>
                                <input input class="form-control" placeholder="Password" type="text" name="Password"
                                    value="">
                            </div>
                        </div>
                        <br>
                        <div><input class="btn btn-info" type="submit" name='submit' role="button"
                                value="Show Information"></div>
                    </form>
                </div>
            </div>
        </div>


        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "online shopping management system";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }


        $user = $_REQUEST["Name"];
        $pass = $_REQUEST["Password"];

        $sql = "SELECT * FROM registration_table WHERE Name = '$user' && Password = '$pass' ";
        $result = mysqli_query($conn, $sql);


        if (mysqli_num_rows($result) > 0) {
            // output data of each row

            while ($row = mysqli_fetch_assoc($result)) {



        ?>


        <div class="contaier-fluid">
            <div class="row align-items-center justify-content-center">
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
        } else {
        }

        ?>


    </body>
</header>
<br><br><br><br><br><br><br><br><br>
<footer class="footer">
    <div class="container">
        <center>
            <b>
            <p>Copyright &copy Quickly Store. All Rights Reserved.</p>
                    <p>This website is developed by &copy Coding Squad</p>
                    <p>Car sales & inventory Store</p>
            </b>
        </center>
    </div>
</footer>

</html>