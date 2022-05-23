<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
<body>


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


<br>



<center>
<h2 style="text-align:center">All Angle View</h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="a1.jpg" style="width:80%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="a2.jpg" style="width:80%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="a1.jpg" style="width:80%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="a2.jpg" style="width:80%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="a2.jpg" style="width:80%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="a1.jpg" style="width:80%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>
</center>
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="a1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Top">
    </div>
    <div class="column">
      <img class="demo cursor" src="a2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Left">
    </div>
    <div class="column">
      <img class="demo cursor" src="a1.jpg" style="width:100%" onclick="currentSlide(3)" alt="Right">
    </div>
    <div class="column">
      <img class="demo cursor" src="a2.jpg" style="width:100%" onclick="currentSlide(4)" alt="Inner">
    </div>
    <div class="column">
      <img class="demo cursor" src="a2.jpg" style="width:100%" onclick="currentSlide(5)" alt="Wheel">
    </div>    
    <div class="column">
      <img class="demo cursor" src="a1.jpg" style="width:100%" onclick="currentSlide(6)" alt="Break">
    </div>
  </div>
</div>




<style>
details > summary {
  padding: 4px;
  width: 200px;
  background-color: #eeeeee;
  border: none;
  box-shadow: 1px 1px 2px #bbbbbb;
  cursor: pointer;
}

details > p {
  background-color: #eeeeee;
  padding: 4px;
  margin: 0;
  box-shadow: 1px 1px 2px #bbbbbb;
}

table, th, td {
  border: 1px solid black;
}

</style>
<head>
    <title> Welcome to the shop </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>


<center>
<div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <form action="m1.php" method="POST">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">2020 Jeep Grand Cherokee Limited</h5>
                                        <p class="card-text">Price: 400,991 BDT</p>
                                        <button type="submit" name="Add_Cart" class="btn btn-primary">View Details</button>
                                        <input type="hidden" name="Item_Name" value="2020 Jeep Grand Cherokee Limited">
                                        <input type="hidden" name="Price" value="400991">
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
</center>

<br><br><br>
<center><h1>Vehicle Overview</h1>

<table>
  <tr>
    <th>Company</th>
    <th>Top Speed</th>
    <th>Engine type </th>
    <th> Aro add kor </th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
</table>

</center>




<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    














<br><br><br><br><br><br><br><br>
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

</body>
</html>
