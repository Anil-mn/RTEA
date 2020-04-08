<?php
SESSION_START();
 if(!isset($_SESSION['PhoneNumber'])){
	header('location:index.html');
 }
 else{
   $PhoneNumber=$_SESSION['PhoneNumber'];
  echo $PhoneNumber ;
 }

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
           
          <li class="nav-item purchase-button"><a class="nav-link" href="shopstock.php" >Back</a></li>
        </ul>
      </nav>
      <!-- partial -->
     
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Default form</h4>
                      <p class="card-description">
                        Basic form layout
                      </p>
                      
                      <form class="forms-sample" action='seletProduct.php' method = 'POST'>
                      
                        <div class="form-group"> 
                          <label for="exampleFormControlSelect1">Category</label>
                    <select name='categorie' class="form-control form-control-lg"  id="exampleFormControlSelect1">
                    <?php 
                    include('../../BackEnd/php/connection.php');
                    $query = mysqli_query($con, "SELECT * FROM `shop_categories`");
                    while($row = mysqli_fetch_array($query))
                       { 
                          echo "<option >".$row['Categories']."</option>" ;
                          
                        }
                        
                        ?>
                    </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Catagories</label>
                          <select class="form-control form-control-lg" name='subcata' id="exampleFormControlSelect1">
                          <?php 
                          include('../../BackEnd/php/connection.php');
                          $query = mysqli_query($con, "SELECT * FROM `shop_subcategories`");
                    while($row = mysqli_fetch_array($query))
                       { 
                          echo "<option >".$row['Name']."</option>" ;
                          
                        }
                        
                        ?>
                    </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Catagories</label>
                    <select class="form-control form-control-lg" name='superSub' id="exampleFormControlSelect1">
                    <?php 
                    include('../../BackEnd/php/connection.php');
                    $query = mysqli_query($con, "SELECT * FROM `shop_supersub`");
                    while($row = mysqli_fetch_array($query))
                       { 
                          echo "<option >".$row['Name']."</option>" ;
                          
                        }
                       session_start();
                         $product=$_SESSION['product'];
                         echo $product;
                         
                        ?>
                    </select>
                    
                    <!-- <div class="form-group"> -->
                   </div>
                        <button type="submit" name ='categorieSelection' class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                      </form>
                    </div>
                  </div>
                </div>
              
                <div class="col-12 stretch-card" >
                  <div class="card" hidden>
                    <div class="card-body">
                      <h4 class="card-title">Horizontal Form</h4>
                      <p class="card-description">
                        Horizontal form layout
                      </p>
                      <form class="forms-sample">
                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-9">
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                          </div>
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             </form>

            <div class="col-md-6 grid-margin stretch-card">
            
           
                 <?php //echo '<p>'.$product.'</p>';
                 if(!isset($product)){echo '<div class="card" hidden>';}
                 else{
                  echo '<div class="card">';                    
                  }
                ?>
              <!-- <div class="card" hidden> -->
                <div class="card-body">
                  <h4 class="card-title">Basic form</h4>
                  <p class="card-description">
                    Basic form elements
                  </p>
                   <form class="forms-sample" action='addProductInShop.php' Method='POST'> 
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Catagories</label>
                    <select class="form-control form-control-lg" name="productItem">
                    <?php
                     include('../../BackEnd/php/connection.php');
                     $productInfo = mysqli_query($con, "SELECT * FROM `shop_products` where `superSubID` = '$product'");
                     while($row = mysqli_fetch_array($productInfo))
                     {
                      echo "<option >".$row['Name']."</option>" ;
                    }?>
                    </select>
                    </div>
                    <div class="form-group" >
                      <label for="exampleInputCity1">Number of products</label>
                      <input type="number" name='noofproduct' class="form-control" id="exampleInputCity1" placeholder="Number OF products" >
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Location</label>
                      <textarea class="form-control" name='location' placeholder="Location" id="exampleTextarea1" rows="2"></textarea>
                    </div>
                      
                    
                    <button type="submit" name="submit" class="btn btn-success mr-2">Add Product</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                  <h4 class="card-title text-success">Qrcode</h4>  
                </div>
              </div>
            </div>
           </form>
           
        
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
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
  <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->

</body>
 UandSAmitha
