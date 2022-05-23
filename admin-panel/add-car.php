<?php
session_start();
$email_address= $_SESSION['email'];
include('config/database.php');
if(empty($email_address))
{
  header("location:index.php");
}

// 
     
        $cat= !empty($_GET['cat'])?$_GET['cat']:'';
        $subcat = !empty($_GET['subcat'])?$_GET['subcat']:'';
        if($cat=='website-setting' && $subcat=='add-website-menu'){
          
          include('scripts/multilevel-script.php');
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Car</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--custom style-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">


</head>
<body>
<?php
include('partials/header.php');
 ?>
 <div id="confirmBox">
  <p>Are You Sure to Delete ?</p>
  <button value="1" >Yes</button><button value="0">No</button>
 </div>
<div id="alertBox">mhvmbvbm</div>
<div class="container-fluid">
  <div class="row">
      <div class="col-sm-2">
 <?php include('partials/sidebar.php'); ?>
      </div>
      <div class="col-sm-10">
        <div id="dynamic-page">
          <!--dynamic page content-->
          <?php
    
  
        
        if(!empty($cat) && !empty($subcat)){
          
            
            $sub=explode('-', $subcat);
if($sub[0]=='add')
{
           $val=[];
          foreach ($sub as $key => $value) {
            if($value==$sub[0])
            {
             continue;
            }
            $val[]=$value;
            
         }
        
      include($cat."/".implode('-',$val).".php");   
 }else{
  
 }
 
        }else{
            
        }

         ?> 
          <!-- dynamic page content-->

             


        <!-- START: Main Content-->
        <main>
            <div class="container-fluid">
                

                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12  mt-3">                          
                        <div class="card">  
                            <div class="card-header d-flex justify-content-between align-items-center">                               
                                <h4 class="card-title">Add CAR</h4>                                   
                            </div>
                            <div class="card-body">
                               <div class="col-12 col-lg-8 mt-3">
                        <div class="card">
                           
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">                                           
                                        <div class="col-12">
                                            <form method="post" action='add-car.php' enctype="multipart/form-data">
                                                
                                                
                                                
                                                <?php

                                                $con = mysqli_connect('localhost','root','', 'car-shop');

                                                //mysqli_select_db($con,'admin-panel');

                                                 if(isset($_POST['submit'])){

                                                 $name = $_POST['name'];
                                                //  echo $name;
                                                 $price = $_POST['price'];
                                                 $image = $_FILES['image'];
                                                 $model = $_POST['model'];
                                                 $topspeed = $_POST['topspeed'];
                                                 $details = $_POST['details'];
                                                 $quantity = $_POST['quantity'];

                                                 
                                                 $filename = $image['name'];
                                                 $fileerror = $image['error'];
                                                 $filetmp = $image['tmp_name'];

                                                 $fileext = explode('.', $filename);
                                                 $filecheck = strtolower(end($fileext));

                                                 $fileextstored = array('png', 'jpg', 'jpeg');


                                                 if (in_array($filecheck, $fileextstored)) {
                                                
                                                $destinationfile = 'images/'.$filename;
                                                move_uploaded_file($filetmp, $destinationfile);

                                                 $q = " INSERT INTO `car`(`name`, `model`, `topspeed`, `price` , `image`, `details`, `quantity`) VALUES ( '$name', '$model','$topspeed','$price', '$destinationfile', '$details', '$quantity')";


                                                $quary = mysqli_query($con,$q);
                                                if ($quary){
                                                    echo "submitted";
                                                }
                                                else {
                                                   echo mysqli_error($con);
                                                }
                                                       }
                                                        }
 

                                                       ?>


                                                <div class="row">
                                                    <label for="name" class="col-sm-2 col-form-label">Brand Name</label>
                                                    <div class="col-sm-10">  
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-transparent border-right-0" id="basic-addon11"><i class="icon-user"></i></span>
                                                            </div>
                                                            <input type="text" name="name" class="form-control" placeholder="Brand Name" aria-label="Username" aria-describedby="basic-addon1">
                                                        </div>

                                                    </div>
                                                </div>
                                              

                                              <div class="row">
                                                    <label for="model" class="col-sm-2 col-form-label"> Model</label>
                                                    <div class="col-sm-10">  
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-transparent border-right-0" id="basic-addon11"><i class="icon-book-open"></i></span>
                                                            </div>
                                                            <input type="text" name="model" class="form-control" placeholder="Model" aria-label="Username" aria-describedby="basic-addon1">
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <label for="price" class="col-sm-2 col-form-label"> Price</label>
                                                    <div class="col-sm-10">  
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-transparent border-right-0" id="basic-addon11"><i class="icon-book-open"></i></span>
                                                            </div>
                                                            <input type="text" name="price" class="form-control" placeholder="car price" aria-label="Username" aria-describedby="basic-addon1">
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <label for="topspeed" class="col-sm-2 col-form-label"> Top Speed</label>
                                                    <div class="col-sm-10">  
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-transparent border-right-0" id="basic-addon11"><i class="icon-book-open"></i></span>
                                                            </div>
                                                            <input type="text" name="topspeed" class="form-control" placeholder="Top Speed" aria-label="Username" aria-describedby="basic-addon1">
                                                        </div>

                                                    </div>
                                                </div>

                                                 <div class="row">
                                                    <label for="details" class="col-sm-2 col-form-label">Details</label>
                                                    <div class="col-sm-10">  
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-transparent border-right-0" id="basic-addon11"><i class="icon-chart"></i></span>
                                                            </div>
                                                            <textarea style="width: 500px;" name="details"></textarea>
                                                        </div>

                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <label for="quantity" class="col-sm-2 col-form-label"> Quantity</label>
                                                    <div class="col-sm-10">  
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-transparent border-right-0" id="basic-addon11"><i class="icon-book-open"></i></span>
                                                            </div>
                                                            <input type="text" name="quantity" class="form-control" placeholder="Quantity" aria-label="Username" aria-describedby="basic-addon1">
                                                        </div>

                                                    </div>
                                                </div>

                                                 <div class="row">
                                                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                                                    <div class="col-sm-10">  
                                                        <div class="input-group mb-3">
                                                           
                                                            <input type="file" name="image" class="" placeholder="image" aria-label="Username" aria-describedby="basic-addon1">
                                                        </div>

                                                    </div>
                                                </div>

                                                 

                                                 

                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <button type="submit" name="submit" class="btn btn-primary">Add Now</button>  
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            </div>                                
                        </div>
                    </div>



                </div>
                <!-- END: Card DATA-->
            </div>
        </main>
        <!-- END: Content-->



        </div>
        
      </div>
  </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script type="text/javascript" src="scripts/ajax-script.js">
  
</script>
<script type="text/javascript">
  var acontent = document.querySelectorAll('.accordion-content');
var atitle = document.querySelectorAll('.accordion-content .title');
for (i = 0; i < atitle.length; i++) {
        
    atitle[i].onclick=function(){
        
        var contentClass = this.parentNode.className;
        
        for (i = 0; i < acontent.length; i++) {
            acontent[i].className = 'accordion-content hide';
         }
        
        if (contentClass == 'accordion-content hide') {
            this.parentNode.className = 'accordion-content show';
        }
   }
}
</script>

<script>
// Add the following code if you want the name of the file appear on select
$(document).on("change", ".custom-file-input", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

</body>
</html>