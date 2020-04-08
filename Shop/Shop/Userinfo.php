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
              <div class="profile-image"> <img src="../../images/Emojis/Angry.gif" alt="image"/> <span class="online-status online"></span> </div>
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
          <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:5000/"><img class="menu-icon" src="../../images/emojis/angry.gif" alt="menu icon"> <span class="menu-title">Behaviuor</span></a></li>
          <li class="nav-item">
            <!-- <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">General Pages</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../pages/samples/blank-page.html">Blank Page</a></li>
                <li class="nav-item"> <a class="nav-link" href="../pages/samples/login.html">Login</a></li>
                <li class="nav-item"> <a class="nav-link" href="../pages/samples/register.html">Register</a></li>
                <li class="nav-item"> <a class="nav-link" href="../pages/samples/error-404.html">404</a></li>
                <li class="nav-item"> <a class="nav-link" href="../pages/samples/error-500.html">500</a></li>
              </ul>
            </div> -->
          </li>
          <!-- <li class="nav-item"><a class="nav-link" href="../pages/ui-features/typography.html"><img class="menu-icon" src="images/menu_icons/09.png" alt="menu icon"> <span class="menu-title">Typography</span></a></li> -->
          <li class="nav-item purchase-button"><a class="nav-link" href="logout.php" >LogOUT</a></li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="clearfix">
                    <i class="fa fa-users float-right icon-md text-gray"></i>
                  </div>
                  <?php
                    
                       $check = mysqli_query($con, "SELECT COUNT('LogID') FROM `user_log` where `ShopID`= '$shopid'");
                       while($row = mysqli_fetch_array($check))
                       {
                         $numberOfUsers = $row[0];
                        }

                $query = mysqli_query($con, "SELECT COUNT('Userid') FROM `user_info`");
                while($row = mysqli_fetch_array($query))
                {
                  $totalOfUsers = $row[0];
               }
               $avg = ($numberOfUsers/$totalOfUsers)*100;
                 
                 

                 echo ' <h4 class="card-title font-weight-normal text-success">'.$numberOfUsers.'</h4>
                  <h6 class="card-subtitle mb-4">Users</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-success-gadient" role="progressbar" style="width: '.$avg.'%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>';
                   ?>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="clearfix">
                    <i class="fa fa-shopping-cart float-right icon-md text-gray"></i>
                  </div>
                  <?php
               include('../../BackEnd/php/connection.php');
               $Products = mysqli_query($con,"SELECT count(`Product_ID`) from `shop_link`  where `Shop_ID` ='$shopid'");
               while($row = mysqli_fetch_array($Products))
               {
                 $prod=$row[0];
               }
               echo   '<h4 class="card-title font-weight-normal text-info">'.$prod.'</h4>';
?>
               <!-- echo   <h4 class="card-title font-weight-normal text-info">'.$prod.'</h4> -->
                  <h6 class="card-subtitle mb-4">Stock</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-info-gadient" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="clearfix">
                    <i class="fa fa-bookmark float-right icon-md text-gray"></i>
                  </div>
                  <?php
include('../../BackEnd/php/connection.php');
                  
$query=mysqli_query($con,"SELECT sum(`TotalProducts`) from `user_log` where `ShopID`='$shopid'");
while($row=mysqli_fetch_array($query))
{
  $totalsales=$row[0];


                

                echo ' <h4 class="card-title font-weight-normal text-warning">'.$totalsales.'</h4>
                  <h6 class="card-subtitle mb-4">Sales</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-warning-gadient" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>';
}
?>


                
                <!-- <h4 class="card-title font-weight-normal text-warning">1569</h4>
                  <h6 class="card-subtitle mb-4"></h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-warning-gadient" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>-->


              </div> 
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="clearfix">
                    <i class="fa fa-pie-chart float-right icon-md text-gray"></i>
                  </div>
                  <?php
                   include('../../BackEnd/php/connection.php');
                   $query=mysqli_query($con,"SELECT SUM(`TotalAmt`) from `user_log` where `ShopID`='$shopid'");
                   while($row=mysqli_fetch_array($query))
                   {
                     $total=$row[0];
                   //}


               echo   '<h4 class="card-title font-weight-normal text-danger">₹'.$total.'</h4>
               <h6 class="card-subtitle mb-4">Revenue</h6>
               <div class="progress progress-slim">
                 <div class="progress-bar bg-danger-gadient" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
             </div>
           </div>'; 
                   }
           ?>
           <!-- <h4 class="card-title font-weight-normal text-danger">$ 63259</h4>
                  <h6 class="card-subtitle mb-4">Revenue</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-danger-gadient" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <?php
                   include('../../BackEnd/php/connection.php');
                   $query=mysqli_query($con,"SELECT count(`onlineID`) from `user_online` where `shopID`='$shopid'");
                   while($row=mysqli_fetch_array($query))
                   {
                     $onlineusers=$row[0];
                     
                   }
                   $avg = ($onlineusers/$numberOfUsers)*100;
                   $avg=round($avg);
                  echo ' <h4 class="card-title font-weight-normal text-success">'.$onlineusers.'</h4>
                   <p class="card-text">Visitors</p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: '.$avg.'%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">'.$avg.'%</div>
                   </div>
                     </div>';
              

?>
               <!-- <h4 class="card-title font-weight-normal text-success"></h4>
               <p class="card-text">Visitors</p>
              <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
               </div>
                 </div> -->
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <?php
                 include('../../BackEnd/php/connection.php');
                  $query=mysqli_query($con,"SELECT count(`ReqID`) from `dis_shopreq` where `ShopID`='$shopid'");
                  while($row=mysqli_fetch_array($query))
                  {
                    $dist=$row[0];              
                  }
             echo   '<h4 class="card-title font-weight-normal text-info">'.$dist.'</h4>';
                  ?>
                  <!-- <h4 class="card-title font-weight-normal text-info">5623</h4> -->
                  <p class="card-text"> Pending req</p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <?php
include('../../BackEnd/php/connection.php');
            
$query=mysqli_query($con,"SELECT sum(`TotalProducts`) from `user_log` where `ShopID`='$shopid' and `Date`='$date'");
while($row=mysqli_fetch_array($query))
{
  $totalDay=$row[0];
}
$avg=($totalDay/$totalsales)*100;
$avg =round($avg);
 
  echo ' <h4 class="card-title font-weight-normal text-warning">'.$totalDay.'</h4>
  <p class="card-text">Sales</p>
  <div class="progress">
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width:'.$avg.'%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'.$avg.'%</div>
  </div>';


?>
                  <!-- <h4 class="card-title font-weight-normal text-warning">1236</h4>
                  <p class="card-text">Orders</p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                  </div> -->
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <?php
                
                   include('../../BackEnd/php/connection.php');
                  
                   $query=mysqli_query($con,"SELECT SUM(`TotalAmt`) from `user_log` where `ShopID`='$shopid' and `Date`='$date'");
                   while($row=mysqli_fetch_array($query))
                   {
                     $totaltoday=$row[0];
                    }
                    $avg=($totaltoday/$total)*100;
$avg =round($avg);
 
                  
                  
                   
                  echo '<h4 class="card-title font-weight-normal text-danger">'.$totaltoday.'</h4>
                  <p class="card-text">Revenue/day</p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: '.$avg.'%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">'.$avg.'%</div>
                  </div>
                </div>
              </div>';
                
                   ?>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 grid-margin">
              <div class="card">
                <div class="card-body" hidden>
                  <h5 class="card-title mb-4">Global Sales by Top Locations</h5>
                  <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12">
                      <table class="table table-striped">
                        <tbody>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="images/flags/US.png">
                              </div>
                            </td>
                            <td>USA</td>
                            <td class="text-right">
                              2.920
                            </td>
                            <td class="text-right">
                              53.23%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="images/flags/DE.png">
                              </div>
                            </td>
                            <td>Germany</td>
                            <td class="text-right">
                              1.300
                            </td>
                            <td class="text-right">
                              20.43%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="images/flags/AU.png">
                              </div>
                            </td>
                            <td>Australia</td>
                            <td class="text-right">
                              760
                            </td>
                            <td class="text-right">
                              10.35%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="images/flags/GB.png">
                              </div>
                            </td>
                            <td>United Kingdom</td>
                            <td class="text-right">
                              690
                            </td>
                            <td class="text-right">
                              7.87%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="images/flags/RO.png">
                              </div>
                            </td>
                            <td>Romania</td>
                            <td class="text-right">
                              600
                            </td>
                            <td class="text-right">
                              5.94%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="images/flags/BR.png">
                              </div>
                            </td>
                            <td>Brasil</td>
                            <td class="text-right">
                              550
                            </td>
                            <td class="text-right">
                              4.34%
                            </td>
                          </tr>
                        </tbody>
                      </table>
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
              <div class="card">
                <!-- <div class="card-body">
                  <h5 class="card-title mb-4">Testimonial</h5>
                  <div class="row d-flex align-items-center justify-items-center flex-column">
                    <div class="text-center">
                      <img src="../images/faces/face8.jpg" class="rounded-circle" width="100" height="100" />
                    </div>
                    <div class="text-center mt-3">
                      <i class="fa fa-quote-right icon-grey-big"></i>
                    </div>
                    <p class="font-italic text-muted mt-3 mb-4 text-center">
                      Your products, all the kits that I have downloaded from your site and worked with are sooo cool!. Keep up the great work!
                    </p>
                    <h5 class="text-center bolder">Tom Swayer</h5>
                    <h6 class="text-center text-muted">Co-founder</h6>
                  </div> -->

                  <div class="card-body">
                  <form action="" method='POST'>
                  <div><label>User Search</label>
                  <div class="form-group">
                          <label for="exampleInputEmail1">Enter Phone Number</label>
                          <input type="number" name="phonenum" class="form-control" id="exampleInputEmail1" placeholder="Enter PhoneNumber">
                        </div>
                        <div class="form-group">
                        <button type="Submit" name="demo" class="btn btn-inverse-dark btn-rounded btn-fw">Search</button>
                        </div>
                      </form >
                 
                  <h5 class="card-title mb-4"></h5>
                  <form action='#' method='POST'>
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
                     
                     
                    <?php
                
                include('../../BackEnd/Php/connection.php'); 
                $date = date('Y-m-1');
            //  echo $date; 
                if(isset($_POST['demo']))
                {
                  $phonenum=$_POST['phonenum'];
                // User Id fetching From user Info by User PhoneNumber
                  $query=mysqli_query($con,"SELECT * from `user_info` where `PhoneNumber`='$phonenum'");
                  while($row=mysqli_fetch_array($query))
                  {
                       $userid=$row[0];
                       
                  }
                  // To know User is purchased from this shop
                  $query1=mysqli_query($con,"SELECT * from `user_log` where `ShopID`='$shopid' and `User_ID`='$userid'");
                  while($row=mysqli_fetch_array($query1))
                  {
                       $Uid=$row[2];
                      
                       
                       
                  }
                  // To take info of user 
                  $query2=mysqli_query($con,"SELECT * from `user_info` where `UserId`='$Uid'");
                  while($row=mysqli_fetch_array($query2))
                  {    
                       // to get location name of user , by comparing Id in user_info table
                       $locationGet = mysqli_query($con,"SELECT * from `location` where `LocationID`='$row[7]'");
                       while($row1=mysqli_fetch_array($locationGet))
                  {
                     // Taking how many time he purchased from this shop COUNT(user_id) and how much he spend in this shop MAX('TotalAmt')
                     $countof=mysqli_query($con,"SELECT COUNT(`User_ID`),SUM(`TotalAmt`) from `user_log` where `User_ID`='$Uid'");
                     while($row2=mysqli_fetch_array($countof))
                     {
                        echo '<tr><td>'.$row[2].'</td><td>'.$row[1].'</td><td>'.$row1[1].'</td><td>'.$row2[0].'</td><td>₹'.$row2[1].'</td><tr>';
                   }

                 }
              }

                
                 
              echo '<tr><td>
              <select name="date" class="form-control"> ';
              

               $query=mysqli_query($con,"SELECT * from `user_log` where `User_ID`='$userid' and `Date` > '$date'");
               while($row=mysqli_fetch_array($query))
               {
                   $date=$row[3];
                   
                   echo '<option name='.$row[0].'>'.$date.' </option>';
                  
               }
              
            

                     
                    
                  echo '</select>
                     </td><td><button name="sub" class="btn btn-success mr-2">SUBMIT </button></td></tr>';
                    }
              ?>
              </tbody></table>
                       
                      
<?php

                 if(isset($_POST['sub']))
                 {
                   
                  echo '<table class="table ">
                  <thead>
                 <tr>
                 <th>Product Name</th>
                   <th>Quantity</th>
                   <th>Amount</th>
                 </tr>
               </thead>
               <tbody>
                  ';
                   $Datefromlog =$_POST['date'];
                  echo $Datefromlog;
                   
                   $query=mysqli_query($con,"SELECT * from `user_log` where `date`='$Datefromlog'");
                   while($row=mysqli_fetch_array($query))
                   {
                    $logid=$row[0];
                    $Behaviour=$row[7];
                    

                 }
                   $query2= mysqli_query($con,"SELECT * FROM `user_transactions` where `LogID`='$logid'");
                   while($row=mysqli_fetch_array($query2))
                   {
                    $prodid=$row[2];
                    //echo $prodid;
                    $noofprod=$row[4];
                    $totalamt=$row[3];
                    $productName = mysqli_query($con,"SELECT * from `shop_products` where `Product_ID`='$prodid'");
                    while($row1=mysqli_fetch_array($productName))
                    {
                     // echo $row1[1];
                     $query3= mysqli_query($con,"SELECT sum(`amount`) FROM `user_transactions` where `LogID`='$logid'");
                     while($row4=mysqli_fetch_array($query3))
                     {
                      $total = $row4[0];
                   
                      
                     echo '<tr><td>'.$row1[1].'</td><td>'.$noofprod.'</td><td>'.$totalamt.'</td</tr>';
                      
                    }
                    }
                   } 
                   echo '<tr><td>total</td><td></td><td>'.$total.'</td></tr>';
                  }
                 

                  ?>
                  
                 
                    
                    </tbody>
                </form>
                  </table>
                </div>
                </div>
              </div>
              </div>
            



              <?php
                if(isset($_POST['demo']))
                {
                  echo '<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 grid-margin stretch-card">';
                }
                else {
                  echo '<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 grid-margin stretch-card" hidden>';
                }
              ?>
           <!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 grid-margin stretch-card"> -->
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Predition</h5>
                  <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Availablity in shop</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                   $phonenum=$_POST['phonenum'];
                   $user=mysqli_query($con,"SELECT * from  `user_tobuylist` where `userID`='$userid'");
                   while($row=mysqli_fetch_array($user))
                   {
                     $prodid=$row[1];
                     $quan=$row[3];

                     $prodinfo=mysqli_query($con,"SELECT * from `shop_products` where `Product_ID`='$prodid'");
                     while($row=mysqli_fetch_array($prodinfo))
                     {
                       $prodname=$row[1];
                       $linkinfo=mysqli_query($con,"SELECT `NumberOf` from `shop_link` where `Product_ID`='$prodid' and `Shop_ID`='$shopid' ");
                       while($row=mysqli_fetch_array($linkinfo))
                       {
                         $noof=$row[0];
                         echo '<tr>
                         <td>'.$prodid.'</td>
                         <td>'.$prodname.'</td>
                         <td>'.$quan.'</td>';
                         if($noof < $quan)
                         {
                           $warning = 'Unavailable';
                           echo '<td>
                           <label class="badge badge-danger">'.$warning.'</label></td>';
                           
                         }
                         else {
                           $warning = 'Available';
                           echo '<td>
                           <label class="badge badge-success">'.$warning.'</label></td>';
                         }

                    
                     echo '
                   </tr>';
                   }

                  }
                }

?>
                    
                    </tbody>
                  </table>
                </div>
              </div>
            </div> 
         
       
        <?php
                if(isset($_POST['demo']))
                {
                  $query=mysqli_query($con,"SELECT * from `user_log` where `User_ID`='$userid'");
                while($row=mysqli_fetch_array($query))
                {
                 $logid=$row[0]; 
                 $Behaviour=$row[7];
                 $date = $row[3];
                 echo '
                 <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6 grid-margin stretch-card">
                 <div class="card">
                   <div class="card-body">  
                   <h6 class="card-title font-weight-normal text-info" Style=margin-left:10px;>Behaviour</h6>  
                   <h6 class="card-title font-weight-normal text-warning" Style=margin-left:20px;>'.$Behaviour.'</h6>  
                   <img src="../../Images/emojis/'.$Behaviour.'.gif" style="Height:80px; width:80px; margin-left:10px;">
                      <h6 class="card-title font-weight-normal text-info"></h6>                 
                     <h6 class="card-title font-weight-normal text-success">'.$date.'</h6>
                   </div>
                 </div>
               </div>
                 ';}
                }
                else {
               
                }
            
               
                 
                
                 ?>
                
            
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
