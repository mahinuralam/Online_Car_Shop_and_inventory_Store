<!DOCTYPE html>
<html>
<style>
footer {
    text-align: center;
    background-color: #333;
    color: #fff;
    padding: 0px;
    position: absolute;
    bottom: -800;
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



<body>
    <div class="banner">
        <body background="bg7.jpg">
            <div class="contaier-fluid">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-5">
                            <div class="Login form">
                                <h2><br><br><br><br><br>
                                    <b>LOGIN</b>
                                </h2>
                            </div>
                            <br>
                            <form action="logincheck.php" method="POST">
                                <div class="User Name"><b>User Name:</b>
                                    <input class="form-control" placeholder="Enter Name" type="text" name="Name"
                                        value="">
                                </div>
                                <br>
                                <div class="Password"><b>Password:</b>
                                    <input class="form-control" placeholder="Password" type="password" name="Password"
                                        value="">
                                </div>
                                <br>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <lasbel sclass="form-check-label" for="exampleCheck1">Remember me</label>
                                </div>
                                <br>
                                <div><input class="btn btn-info" type="submit" name='submit' role="button"
                                        value="Login"></div>
                                <br>
                                <div><a class="btn btn-info" href="registration.php" role="button">Register</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
</body>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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