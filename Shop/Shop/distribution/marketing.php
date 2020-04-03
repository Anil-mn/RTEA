<?php
include('../../../BackEnd/php/connection.php');
session_start();
$PhoneNumber=$_SESSION['PhoneNumber'];
$query=mysqli_query($con,"SELECT * FROM `shop_info` where `PhoneNumber`='$PhoneNumber'");
while($row = mysqli_fetch_array($query))
{
    $shopid=$row[0];
    //echo $shopid;
}


include('disreq.php');
 disreq();



?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel = "shortcut icon" href = "../../../Logos/title.png" 
        type = "image/x-icon">
  <title>RTEA shop/Distribution</title>

  <!-- Title icon -->
  <link rel = "icon" href = "../../../Logos/title.png" 
        type = "image/x-icon"> 
    <!-- Google Font -->
  <!-- plugins:css -->
  <link rel="stylesheet" href="../node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <!-- <link rel="shortcut icon" href="../images/favicon.png" /> -->
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
       <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="../shop/shop/index.html">        <img style="height:50px; width:150px; margin-top:20px;"       src="../../../Logos/Name.jpg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../shop/shop/index.html">   <img style="height:50px; width:150px; margin-top:20px;"        src="../../../Logos/Name.jpg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="#slot" class="nav-link"><i class="mdi mdi-image-filter"></i>ADD Slot</a>
          </li>
          <li class="nav-item active">
            <a href="#details" class="nav-link"><i class="mdi mdi-email-outline"></i>Slot Details</a>
          </li>
          <li class="nav-item">
            <a href="#ads" class="nav-link"><i class="mdi mdi-calendar"></i>MyADS</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell-ring"></i>
              <span class="count">D</span>
            </a>
            
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-email-variant"></i>
              <span class="count">S</span>
            </a>
            
                
          </li>
          <li class="nav-item d-none d-lg-block">
            <a class="nav-link" href="#">
              <img class="img-xs rounded-circle" src="../../../Logos/title.png" alt="">
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image"> <img src="../../../Logos/title.png" alt="image"/> <span class="online-status online"></span> </div>
              <div class="profile-name">
              
             
                <?php
                include('../../../BackEnd/php/connection.php');
                $check = mysqli_query($con, "SELECT * FROM `shop_info` where `PhoneNumber`= '$PhoneNumber'");
                while($row = mysqli_fetch_array($check))
                {
                   echo ' <p class="name">'.$row[2].'</p>';
                  echo '<p class="designation">'.$row[4].'</p>';
                    
                }
               

              
                ?>
                <!-- <p class="name">Richard V.Welsh</p> -->
                <!-- <p class="designation">Manager</p> -->
                <div class="badge badge-teal mx-auto mt-3">Online</div>
              </div>
            </div>   </li>
            <li class="nav-item"><a class="nav-link" href="request.php"><img class="menu-icon" src="../images/menu_icons/01.png" alt="menu icon"><span class="menu-title">Request</span></a></li>
          <li class="nav-item"><a class="nav-link" href="track.php"><img class="menu-icon" src="../images/menu_icons/02.png" alt="menu icon"><span class="menu-title">Track</span></a></li>
          <li class="nav-item"><a class="nav-link" href="../shopstock.php"><img class="menu-icon" src="../images/menu_icons/03.png" alt="menu icon"><span class="menu-title">Shop Information</span></a></li>
          <!-- <li class="nav-item"><a class="nav-link" href="../../../pages/forms/basic_elements.html"><img class="menu-icon" src="../../images/menu_icons/04.png" alt="menu icon"><span class="menu-title">Form</span></a></li>
          <li class="nav-item"><a class="nav-link" href="../../../pages/charts/chartjs.html"><img class="menu-icon" src="../../images/menu_icons/05.png" alt="menu icon"><span class="menu-title">Charts</span></a></li>
          <li class="nav-item"><a class="nav-link" href="../../../pages/tables/basic-table.html"><img class="menu-icon" src="../../images/menu_icons/06.png" alt="menu icon"><span class="menu-title">Table</span></a></li>
          <li class="nav-item"><a class="nav-link" href="../../../pages/icons/font-awesome.html"><img class="menu-icon" src="../../images/menu_icons/07.png" alt="menu icon"> <span class="menu-title">Icons</span></a></li>
          <li class="nav-item"> -->
            
          </li>
            <li class="nav-item purchase-button"><a class="nav-link" href="../CurrentUser.php" >BACK</a></li>
        </ul>
      </nav>
      <!-- partial -->
       <div class="main-panel">
         <div class="content-wrapper">
           <div class="row" >
               <div class="col-lg-6 grid-margin stretch-card">
                  <div class="card" id="slot">
                      <div class="card-body">
                         <form action="#" method='POST'> 
                           <h4 class="card-title">Add Slots </h4>
                           <p class="card-description"></p>
                           <form class="forms-sample">
                              <div class="form-group">
                                <label for="exampleInputPassword1">No of Slots</label>
                                <input type="number" name="slots" class="form-control" id="exampleInputPassword1" placeholder="No of Slots">
                              </div>
                              <button type="submit" name='submit' class="btn btn-success mr-2">Updat Slot</button>
                              <button type="reset" class="btn btn-danger btn-fw">Cancel</button>
                      
                      <?php
                      include('../../../BackEnd/php/connection.php');
                      if(isset($_POST['submit']))
                      {

                        $Slotupdate=$_POST['slots'];
                        $query="UPDATE `shop_info` SET `AddSlots`='$Slotupdate' where `shopID`='$shopid'";
                        $res=mysqli_query($con,$query);
                        
                      }
                
                      ?>
                              </form>
                            </div>
                          </div>
                        </div>





            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body" id='details'>
                  <form action="#" method='POST'> 
                     <h4 class="card-title">Add Slot Details</h4>
                      <p class="card-description"> </p>
                      <form class="forms-sample">
                        <div class="form-group">
                        <select class="form-control form-control-sm" name='SlotNum' id="exampleFormControlSelect3">
                          <?php
                          include('../../../BackEnd/php/connection.php');
                          $query = mysqli_query($con,"SELECT  `AddSlots` FROM `shop_info` WHERE  `shopID`='$shopid'");
                             while($row = mysqli_fetch_array($query))
                              {
                                 $slotNumber = $row[0];
                              }
                           $i = 1 ;
                          for($i;$i<=$slotNumber;$i++)
                          {echo '<option>'.$i.'</option>';  }
 
                          ?>
                        </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Slot Details</label>
                          <input type="text" name="quantity" class="form-control" id="exampleInputPassword1" placeholder="Quantity">
                        </div>
                        <button type="submit" name='submit1' class="btn btn-success"><i class="mdi mdi-cloud-download"></i>ADD</button>
                        <button type="reset" class="btn btn-danger btn-fw">Cancel</button>
                      
                      <?php
                      include('../../../BackEnd/php/connection.php');
                      if(isset($_POST['submit1']))
                      {
                        $quantity=$_POST['quantity'];
                        $slotnum = $_POST['SlotNum'];
                        include('../../../BackEnd/php/connection.php');
                        $AddslotDetails = mysqli_query($con,"SELECT * FROM `market_shopslots` WHERE `SlotNumber`= '$slotnum' and `SlotName`='$quantity'");
                        $row=mysqli_fetch_array($AddslotDetails);
                        if($row==true){

                        }
                        else{
                          $query="INSERT INTO `market_shopslots`(`ShopID`,`SlotNumber`,`SlotName`) VALUES ('$shopid','$slotnum','$quantity')";
                          $res=mysqli_query($con,$query);
    
                        } 
                      
                        
                       }
                      
                      ?>

                       
                      </form>
                    </div>
                  </div>
                </div>    
              </div>
              <div class="row" id='ads'>
              <?php
               include('../../../BackEnd/php/connection.php');
               $AddslotDetails = mysqli_query($con,"SELECT * FROM `market_shopslots` WHERE `ShopID`= '$shopid'");
               while($row=mysqli_fetch_array($AddslotDetails))
               {
                 $slotID=$row[2];
                 $slotName=$row[3];
                 $addInfo = mysqli_query($con,"SELECT * FROM `market_shopads` where `SoltNumber`='$slotID'");
                 while($row1=mysqli_fetch_array($addInfo))
                 {
                   $addid = $row1[2];
                 }
                   $addname1 = mysqli_query($con,"SELECT * FROM `market_add` where `Add_ID`='$addid'");
                   while($row2=mysqli_fetch_array($addname1))
                   {

                      $addname = $row2[2];
                      echo '<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <div class="clearfix">
                            <i class="fa fa-users float-right icon-md text-gray"></i>
                          </div>
                          <img src="../../../Images/AdsImages/'.$addid.'.jpg" style="height:150px; width:150px; margin-left:20px;  margin-bottom:40px;">
                          <div >
                          <h4 class="card-title font-weight-normal text-info">'.$addname.'</h4>
                          <h6 class="card-subtitle mb-4">'.$slotName.'</h6>
                          </div>
                        </div>
                      </div>
                    </div>';
                   }
                
               }
    


             ?>
             
          </div>

                  
        <!-- content-wrapper ends -->
        <!-- partial:../../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">RTEA© ANIL <a href="http://www.bootstrapdash.com/" target="_blank"></span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../../../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../../js/off-canvas.js"></script>
  <script src="../../../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->



</body>
</html>
