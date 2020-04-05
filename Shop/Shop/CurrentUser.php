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
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="icon-info mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Application Error</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="icon-speech mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="icon-envelope mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
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
              <div class="profile-image"> <img src="../../images/Emojis/Happy.gif" alt="image"/> <span class="online-status online"></span> </div>
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
                <div class="badge badge-teal mx-auto mt-3">Online</div>
              </div>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="currentUser.php"><img class="menu-icon" src="images/menu_icons/user.png" alt="menu icon"><span class="menu-title">online Users</span></a></li>
          <li class="nav-item"><a class="nav-link" href="userInfo.php"><img class="menu-icon" src="images/menu_icons/user1.png" alt="menu icon"><span class="menu-title">User Info</span></a></li>
          <li class="nav-item"><a class="nav-link" href="shopstock.php"><img class="menu-icon" src="images/menu_icons/shops.png" alt="menu icon"><span class="menu-title">My Shop process</span></a></li>
          <li class="nav-item"><a class="nav-link" href="distribution/request.php"><img class="menu-icon" src="images/menu_icons/dis.png" alt="menu icon"><span class="menu-title">Distribution Request</span></a></li>
          <li class="nav-item"><a class="nav-link" href="distribution/marketing.php"><img class="menu-icon" src="images/menu_icons/ads.png" alt="menu icon"><span class="menu-title">Advertisements</span></a></li>
          <li class="nav-item"><a class="nav-link" href="Analysis.php"><img class="menu-icon" src="images/menu_icons/05.png" alt="menu icon"><span class="menu-title">Analysis</span></a></li>
          <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:5000/"><img class="menu-icon" src="../../images/emojis/happy.gif" alt="menu icon"> <span class="menu-title">Behaviuor</span></a></li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">General Pages</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../pages/samples/blank-page.html">Blank Page</a></li>
                <li class="nav-item"> <a class="nav-link" href="../pages/samples/login.html">Login</a></li>
                <li class="nav-item"> <a class="nav-link" href="../pages/samples/register.html">Register</a></li>
                <li class="nav-item"> <a class="nav-link" href="../pages/samples/error-404.html">404</a></li>
                <li class="nav-item"> <a class="nav-link" href="../pages/samples/error-500.html">500</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="../pages/ui-features/typography.html"><img class="menu-icon" src="images/menu_icons/09.png" alt="menu icon"> <span class="menu-title">Typography</span></a></li>
          <li class="nav-item purchase-button"><a class="nav-link" href="https://www.bootstrapdash.com/product/star-admin-pro/" target="_blank">Get full version</a></li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row purchace-popup">
            <div class="col-12">
             
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-cube text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-right">Total Revenue</p>
                      <div class="fluid-container">
                        <?php
                        include('../../BackEnd/php/connection.php');
                        $total=mysqli_query($con,"SELECT SUM(`TotalAmt`) from `user_log` where `ShopID`='$shopid'");
                        while($row = mysqli_fetch_array($total)){
                          $revanew = $row[0];
                          echo ' <h3 class="card-title font-weight-bold text-right mb-0">₹'.$revanew.'</h3>';
                        }
                       

                        ?>
                        <!-- <h3 class="card-title font-weight-bold text-right mb-0">$65,650</h3> -->
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 65% lower growth
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-receipt text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-right">Orders</p>
                      <div class="fluid-container">
                      <?php
                     include('../../BackEnd/php/connection.php');
                           $query=mysqli_query($con,"SELECT SUM(`Quntity`) from `dis_shopreq` where `ShopID`='$shopid'");
                           while($row=mysqli_fetch_array($query))
                           {
                              $Totalproducts=$row[0]; 
                             echo '<h3 class="card-title font-weight-bold text-right mb-0">'.$row[0].'</h3>';
                           }
                           ?>
                        <!-- <h3 class="card-title font-weight-bold text-right mb-0">3455</h3> -->
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Product-wise sales
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-poll-box text-teal icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-right">Sales</p>
                      <div class="fluid-container">
                      <?php
                     include('../../BackEnd/php/connection.php');
                           $query=mysqli_query($con,"SELECT SUM(`TotalProducts`) from `user_log` where `ShopID`='$shopid'");
                           while($row=mysqli_fetch_array($query))
                           {
                              $Totalproducts=$row[0]; 
                             echo '<h3 class="card-title font-weight-bold text-right mb-0">'.$row[0].'</h3>';
                           }
                           ?>
                        <!-- <h3 class="card-title font-weight-bold text-right mb-0">5693</h3> -->
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Weekly Sales
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-right">Customer online</p>
                      <div class="fluid-container">
                        <?php
                      include('../../BackEnd/php/connection.php');
                           $query=mysqli_query($con,"SELECT Count(`onlineid`) from `user_online` where `ShopID`='$shopid'");
                           while($row=mysqli_fetch_array($query))
                           {
                              $Totalproducts=$row[0]; 
                             echo '<h3 class="card-title font-weight-bold text-right mb-0">'.$row[0].'</h3>';
                           }
                           ?>
                        <!-- <h3 class="card-title font-weight-bold text-right mb-0">246</h3> -->
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Product-wise sales
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Sales</h5>
                  <canvas id="dashoard-area-chart" height="100px"></canvas>
                </div>
              </div>
            </div>
          </div>
      
    
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 grid-margin">
              <div class="card">
                <div class="card-body" >
                  <h5 class="card-title mb-4">Global Sales by Top Locations</h5>
                  <div class="row">
                      <form action=" " method="POST">
                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12">
                      <table class="table table-striped">
                      
                        <tbody>
                            <th>User</th><th>User_Name</th><th>PhoneNumber</th><th>Current Amount</th><th>Entry Time</th>
                        <?php
                            include('../../BackEnd/php/connection.php');
                            $onlineUsers=mysqli_query($con,"SELECT * FROM `user_online` where `shopID`='$shopid'");
                             while($row=mysqli_fetch_array($onlineUsers))
                              {
                                  $userid=$row[1];
                                  $time=$row[3];
                                   $userinfo=mysqli_query($con,"SELECT * FROM `user_info` where `UserId`='$userid'");
                                   while($row1=mysqli_fetch_array($userinfo))
                                    {
                                        $userName = $row1[1];
                                        $UserNumber = $row1[2];
                                        $usercart=mysqli_query($con,"SELECT sum(price),`ProductID` FROM `user_cart` where `onlineID`='$userid'");
                                        while($row2=mysqli_fetch_array($usercart))
                                         {
                                             $TotalPrice = $row2[0];
                                             $productId  = $row2[1];

                                             echo '
                                             <tr>
                                 <td>
                                   <div class="flag">
                                     <img src="../../Images/UserImages/'.$UserNumber.'.jpg">
                                   </div>
                                 </td>
                                 
                                 <td >
                                   '.$userName.'
                                 </td>
                                 <td>
                                 '.$UserNumber.'
                                 </td>
                                 <td >
                                 '.$TotalPrice.'
                                 </td>
                                 <td >
                                 '.$time.'
                                 </td>
                                 
                                 
                               </tr>
                               
                                             ';
                                         }
 
                                    }
                              }
                            ?>
                          
                        </tbody>
                      </table>
                   </form>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-xs-12">
                      <div class="rounded" id="map" style="min-height:300px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 grid-margin stretch-card">
              <div class="card" hidden>
                  <div class="card-body">
                  <table class="table ">
                     <thead>
                      <tr>
                      <th>Phone Number</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Visit</th>
                         <th>Total amount</th> 
                      </tr>
                    </thead>
                    <tbody>
                     
                     
                   
              </tbody></table>
                       
                      
                     
                    </tbody>
                </form>
                  </table>
                </div>
                </div>
              </div>
            

              <?php
                
            //     include('../../BackEnd/Php/connection.php'); 
            //     $date = date('Y-m-1');
                
            // //  echo $date; 
            //     if(isset($_POST[$userid]))
            //     {
                  
            //       $id=$_POST['Id'];
            //       $usercart=mysqli_query($con,"SELECT sum(price),`ProductID`,`Numberofprod`,`price` FROM `user_cart` where `onlineID`='$id'");
            //       while($row2=mysqli_fetch_array($usercart))
            //        {
            //            $TotalPrice = $row2[0];
            //            $productId  = $row2[1];
            //            $NoOfProducts = $row2[2];
            //            $price = $row2[3];
            //            echo $TotalPrice;
                   
            //       $query=mysqli_query($con,"SELECT * FROM `shop_products` where `Product_ID`='$productId'");
            //       while($row1=mysqli_fetch_array($query))
            //       {
            //            $ProductName=$row1[0];
            //           echo '<tr><td>'.$ProductName.'</td><td>'.$NoOfProducts.'</td><td>'.$price.'</td><tr>';
            //        }

            //      }
            //     }
              ?>

              
           
          </div>
        </div>
        
        <div class="row" hidden>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6 grid-margin stretch-card">
              <div class="card" >
                <div class="card-body">
                <?php
                 




?>
                
                  <h6 class="card-title font-weight-normal text-info">7896</h6>                 
                  <h6 class="card-subtitle mb-4 text-muted">Visitors</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title font-weight-normal text-info">7523</h6>
                  <h6 class="card-subtitle mb-4 text-muted">Sales</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title font-weight-normal text-info">6932</h6>
                  <h6 class="card-subtitle mb-4 text-muted">Orders</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title font-weight-normal text-info">$ 54123</h6>
                  <h6 class="card-subtitle mb-4 text-muted">Revenue</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title font-weight-normal text-info">23658</h6>
                  <h6 class="card-subtitle mb-4 text-muted">New clients</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title font-weight-normal text-info">8965</h6>
                  <h6 class="card-subtitle mb-4 text-muted">Comments</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- content-wrapper ends -->
        <!-- partial:../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
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
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script> -->
  <script src="js/maps.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
