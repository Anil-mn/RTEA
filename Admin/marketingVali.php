<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel = "icon" href = "../Logos/title.png" 
type = "image/x-icon"> 
  <title>Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../shop/shop/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../shop/shop/node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../shop/shop/node_modules/font-awesome/css/font-awesome.min.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../shop/shop/css/style.css">
  <!-- endinject -->
<!-- Title icon -->

</head>

<body>
  <div class="container-scroller">
    <!-- partial:../shop/shop/partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="../shop/shop/index.html">        <img style="height:50px; width:150px; margin-top:20px;"       src="../Logos/Name.jpg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../shop/shop/index.html">   <img style="height:50px; width:150px; margin-top:20px;"        src="../Logos/Name.jpg" alt="logo"/></a>
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
              <?php
              include('../Backend/php/connection.php');
              $date = date('Y-m-d');
                   
                   $Adexp=mysqli_query($con,"SELECT count(`ID`) from `market_ads` where `DueDate`='$date'");
                   while($row=mysqli_fetch_array($Adexp))
                   {
                       $adid=$row[0];
 
                   }
                            
                      echo '<span class="count">'.$adid.'</span>';
                   
                       ?>
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
                  <img src="../shop/shop/images/faces/face4.jpg" alt="image" class="profile-pic">
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
                  <img src="../Logos/title.png" alt="image" class="profile-pic">
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
                  <img src="../shop/shop/images/faces/face3.jpg" alt="image" class="profile-pic">
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
              <img class="img-xs rounded-circle" src="../Logos/title.png" alt="">
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
      <!-- partial:../shop/shop/partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image"> <img src="../Logos/title.png" alt="image"/> <span class="online-status online"></span> </div>
              <div class="profile-name">
                <p class="name">Admin</p>
                <p class="designation">Marketing</p>
                <div class="badge badge-teal mx-auto mt-3">Online</div>
              </div>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="index.php"><img class="menu-icon" src="../Shop/Shop/images/menu_icons/01.png" alt="menu icon"><span class="menu-title">HOME</span></a></li>
          <li class="nav-item"><a class="nav-link" href="userValidation.php"><img class="menu-icon" src="../Shop/Shop/images/menu_icons/02.png" alt="menu icon"><span class="menu-title">Users</span></a></li>
          <li class="nav-item"><a class="nav-link" href="ShopValidation.php"><img class="menu-icon" src="../Shop/Shop/images/menu_icons/03.png" alt="menu icon"><span class="menu-title">Shop</span></a></li>
          <li class="nav-item"><a class="nav-link" href="distributionvali.php"><img class="menu-icon" src="../Shop/Shop/images/menu_icons/04.png" alt="menu icon"><span class="menu-title">Distribution</span></a></li>
          <li class="nav-item"><a class="nav-link" href="marketingvali.php"><img class="menu-icon" src="../Shop/Shop/images/menu_icons/05.png" alt="menu icon"><span class="menu-title">Markting</span></a></li>
          <li class="nav-item"><a class="nav-link" href="pages/tables/basic-table.html"><img class="menu-icon" src="../Shop/Shop/images/menu_icons/06.png" alt="menu icon"><span class="menu-title">Table</span></a></li>
          <li class="nav-item"><a class="nav-link" href="pages/icons/font-awesome.html"><img class="menu-icon" src="../Shop/Shop/images/menu_icons/07.png" alt="menu icon"> <span class="menu-title">Icons</span></a></li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="../shop/shop/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">General Pages</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../shop/shop/pages/samples/blank-page.html">Blank Page</a></li>
                <li class="nav-item"> <a class="nav-link" href="../shop/shop/pages/samples/login.html">Login</a></li>
                <li class="nav-item"> <a class="nav-link" href="../shop/shop/pages/samples/register.html">Register</a></li>
                <li class="nav-item"> <a class="nav-link" href="../shop/shop/pages/samples/error-404.html">404</a></li>
                <li class="nav-item"> <a class="nav-link" href="../shop/shop/pages/samples/error-500.html">500</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="../shop/shop/pages/ui-features/typography.html"><img class="menu-icon" src="../shop/shop/images/menu_icons/09.png" alt="menu icon"> <span class="menu-title">Typography</span></a></li>
          <li class="nav-item purchase-button"><a class="nav-link" href="https://www.bootstrapdash.com/product/star-admin-pro/" target="_blank">Get full version</a></li>
        </ul>
      </nav>
      <!-- partial -->
       <div class="main-panel">
        <div class="content-wrapper">
          <!--  -->
          <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <?php
                    include('../Backend/php/connection.php');
                    $inventoryCount=mysqli_query($con,"SELECT COUNT(`id`) from `inventory`");
                    while($row=mysqli_fetch_array($inventoryCount))
                    {
                        $inventcount=$row[0];
                        
                    }


                    echo '<h6 class="card-title font-weight-normal text-success">'.$inventcount.'</h6>
                    
                   
               
                 <h6 class="card-subtitle mb-4 text-muted">Inventories</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar progress-bar-striped bg-success" style="width:'.$inventcount.'%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">'.$inventcount.'</div>
              </div>';
              ?> 
                 
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <?php
                    include('../Backend/php/connection.php');
                    $AdvCount=mysqli_query($con,"SELECT COUNT(`id`) from `market_add`");
                    while($row=mysqli_fetch_array($AdvCount))
                    {
                        $adcount=$row[0];
                    }
                    echo '<h6 class="card-title font-weight-normal text-info">'.$adcount.'</h6>';
                    ?>
                  <!-- <h6 class="card-title font-weight-normal text-info"></h6> -->
                  <h6 class="card-subtitle mb-4 text-muted">Total Ads</h6>
                  <div class="progress progress-slim">
                    <?php echo '<div class="progress-bar bg-info" role="progressbar" style="width: '.$adcount.'%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">'.$adcount.'</div>'; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <?php
                       $date=date('Y-m-d');
                include('../Backend/php/connection.php');
                    $Advdue=mysqli_query($con,"SELECT COUNT(`AddID`) from `market_ads` where `DueDate`>'$date'");
                    while($row=mysqli_fetch_array($Advdue))
                    {
                        $addue=$row[0];
                        
                    }
                    $avg=($addue/$adcount)*100;
                     echo '<h6 class="card-title font-weight-normal text-warning">'.$addue.'</h6>        
                    
                 
                  <h6 class="card-subtitle mb-4 text-muted">Ads</h6> 
                  <div class="progress progress-slim">
                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width:'.$avg.'%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'.$avg.'%</div>
                  </div>' ; 
                  ?>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <?php
                  include('../Backend/php/connection.php');
                  $revenue=mysqli_query($con,"SELECT sum(`price`) from `market_membership`");
                  while($row=mysqli_fetch_array($revenue))
                    {
                        $rev=$row[0]; 
                    }
                  
                  
         echo '  <h6 class="card-title font-weight-normal text-danger">₹'.$rev.'</h6>
                  <h6 class="card-subtitle mb-4 text-muted">Revenue</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width:10%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>'; ?>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 <?php
                 



?>
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



<div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Orders</h5>
                  <div class="table-responsive">
                   
                    <table class="table center-aligned-table">
                      <thead>
                        <tr>
                          <th class="border-bottom-0">Ad Name</th>
                          <th class="border-bottom-0">Inventory Name</th>
                          <th class="border-bottom-0">Product Name</th>
                          
                          <th class="border-bottom-0">Ad Status</th>
                          <th class="border-bottom-0"></th>
                          <th class="border-bottom-0"></th>
                          <th class="border-bottom-0"></th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                    include('../Backend/php/connection.php');
                   
                    $Adexpired=mysqli_query($con,"SELECT * from `market_ads` where `DueDate`='$date'");
                    while($row=mysqli_fetch_array( $Adexpired))
                    {
                        $adid=$row[3];
                        $inventid=$row[1];
                        $prodid=$row[2];


                          $inventinfo=mysqli_query($con,"SELECT * from `inventory` where `id`='$inventid'");
                          while($row=mysqli_fetch_array( $inventinfo))
                          {
                              $inventname=$row[2];
                             
                             $prodinfo=mysqli_query($con,"SELECT * from `shop_products` where `Product_ID`='$prodid'");
                             while($row=mysqli_fetch_array( $prodinfo))
                               {
                                  $prodname=$row[1];
                                  echo $prodname;
                                  $adinfo=mysqli_query($con,"SELECT * from `market_add` where `Add_ID`='$adid'");
                                  while($row=mysqli_fetch_array( $adinfo))
                                  {
                                     $adname=$row[2];

                                     

                                            echo '<tr>
                                            <td>'.$adname.'</td>
                                            <td>'.$inventname.'</td>
                                            <td>'.$prodname.'</td>
                                            
                                            <td><label class="badge badge-danger">Expired</label></td>
                                            
                                            <td><a href="php/marketDeleteAd.php?'.$adid.'" class="btn btn-outline-danger btn-sm">Delete</a></td>
                                          </tr>'  ; 
                                }  
                              }   
                          }
                     }   
                    ?>
                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>






          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  

                <form class="forms-sample" action="#" method='POST'>
                <label for="exampleFormControlSelect1">Product Display</label>
                          <select class="form-control form-control-lg" name='detailssub' id="exampleFormControlSelect1">
                          <?php 
                         include('../BackEnd/php/connection.php');
                         $productInfo = mysqli_query($con, "SELECT * FROM `location`");
                         while($row = mysqli_fetch_array($productInfo))
                         {
                          echo "<option >".$row[1]."</option>" ;
                        }?>
                        </select><br>
                        <button type="submit" name="details" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button></div>
                        <div class="card-body">
                  <h5 class="card-title mb-4">Inventory Details</h5>
                  <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12">
                  <table class="table table-bordered">
                      <th class="table-info">Company Name</th><th class="table-warning">Phone Number</th><th class="table-success">Address</th>
                        <tbody>
                  <?php
                   include('../BackEnd/php/connection.php');
                      if(isset($_POST['details']))
                      {
                        $name=$_POST['detailssub'];
                       $query=mysqli_query($con, "SELECT * FROM `inventory` WHERE `location`='$name'"); 
                       while($row = mysqli_fetch_array($query))
                       {
                         $superid=$row[0];
                         echo '<tr><td class="text-right">'.$row[2].'</td><td>'.$row[1].'</td><td>'.$row[3].'</td></tr>';
                       }
                      

                    //     $query=mysqli_query($con, "SELECT * FROM `shop_products` where  `superSubID`='$superid'");
                    //     while($row = mysqli_fetch_array($query))
                    //    {
                    //      $image=$row[1];
                    //     echo '<tr><td><div class="flag"> <img src="Images/'.$image.'.jpg" style="height: 35px;width: 35px; "></div> </td><td class="text-right">'.$row[1].'</td><td>'.$row[2].'</td></tr>';
                    //    }
                }
                    ?>

                         
                        </tbody>
                      </table>
                    </div></form>







            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../shop/shop/partials/_footer.html -->
        <!-- <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"> <a href="http://www.bootstrapdash.com/" target="_blank"></a>. </span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer> -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../shop/shop/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../shop/shop/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../shop/shop/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../shop/shop/js/off-canvas.js"></script>
  <script src="../shop/shop/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../shop/shop/js/maps.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
