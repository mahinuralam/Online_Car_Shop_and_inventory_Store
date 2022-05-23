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
  <title>Loan Application</title>
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
            echo "<h1 class='text-success text-center'>loan applications</h1>";
        }

         ?> 
          <!-- dynamic page content-->

            <!-- START: Card DATA-->    


                    <div class="row">

                    <?php
                            $mysqli =new mysqli('localhost', 'root', '', 'car-shop') or die(mysqli_error($mysqli));
                            $result = $mysqli->query(SELECT * FROM `emitable`) or die($mysqli->error);

                            //pre_r($result);
                            //pre_r($result->fetch_assoc());
                        ?>

                        <div class="row justify-content-center">
                            <table class="table">
                                <tr>
                                <thead>
                                    <th>Name</th>
                                    <th>Email</th>      
                                    <th>Address</th>
                                    <th>Salary</th>
                                    <th colspan="2">Action</th>
                                </thead>
                                </tr>
                                
                            

                            <?php
                                while ($row = $result->fetch_assoc()):?>
                                echo mysqli_error();


                                <tr>
                                    <td><?php echo $row['Name'];  ?></td>
                                    <td><?php echo $row['Email'];  ?></td>
                                    <td><?php echo $row['Address'];  ?></td>
                                    <td><?php echo $row['Salary'];  ?></td>
                                    <td>
                                        <a href="process.php?accept=<?php echo $row['id']; ?>" class="btn btn-info" name='accept'> Accept
                                        </a>
                                        <a href="process.php?reject=<?php echo $row['id']; ?>" class="btn btn-danger" name='accept'> Reject
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                    endwhile;
                                ?>
                            </table>
                            
                        </div>

            </div>

            <!-- END: Card DATA-->





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