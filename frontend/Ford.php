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
                <a class="list-group-item list-group-item-action list-group-item-info"
                        href="Mazda.php"><b>Mazda</b></a>
                    <a class="list-group-item list-group-item-action list-group-item-info" href="Ferrari.php"><b>Ferrari</b></a>
                    <a class="list-group-item list-group-item-action list-group-item-info" href="Audi.php"><b>Audi</b></a>
                
                <a class="list-group-item list-group-item-action list-group-item-info" href="Ford.php"><b>Ford</b></a>
                    <a class="list-group-item list-group-item-action list-group-item-info" href="BMW.php"><b>BMW</b></a>
                    <a class="list-group-item list-group-item-action list-group-item-info" href="Jeep.php"><b>Jeep</b></a>
                </div>
            </div>


            <div class="dropdown"><a href="cart.php"
                    class="list-group-item list-group-item-action list-group-item-info"><b>My Buy Now</b></a></div>
            <div class="dropdown"><a href="customer_information.php"
                    class="list-group-item list-group-item-action list-group-item-info"><b>Customer Information</b></a>
            </div>
            <div class="dropdown"><a href="help_center.php"
                    class="list-group-item list-group-item-action list-group-item-info"><b>Help
                        Center</b></a></div>
    </nav>
</header>


<br>



<body background="bg4.jpg">


    <div class="contaier-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5">
                <div class="input-group md-form form-sm form-2 pl-0">
                    <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search products"
                        aria-label="Search">
                    <div class="input-group-append">
                        <span class="input-group-text red lighten-3" id="basic-text1"><i class="fas fa-search text-grey"
                                aria-hidden="true"></i></span>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>

    <div class="banner">

        <body background="">
            <div class="container">

                <div class="row">


                     <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">


                            <form action="m1.php" method="POST">
                                <div class="card">
                                    <img class="card-img-top" src="ford f.jpg" width="200" height="220">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">2013 Ford Fiesta</h5>
                                        <p class="card-text">Price: 700,950 BDT</p>
                                        <button type="submit" name="Add_Cart" class="btn btn-primary">View Details</button>
                                        <input type="hidden" name="Item_Name" value="2013 Ford Fiesta">
                                        <input type="hidden" name="Price" value="700950">
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>


                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">


                            <form action="m1.php" method="POST">
                                <div class="card">
                                    <img class="card-img-top" src="ford 2019.jpg" width="200" height="220">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">2019 Ford F-150</h5>
                                        <p class="card-text">Price: 520,500 BDT</p>
                                        <button type="submit" name="Add_Cart" class="btn btn-primary">View Details</button>
                                        <input type="hidden" name="Item_Name" value="2019 Ford F-150">
                                        <input type="hidden" name="Price" value="520500">
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">


                            <form action="m1.php" method="POST">
                                <div class="card">
                                    <img class="card-img-top" src="f2020.jpg" width="200" height="220">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">2020 Ford Explorer ST</h5>
                                        <p class="card-text">Price: 470,988 BDT</p>
                                        <button type="submit" name="Add_Cart" class="btn btn-primary">
                                            Buy Now</button>
                                        <input type="hidden" name="Item_Name" value="2020 Ford Explorer ST">
                                        <input type="hidden" name="Price" value="470988">
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">


                            <form action="m1.php" method="POST">
                                <div class="card">
                                    <img class="card-img-top" src="ff2020.jpg" width="200" height="220">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">2020 Ford Fusion SEL</h5>
                                        <p class="card-text">Price: 260,899 BDT</p>
                                        <button type="submit" name="Add_Cart" class="btn btn-primary">
                                            Buy Now</button>
                                        <input type="hidden" name="Item_Name" value="2020 Ford Fusion SEL">
                                        <input type="hidden" name="Price" value="260899">
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>



                    

            <br>




            <br>



            <br>

    </div>
    </div>

</body>
</div>
</div>
</div>
</div>
</div>
</form>
</body>



<br><br><br><br><br><br><br><br>
<br><br><br><br>
<footer class="footer">
    <div class="container">
        <center>
            <b>
                <p>Copyright &copy Quickly Store. All Rights Reserved.</p>
                <p>This website is developed by &copyMahinur Alam &copyFairuz Tanzim Achal &copyKanita Jerin Tanha</p>
                <p>Project Car sale and inventory management</p>
            </b>
        </center>
    </div>
</footer>

</html>