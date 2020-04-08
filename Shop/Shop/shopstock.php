<?php

SESSION_START();
 if(!isset($_SESSION['PhoneNumber'])){
	header('location:index.html');
 }
 else{

   $PhoneNumber=$_SESSION['PhoneNumber'];
  echo $PhoneNumber ;
 }
 include('../../BackEnd/php/connection.php');
$query=mysqli_query($con,"SELECT * from `shop_info` where `PhoneNumber`='$PhoneNumber'");
while($row=mysqli_fetch_array($query))
{
  $shopid=$row[0];

}

$date=date('Y-m-d');
 // Session started

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RTEA</title>

  <!-- Title icon -->
  <link rel = "icon" href = "../../Logos/title.png" 
        type = "image/x-icon"> 
    <!-- Google Font -->
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <!-- <link rel="shortcut icon" href="images/favicon.png" /> -->
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="../shop/shop/index.html">        <img style="height:50px; width:150px; margin-top:20px;"       src="../../Logos/Name.jpg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../shop/shop/index.html">   <img style="height:50px; width:150px; margin-top:20px;"        src="../../Logos/Name.jpg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="mdi mdi-image-filter"></i>Gallery</a>
          </li>
          <li class="nav-item active">
            <a href="#" class="nav-link"><i class="mdi mdi-email-outline"></i>Inbox</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="mdi mdi-calendar"></i>Calendar</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell-ring"></i>
              <span class="count">4</span>
            </a>
           
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-email-variant"></i>
              <span class="count">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                </p>
                <span class="badge badge-info badge-pill float-right">View all</span>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium">David Grey
                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium">Tim Cook
                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    New product launch
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="/images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium"> Johnson
                    <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block">
            <a class="nav-link" href="#">
              <img class="img-xs rounded-circle" src="../../images/Emojis/Neutral.gif" alt="">
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
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image"> <img src="../../images/Emojis/ShopCart.gif" alt="image"/> <span class="online-status online"></span> </div>
              <div class="profile-name">
              
             
                <?php
                include('../../BackEnd/php/connection.php');
                $check = mysqli_query($con, "SELECT * FROM `shop_info` where `PhoneNumber`= '$PhoneNumber'");
                while($row = mysqli_fetch_array($check))
                {
                   echo ' <p class="name">'.$row[2].'</p>';
                  echo '<p class="designation">'.$row[4].'</p>';
                    
                }
               

              
                ?>
                <!-- <p class="name">Richard V.Welsh</p> -->
                <!-- <p class="designation">Manager</p> -->
                <div class="badge badge-teal mx-auto mt-3">Stock</div>
              </div>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="currentUser.php"><img class="menu-icon" src="images/menu_icons/user.png" alt="menu icon"><span class="menu-title">online Users</span></a></li>
          <li class="nav-item"><a class="nav-link" href="productInstertion.php"><img class="menu-icon" src="images/menu_icons/Products.png" alt="menu icon"><span class="menu-title">Product Insertion</span></a></li>
          <li class="nav-item"><a class="nav-link" href=""><img class="menu-icon" src="images/menu_icons/Shops.png" alt="menu icon"><span class="menu-title">My Shop process</span></a></li>
          <!-- <li class="nav-item"><a class="nav-link" href="distribution/request.php"><img class="menu-icon" src="images/menu_icons/04.png" alt="menu icon"><span class="menu-title">Distribution Request</span></a></li>
          <li class="nav-item"><a class="nav-link" href="distribution/marketing.php"><img class="menu-icon" src="images/menu_icons/06.png" alt="menu icon"><span class="menu-title">Advertisements</span></a></li> -->
          <li class="nav-item"><a class="nav-link" href="Analysis.php"><img class="menu-icon" src="../../images/Emojis/ana.gif" alt="menu icon"><span class="menu-title">Analysis</span></a></li>
          <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:5000/"><img class="menu-icon" src="../../images/Emojis/emoji.gif" alt="menu icon"> <span class="menu-title">Behaviuor</span></a></li>
          <li class="nav-item">
           
          <li class="nav-item purchase-button"><a class="nav-link" href="currentUser.php" >Back</a></li>
        </ul>
      </nav>
      <!-- partial -->
      
      <div class="main-panel">
        <div class="content-wrapper">
        
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 grid-margin">
              <div class="card">
                <div class="card-body" >
                  <h5 class="card-title mb-4">Search Product</h5>
                  <div class="row">
                  <form action="" method='POST'>
                  <div><label>Product Details</label>
                  <div class="form-group">
                          <label for="exampleInputEmail1">Enter Product</label>
                          <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter product">
                        </div>
                        <div class="form-group">
                        <button type="Submit" name="demo" class="btn btn-inverse-dark btn-rounded btn-fw">Search</button>
                        </div>
                      </form >
                      <form action=" " method="POST">
                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12">
                      <table class="table table-striped">
                      
                        <tbody>
                            <th>       </th><th>Product</th><th>Stock</th><th>Location</th><th>Price</th>
                        <?php
                            include('../../BackEnd/php/connection.php');
                            if(isset($_POST['demo'])){
                                $productname = $_POST['name'];
                               // echo $productname;
                                $productInfo=mysqli_query($con,"SELECT * FROM `shop_products` where `Name` like '%$productname%'");
                                while($row=mysqli_fetch_array($productInfo))
                                 {
                                     $productId = $row[0];
                                     $price = $row[2];
                                    /// echo $productId;

 
                                 }
                            $onlineUsers=mysqli_query($con,"SELECT * FROM `shop_link` where `shop_ID`='$shopid' and `Product_ID`='$productId'");
                             while($row=mysqli_fetch_array($onlineUsers))
                              {
                                $quntity=$row[3];
                                $location =$row[4];
                                //echo $quntity;

                                echo '
                                                 <tr>
                                     <td>
                                        
                                        <img  src="../../Images/ProductImages/'.$productId.'.jpg" ">
                                       
                                      </td>
                                     
                                      <td >
                                        '.$productname.'
                                      </td>
                                      <td>
                                    '.$quntity.'
                                     </td>
                                     
                                      <td>
                                     '.$location.'
                                      </td>
                                      <td>
                                     '.$price.'
                                      </td>
                                  </tr>';
 
                              }
                            }
                           
                            ?>
                          
                        </tbody>
                      </table>
                   </form>
                   </div>
                  </div>
                  </div>
                </div>                    
            </div>
          </div>
          </div>
                  
             
            
          </div>
       
        
       
        <!-- content-wrapper ends -->
        <!-- partial:../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Anil_M_Namboothiripad <a href="https://www.instagram.com/anil_m_namboothiripad/" target="_blank">Anil</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">https://github.com/Anil-mn/RTEA<a href="https://github.com/Anil-mn/RTEA" >Rtea</a><i class="mdi mdi-heart text-danger"></i></span>
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
  <script src="../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/maps.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
