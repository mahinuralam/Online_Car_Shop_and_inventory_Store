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
                        Products</b></a>
                <div class="dropdown-content">
                    <a class="list-group-item list-group-item-action list-group-item-info"
                        href="Electronics.php"><b>Electronics</b></a>
                    <a class="list-group-item list-group-item-action list-group-item-info" href="HomeAppliances.php"><b>Home
                            Appliances</b></a>
                    <a class="list-group-item list-group-item-action list-group-item-info" href="Dress.php"><b>Dress</b></a>
                    <a class="list-group-item list-group-item-action list-group-item-info" href="Bags & Shoes.php"><b>Bags & Shoes</b></a>
                    <a class="list-group-item list-group-item-action list-group-item-info" href="Kids & Sports.php"><b>Kids & Sports</b></a>
                    <a class="list-group-item list-group-item-action list-group-item-info" href="Skincare & Beauty"><b>Skincare & Beauty</b></a>
                </div>
            </div>


            <div class="dropdown"><a href="cart.php"
                    class="list-group-item list-group-item-action list-group-item-info"><b>My Cart</b></a></div>
            <div class="dropdown"><a href="customer_information.php"
                    class="list-group-item list-group-item-action list-group-item-info"><b>Customer Information</b></a>
            </div>
            <div class="dropdown"><a href="help_center.php"
                    class="list-group-item list-group-item-action list-group-item-info"><b>Help
                        Center</b></a></div>
    </nav>
</header>


<br>



<body background="8.jpg">


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
                                    <img class="card-img-top" src="L.jpg" width="200" height="220">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Reading Light Lamp</h5>
                                        <p class="card-text">Price: 1139 BDT</p>
                                        <br>
                                        <button type="submit" name="Add_Cart" class="btn btn-primary">Add
                                            Cart</button>
                                        <input type="hidden" name="Item_Name" value="Reading Light Lamp">
                                        <input type="hidden" name="Price" value="1139">
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>


                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">


                            <form action="m1.php" method="POST">
                                <div class="card">
                                    <img class="card-img-top" src="clock.jpg" width="200" height="220">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Wall Clock</h5>
                                        <br>
                                        <p class="card-text">Price: 1500 BDT</p>
                                        <button type="submit" name="Add_Cart" class="btn btn-primary">Add
                                            Cart</button>
                                        <input type="hidden" name="Item_Name" value="Mi 10000mAh Power Bank">
                                        <input type="hidden" name="Price" value="1500">
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">


                            <form action="m1.php" method="POST">
                                <div class="card">
                                    <img class="card-img-top" src="c.jpg" width="200" height="244">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">LED string lights</h5>
                                        <p class="card-text">Price: 300 BDT</p>
                                        <button type="submit" name="Add_Cart" class="btn btn-primary">Add
                                            Cart</button>
                                        <input type="hidden" name="Item_Name" value="LED string lights">
                                        <input type="hidden" name="Price" value="300">
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">


                            <form action="m1.php" method="POST">
                                <div class="card">
                                    <img class="card-img-top" src="flo.jpg" width="200" height="244">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Flower Vase</h5>
                                        <p class="card-text">Price: 400 BDT</p>
                                        <button type="submit" name="Add_Cart" class="btn btn-primary">Add
                                            Cart</button>
                                        <input type="hidden" name="Item_Name" value="Flower Vase">
                                        <input type="hidden" name="Price" value="400">
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
                    <p>This website is developed by &copy Coding Squad</p>
                    <p>Car sales & inventory Store</p>
            </b>
        </center>
    </div>
</footer>

</html>