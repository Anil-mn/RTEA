<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel = "icon" href = "../Logos/title.png" type = "image/x-icon"> 

  <title>RTEA ADMIN</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../Shop/Shop/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../Shop/Shop/node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../Shop/Shop/css/style.css">
  <!-- endinject -->
  <!-- Title icon -->

</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="../shop/shop/index.html">        <img style="height:50px; width:150px; margin-top:20px;"       src="../Logos/Name.jpg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../shop/shop/index.html">   <img style="height:50px; width:150px; margin-top:20px;"        src="../Logos/Name.jpg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="mdi mdi-image-filter"></i>info</a>
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
                  <img src="../Shop/Shop/images/faces/face4.jpg" alt="image" class="profile-pic">
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
                  <img src="../Shop/Shop/images/faces/face2.jpg" alt="image" class="profile-pic">
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
                  <img src="../Shop/Shop/images/faces/face3.jpg" alt="image" class="profile-pic">
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
              <img class="img-xs rounded-circle" src="" alt="">
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
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image"> <img src="../Logos/title.png" alt="image"/> <span class="online-status online"></span> </div>
              <div class="profile-name">
                <p class="name">Admin</p>
                <p class="designation"></p>
                <div class="badge badge-teal mx-auto mt-3">Online</div>
              </div>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="index.php"><img class="menu-icon" src="../Logos/title.png" alt="menu icon"><span class="menu-title">HOME</span></a></li>
          <li class="nav-item"><a class="nav-link" href="userValidation.php"><img class="menu-icon" src="../Shop/Shop/images/menu_icons/user.png" alt="menu icon"><span class="menu-title">Users</span></a></li>
          <li class="nav-item"><a class="nav-link" href="ShopValidation.php"><img class="menu-icon" src="../Shop/Shop/images/menu_icons/shops.png" alt="menu icon"><span class="menu-title">Shop</span></a></li>
          <li class="nav-item"><a class="nav-link" href="distributionvali.php"><img class="menu-icon" src="../Shop/Shop/images/menu_icons/dis.png" alt="menu icon"><span class="menu-title">Distribution</span></a></li>
          <li class="nav-item"><a class="nav-link" href="marketingvali.php"><img class="menu-icon" src="../Shop/Shop/images/menu_icons/ads.png" alt="menu icon"><span class="menu-title">Markting</span></a></li>
        <li class="nav-item"><a class="nav-link" href="Shop_CategorieInsertion.php"><img class="menu-icon" src="../Shop/Shop/images/menu_icons/products.png" alt="menu icon"><span class="menu-title">ADD Products</span></a></li>
             <!--<li class="nav-item"><a class="nav-link" href="pages/icons/font-awesome.html"><img class="menu-icon" src="../Shop/Shop/images/menu_icons/07.png" alt="menu icon"> <span class="menu-title">Icons</span></a></li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="../Shop/Shop/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">General Pages</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html">Blank Page</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html">Login</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html">Register</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html">404</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html">500</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="pages/ui-features/typography.html"><img class="menu-icon" src="../Shop/Shop/images/menu_icons/09.png" alt="menu icon"> <span class="menu-title">Typography</span></a></li>-->
          <li class="nav-item purchase-button"><a class="nav-link" href="" >LOG OUT</a></li> 
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row purchace-popup">
            <div class="col-12">
              <!-- <span class="d-flex alifn-items-center">
                <p>Like what you see? Check out our premium version for more.</p>
                <a href="https://github.com/BootstrapDash/StarAdmin-Free-Bootstrap-Admin-Template" target="_blank" class="btn ml-auto download-button">Download Free Version</a>
                <a href="https://www.bootstrapdash.com/product/star-admin-pro/" target="_blank" class="btn purchase-button">Upgrade To Pro</a>
                <i class="mdi mdi-close popup-dismiss"></i>
              </span> -->
            </div>
          </div>
          <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
      
                      <p class="card-text text-right">Users</p>
                      <div class="fluid-container">
                      <?php
                      include('../BackEnd/php/connection.php');
                      $query = mysqli_query($con,"SELECT COUNT(`UserId`) from `user_info`");
                      while($row=mysqli_fetch_array($query)){
                        $Users=$row[0];
                      }
                      
                       echo '<h3 class="card-title font-weight-bold text-right mb-0">'.$Users.'</h3>'
                        ?> </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Product-wise sales
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-cube text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-right">SHOPS</p>
                      <div class="fluid-container">
                      <?php
                      include('../BackEnd/php/connection.php');
                      $query = mysqli_query($con,"SELECT COUNT(`ShopID`) from `shop_info`");
                      while($row=mysqli_fetch_array($query)){
                        $shop=$row[0];
                      }
                      
                      
                       echo '<h3 class="card-title font-weight-bold text-right mb-0">'.$shop.'</h3>';
                        ?></div>
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
                      <p class="card-text text-right">Dsitributors</p>
                      <div class="fluid-container">
                        <?php
                      include('../BackEnd/php/connection.php');
                      $query = mysqli_query($con,"SELECT COUNT(`Distribution_ID`) from `distribution_info`");
                      while($row=mysqli_fetch_array($query)){
                        $distribution=$row[0];
                      }
                       echo '<h3 class="card-title font-weight-bold text-right mb-0">'.$distribution.'</h3>';
                     ?> </div>
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
                      <p class="card-text text-right">Advertisements</p>
                      <div class="fluid-container">
                      <?php
                      include('../BackEnd/php/connection.php');
                      $query = mysqli_query($con,"SELECT COUNT(`Add_ID`) from `market_add`");
                      while($row=mysqli_fetch_array($query)){
                        $ads=$row[0];
                      }
                       echo '<h3 class="card-title font-weight-bold text-right mb-0">'.$ads.'</h3>';
                      ?></div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Weekly Sales
                  </p>
                </div>
              </div>
            </div>
            <!-- <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-right">Employees</p>
                      <div class="fluid-container">
                        <h3 class="card-title font-weight-bold text-right mb-0">246</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Product-wise sales
                  </p>
                </div>
              </div>
            </div> -->
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Targets</h5>
                  <canvas id="dashoard-area-chart" height="100px"></canvas>
                </div>
              </div>
            </div>
          </div>
         
          
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">RTEA Part</h5>
                  <div class="fluid-container">
                    <div class="row ticket-card mt-3 pb-2 border-bottom">
                      <div class="col-1">
                        <img class="img-sm rounded-circle" src="../Shop/Shop/images/menu_icons/user.png" alt="profile image">
                      </div>
                      <div class="ticket-details col-9">
                        <div class="d-flex">
                          <p class="text-primary font-weight-bold mr-2 mb-0 no-wrap">User :</p>
                          <p class="font-weight-medium mr-1 mb-0">[#23047]</p>
                          <p class="font-weight-bold mb-0 ellipsis">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                        <p class="text-small text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum sequi a, nostrum.</p>
                        <div class="row text-muted d-flex">
                          <div class="col-4 d-flex">
                            <p class="mb-0 mr-2">Last responded :</p>
                            <p class="Last-responded mr-2 mb-0">3 hours ago</p>
                          </div>
                          <div class="col-4 d-flex">
                            <p class="mb-0 mr-2">Due in :</p>
                            <p class="Last-responded mr-2 mb-0">2 Days</p>
                          </div>
                        </div>
                      </div>
                      <div class="ticket-actions col-2">
                        <div class="btn-group dropdown">
                          <button type="button" class="btn btn-teal dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Manage
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><i class="fa fa-reply fa-fw"></i>Quick reply</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-history fa-fw"></i>Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row ticket-card mt-3 pb-2 border-bottom">
                      <div class="col-1">
                        <img class="img-sm rounded-circle" src="../Shop/Shop/images/menu_icons/shops.png" alt="profile image">
                      </div>
                      <div class="ticket-details col-9">
                        <div class="d-flex">
                          <p class="text-primary font-weight-bold mr-2 mb-0 no-wrap">Stella :</p>
                          <p class="font-weight-medium mr-1 mb-0">[#23135]</p>
                          <p class="font-weight-bold mb-0 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente.</p>
                        </div>
                        <p class="text-small text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi voluptates fuga quae?</p>
                        <div class="row text-muted d-flex">
                          <div class="col-4 d-flex">
                            <p class="mb-0 mr-2">Last responded :</p>
                            <p class="Last-responded mr-2 mb-0">3 hours ago</p>
                          </div>
                          <div class="col-4 d-flex">
                            <p class="mb-0 mr-2">Due in :</p>
                            <p class="Last-responded mr-2 mb-0">2 Days</p>
                          </div>
                        </div>
                      </div>
                      <div class="ticket-actions col-2">
                        <div class="btn-group dropdown">
                          <button type="button" class="btn btn-teal dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Manage
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><i class="fa fa-reply fa-fw"></i>Quick reply</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-history fa-fw"></i>Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row ticket-card mt-3 pb-2 border-bottom">
                      <div class="col-1">
                        <img class="img-sm rounded-circle" src="../Shop/Shop/images/menu_icons/dis.png" alt="profile image">
                      </div>
                      <div class="ticket-details col-9">
                        <div class="d-flex">
                          <p class="text-primary font-weight-bold mr-2 mb-0 no-wrap">John Doe :</p>
                          <p class="font-weight-medium mr-1 mb-0">[#23246]</p>
                          <p class="font-weight-bold mb-0 ellipsis">Lorem ipsum dolor sit amet.</p>
                        </div>
                        <p class="text-small text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="row text-muted d-flex">
                          <div class="col-4 d-flex">
                            <p class="mb-0 mr-2">Last responded :</p>
                            <p class="Last-responded mr-2 mb-0">3 hours ago</p>
                          </div>
                          <div class="col-4 d-flex">
                            <p class="mb-0 mr-2">Due in :</p>
                            <p class="Last-responded mr-2 mb-0">2 Days</p>
                          </div>
                        </div>
                      </div>
                      <div class="ticket-actions col-2">
                        <div class="btn-group dropdown">
                          <button type="button" class="btn btn-teal dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Manage
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><i class="fa fa-reply fa-fw"></i>Quick reply</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-history fa-fw"></i>Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row ticket-card mt-3 pb-2 border-bottom">
                      <div class="col-1">
                        <img class="img-sm rounded-circle" src="../Shop/Shop/images/menu_icons/ads.png" alt="profile image">
                      </div>
                      <div class="ticket-details col-9">
                        <div class="d-flex">
                          <p class="text-primary font-weight-bold mr-2 mb-0 no-wrap">Marques Brownlee :</p>
                          <p class="font-weight-medium mr-1 mb-0">[#23047]</p>
                          <p class="font-weight-bold mb-0 ellipsis">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                        <p class="text-small text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum sequi a, nostrum.</p>
                        <div class="row text-muted d-flex">
                          <div class="col-4 d-flex">
                            <p class="mb-0 mr-2">Last responded :</p>
                            <p class="Last-responded mr-2 mb-0">3 hours ago</p>
                          </div>
                          <div class="col-4 d-flex">
                            <p class="mb-0 mr-2">Due in :</p>
                            <p class="Last-responded mr-2 mb-0">2 Days</p>
                          </div>
                        </div>
                      </div>
                      <div class="ticket-actions col-2">
                        <div class="btn-group dropdown">
                          <button type="button" class="btn btn-teal dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Manage
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><i class="fa fa-reply fa-fw"></i>Quick reply</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-history fa-fw"></i>Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row ticket-card mt-3 pb-2" hidden>
                      <div class="col-1">
                        <img class="img-sm rounded-circle" src="../Shop/Shop/images/faces/face5.jpg" alt="profile image">
                      </div>
                      <div class="ticket-details col-9">
                        <div class="d-flex">
                          <p class="text-primary font-weight-bold mr-2 mb-0 no-wrap">Marina John :</p>
                          <p class="font-weight-medium mr-1 mb-0">[#23034]</p>
                          <p class="font-weight-bold mb-0 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi amet totam, dignissimos fugiat voluptates, ab magni, necessitatibus excepturi inventore, mollitia ipsa quaerat aliquam.</p>
                        </div>
                        <p class="text-small text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae animi omnis, a?</p>
                        <div class="row text-muted d-flex">
                          <div class="col-4 d-flex">
                            <p class="mb-0 mr-2">Last responded :</p>
                            <p class="Last-responded mr-2 mb-0">3 hours ago</p>
                          </div>
                          <div class="col-4 d-flex">
                            <p class="mb-0 mr-2">Due in :</p>
                            <p class="Last-responded mr-2 mb-0">2 Days</p>
                          </div>
                        </div>
                      </div>
                      <div class="ticket-actions col-2">
                        <div class="btn-group dropdown">
                          <button type="button" class="btn btn-teal dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Manage
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><i class="fa fa-reply fa-fw"></i>Quick reply</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-history fa-fw"></i>Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
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
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"> <a href="" target=""></a>..</span>
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
  <script src="../Shop/Shop/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../Shop/Shop/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../Shop/Shop/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="../Shop/Shop/node_modules/chart.js/dist/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../Shop/Shop/js/off-canvas.js"></script>
  <script src="../Shop/Shop/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../Shop/Shop/js/dashboard.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="../Shop/Shop/js/maps.js"></script>
  <!-- End custom js for this page-->
</body>

</html>