<?php
SESSION_START();
$disID=$_SESSION['phn_No'];
echo $disID;
include('../../BackEnd/Php/connection.php');
$DisInfo =   mysqli_query($con,"SELECT * FROM `distribution_info` Where `Distribution_ID`='$disID'");
while($row = mysqli_fetch_array($DisInfo))
{
 $DisLocation =$row[1];
}

?>

<!DOCTYPE html>
<html lang="en">
<!-- Title icon -->
<link rel = "icon" href = "../../Logos/title.png" 
        type = "image/x-icon"> 
  <head>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
  <head>
    <title>RTEA DISTRIBUTION</title>

   
    <!-- plugins:css -->
    <link rel="stylesheet" href="../Distribution/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../Distribution/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../Distribution/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../Distribution/vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="../Distribution/vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="./images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="../../Logos/Untitled-1.jpg" alt="logo" class="logo-dark" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../../Logos/title.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome to RTEA Distribution</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
            <!-- <li class="nav-item"><a href="#" class="nav-link"><i class="icon-basket-loaded"></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chart"></i></a></li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="icon-speech"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="images/faces/face10.jpg" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="images/faces/face12.jpg" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="images/faces/face1.jpg" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">
              <a class="nav-link d-flex align-items-center dropdown-toggle" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-3">
                  <i class="flag-icon flag-icon-us"></i>
                </div>
                <span class="profile-text font-weight-normal">English</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-us"></i> English </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-fr"></i> French </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-ae"></i> Arabic </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-ru"></i> Russian </a>
              </div>
            </li> -->
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ml-2" src="../../Logos/title.png" alt="Profile image"> <span class="font-weight-normal"> NAme</span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="../../Logos/title.png" alt="Profile image">
                 <p class="mb-1 mt-3">Name</p> 
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                <img class="img-xs rounded-circle" src="../../Logos/title.png" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                <?php 
                 include('../../BackEnd/Php/connection.php');
                 $query = mysqli_query($con,"SELECT * FROM `distribution_info` WHERE `Distribution_ID`='$disID'");
                 while($row = mysqli_fetch_array($query)){
                   $name = $row[2];
                 }
                 echo '<p class="profile-name">'.$name.'</p>';
                  ?>
                  <p class="designation">Distributor</p>
                </div>
                <div class="icon-container">
                  <i class="icon-bubbles"></i>
                  <div class="dot-indicator bg-danger"></div>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">HOME</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.php">
                <span class="menu-title">Requests</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Products</span></li>
            <li class="nav-item">
              <!-- <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic"> -->
                
                <a class="nav-link" href="inventryInfo.php">
                <span class="menu-title">TakeOrder</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <!-- <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                </ul>
              </div> -->
            </li>
            <li class="nav-item">
            <a class="nav-link" href="myOrders.php">
                <span class="menu-title">MYOrders</span>
                <i class="icon-globe menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="deliverOrder.php">
                <span class="menu-title">ShopDelivery</span>
                <i class="icon-book-open menu-icon"></i>
              </a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <span class="menu-title">Stock </span>
                <i class="icon-chart menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <span class="menu-title">Tables</span>
                <i class="icon-grid menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Sample Pages</span></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">General Pages</span>
                <i class="icon-doc menu-icon"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../Distribution/pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../Distribution/pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../Distribution/pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../Distribution/pages/samples/error-500.html"> 500 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../Distribution/pages/samples/blank-page.html"> Blank Page </a></li>
                </ul>
              </div>
            </li>
            <!-- <li class="nav-item pro-upgrade">
              <span class="nav-link">
                <a class="btn btn-block px-0 btn-rounded btn-upgrade" href="https://www.bootstrapdash.com/product/stellar-admin-template/" target="_blank"> <i class="icon-badge mx-2"></i> Upgrade to Pro</a>
              </span>
            </li> -->
          </ul>
        </nav>
        <!-- partial -->
              <div class="main-panel">
                  <div class="content-wrapper">
                    <div class="row" >
                    <!-- <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                    <h4 class="card-title">Search</h4>
                    <form class="form-inline" action="" method="">
                      <label class="sr-only" for="inlineFormInputName2">Name</label>
                        <div class="form-group ">
                           <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                             <div class="col-sm-9">
                                 <select name="location" id="location" class="form-control">
                                 
                                  </select>
                                </div>
                              </div>
                      <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                      <div class="form-group ">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label> 
                             <div class="col-sm-9">
                                 <select name="location" id="location" class="form-control">
                                  
                                  </select>
                                </div>
                              </div>
                      <button type="submit" class="btn btn-primary mb-2">Search</button>
                    </form>
                  </div>
                </div>
              </div> -->
                       <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">Quotations</h4>
                      <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"></a>
                    </div>
                    <div class="table-responsive border rounded p-1">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="font-weight-bold">Company Name</th>
                            <th class="font-weight-bold">Phone Number</th>
                            <th class="font-weight-bold">Location</th>
                            <th class="font-weight-bold">Product</th>
                            <th class="font-weight-bold">To </th> 
                            <th class="font-weight-bold">Quntity</th>
                           <!-- <th class="font-weight-bold">Price</th> -->
                            <th class="font-weight-bold">Enter The Coode</th>
                            <th class="font-weight-bold">Purchase The order</th>
                          </tr>
                        </thead>
                        <tbody>
                              <?php
                              include('../../BackEnd/Php/connection.php');
                              
                              $query = mysqli_query($con,"SELECT * FROM `distributor_orders` WHERE `Distributor_ID` = '$disID' and `Status` = 'Order Accepted'");
                              while ($row = mysqli_fetch_array($query))
                              {
                                $reqID = $row[2];
                                //echo $reqID;
                              
                              $result=mysqli_query($con,"SELECT * FROM `dis_shopreq` Where `ReqID` = '$reqID'");
                              while($row1 = mysqli_fetch_array($result))
                              { 
                                $ShopId = $row1[1];
                                $productName = $row1[2];
                                $quntity = $row1[3];
                                $shopInfo = mysqli_query($con,"SELECT * FROM `shop_info` Where `ShopID` = '$ShopId'");
                                while($row5 = mysqli_fetch_array($shopInfo))
                                { 
                                
                                 $shopName =  $row5[2];
                                 $location =  $row5[4];

                                
                                
                                $invetryProduct = mysqli_query($con,"SELECT * FROM `inventory_products` Where `ProName` like '%$productName%'");
                                while($row2 = mysqli_fetch_array($invetryProduct))
                                { 
                                
                                 $invId =  $row2[2];
                                 $location =  $row2[4];
                                 $invetryDetails = mysqli_query($con,"SELECT * FROM `inventory` Where `id` = '$invId'");
                                 while($row3 = mysqli_fetch_array($invetryDetails))
                                 { 
                                 
                                  $phoneNumber =  $row3[1];
                                  $name =  $row3[2];
                                  echo '<tr><td>'.$name.'</td><td>'.$phoneNumber.'</td><td>'.$location.'</td><td>'.$productName.'</td><td>'.$shopName.'</td><td>'.$quntity.'</td>
                                  <td><input  type="number"></td><td><a href=php/takeOrder.php?'.$reqID.'> takeOrder</a></td></tr>' ;
                                   
                               }}
                              }
                            }}
                              ?> 
                          </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 grid-margin stretch-card" hidden>
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">INVENTORY PRODUCT REQUEST</h4>
                            <p class="card-description"></p>
                            <form class="forms-sample" action="../Distribution/inventory_req.php" method="POST">
                            <div class="form-group row">
                                <!-- <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label> -->
                                <div class="col-sm-9">
                                  <select name="location" id="location" class="form-control">
                                    <?php
                                    include('../../BackEnd/php/connection.php');
                                    $query = mysqli_query ($con, "SELECT * FROM `location`");
                                    while($row = mysqli_fetch_array($query))
                                    {
                                      echo "<option>".$row['Name']."</option>";
                                    }
                                    ?>
                                 </select>
                                </div>
                              </div>
                               <div class="form-group row">
                                <!-- <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label> -->
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="inventoryname" name="inventoryname" placeholder="INVENTORY NAME">
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <!-- <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label> -->
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="productname" name="productname" placeholder="PRODUCT NAME">
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <!-- <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label> -->
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="quantity" name="quantity" placeholder="QUANTITY(litre/nos/kg)">
                                </div>
                              </div>
                              <div class="form-group row">
                                <!-- <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Re Password</label> -->
                                <div class="col-sm-9">
                                  <input type="date" class="form-control" id="deadline" name="deadline" placeholder="DEADLINE">
                                </div>
                              </div>
                              
                              <button type="submit" class="btn btn-primary mr-2">Request</button>
                              <button class="btn btn-light">Cancel</button>
                            </form>
                          </div>
                        </div>
                      </div>
                     </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://www.bootstrapdash.com/" target="_blank">RTEA</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Sreelekha<i class="icon-heart text-danger"></i></span>
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
    <script src="../Distribution/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>