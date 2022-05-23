<style>
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>



<?php
  $hostname     = "localhost"; // Enter Your Host Name
  $username     = "root";      // Enter Your Table username
  $password     = "";          // Enter Your Table Password
  $databasename = "car-shop"; // Enter Your database Name
  
  
  $conn = new mysqli($hostname, $username, $password, $databasename);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  $query="SELECT * FROM color_setting ORDER BY id DESC LIMIT 0, 1";
  $result= $conn->query($query);
  echo $conn->error;

  $data=$result->fetch_assoc();
  $id=!empty($data['id'])?$data['id']:'';
  $navbarBackground=!empty($data['navbar_background'])?$data['navbar_background']:'';
  $sidebarBackground=!empty($data['sidebar_background'])?$data['sidebar_background']:'';
  $textColor=!empty($data['text_color'])?$data['text_color']:'';
  $saveButtonColor=!empty($data['save_button_color'])?$data['save_button_color']:'';
  $editButtonColor=!empty($data['edit_button_color'])?$data['edit_button_color']:'';
  $deleteButtonColor=!empty($data['delete_button_color'])?$data['delete_button_color']:'';
  
  $viewButtonColor=!empty($data['view_button_color'])?$data['view_button_color']:'';
  $labelTextColor=!empty($data['label_text_color'])?$data['label_text_color']:'';
  
?>

<style type="text/css">
  .sidebar{
    background-color:<?php echo $sidebarBackground; ?>!important;
  }
  a.nav-link, h3.title, h4.text-light{
   color:<?php echo $textColor; ?>!important;
  }
  .btn-secondary{
    background-color:<?php echo $saveButtonColor; ?>!important;
    border:0px;
  }
  a.text-success{
    color:<?php echo $editButtonColor; ?>!important;
  }
  a.delete{
    color:<?php echo $deleteButtonColor; ?>!important;

  }
  label{
    color:<?php echo $labelTextColor; ?>!important;

  }
  
</style>
<div class="container-fluid bg-secondary menu sticky-top" style="background-color: <?php echo $navbarBackground; ?>!important">
    <div class="row">
      <div class="col-sm-2">
         <ul class="nav">
    <li class="nav-item">
      <a class="nav-link shortname" href="#"><?php echo !empty($acronym)?$acronym:''; ?></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><?php echo !empty($fullName)?$fullName:''; ?></a>
    </li>
    
  </ul>

   
      </div>
      <div class="col-sm-6">
         <ul class="nav">
  
    
  
    <li class="nav-item">
      <h4 class="text-light" style="position: relative;top: 8px">Admin Panel</h3>
    </li>
  </ul>
      </div>
      <div class="col-sm-4">
        <ul class="nav justify-content-end">
  
    
      <li class="nav-item">


      <div class="dropright">
  <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fas fa-bell"></i>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    
    <?php

                $con = mysqli_connect('localhost','root', '', 'car-shop');

                //mysqli_select_db($con,'admin-panel');


                $productshow = " SELECT * FROM `car` WHERE quantity<= 2";

                $showmedi = mysqli_query($con,$productshow);

                // $do = mysqli_num_rows($showmedi);


                while ($result = mysqli_fetch_array($showmedi)) {
                    
                    ?>

                  <p class="dropdown-item"><?php echo "Car name: ". $result['name']. " ". $result['model']." "."Quantity: ". $result['quantity']?></p>
                  
                  
                  <?php
                    }
                  ?>
  </div>
</div>

        </li>
        <li class="nav-item">
          <a class="nav-link " href="logout.php" title="logout"><i class='fas fa-sign-out-alt'></i>
          </a>
        </li>
  </ul>
      </div>
    </div>


</div>






<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>