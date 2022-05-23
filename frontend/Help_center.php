<!DOCTYPE html>
<html>

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

<body background="bg8.jpg">


    <center>
        <br><br>
        <b>

            <h2>
                <p class="col-2 text-truncate"> Office Address </p>
            </h2>
            <p style="font-size:20px" class="col-8 text-truncate"> Uttara Sec- 04, Road- 01, House- 12, Dhaka,
                Bangladesh</p>
            <br><br>


            <h2>
                <p class="col-2 text-truncate"> Our Area Coverage</p>
            </h2>
            <p style="font-size:20px" class="col-8 text-truncate"> All over Bangladesh</p>
            <br><br>

            <h2>
                <p class="col-2 text-truncate"> Agreement</p>
            </h2>

            <p style="font-size:20px" class="col-8 text-truncate"> - Once you have recieved the product by your self
                we'll not take
                back.
            </p>
            <p style="font-size:20px" class="col-8 text-truncate"> - Paymant can be done in online also after
                recieving.</p>
            <p style="font-size:20px" class="col-8 text-truncate"> - We deliver the product just like we show.</p>
            <p style="font-size:20px" class="col-8 text-truncate"> - Your personal informations are safe with us.
            </p>
            <br><br>

            <h2>
                <p class="col-2 text-truncate"> Contact Us</p>
            </h2>

            <p style="font-size:20px" class="col-8 text-truncate"> - Email: quickly213@gmail.com</p>
            <p style="font-size:20px" class="col-8 text-truncate"> - Phone Number: 01913757371, 01717555371</p>
        </b>

    </center>

</body>



<br><br><br><br>

</html>