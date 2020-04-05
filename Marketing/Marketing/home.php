<?php
SESSION_START();
if(!isset($_SESSION['id'])){
  echo $_SESSION['id'];
	header('location:index.html');
 }
 else{
   $id=$_SESSION['id'];
 
}

?>
<!DOCTYPE html>
<html lang="en">
<!-- Title icon -->
<link rel = "icon" href = "../../Logos/title.png" 
        type = "image/x-icon"> 
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RTEA MARKETING</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../Distribution/Distribution/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../Distribution/Distribution/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../Distribution/Distribution/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../Distribution/Distribution/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../Distribution/Distribution/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../Distribution/Distribution/css/style.css "> <!-- End layout styles -->
    <link rel="shortcut icon" href="../../images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="../../index.html">
            <img src="../../Logos/Untitled-1.jpg" alt="logo" class="logo-dark" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../Distribution/Distribution/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome to RTEA Marketing</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            <!-- <form class="search-form d-none d-md-block" action="#" method="POST" >
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form> -->
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
                    <img src="../../Distribution/Distribution/images/faces/face10.jpg" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../Distribution/Distribution/images/faces/face12.jpg" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../Distribution/Distribution/images/faces/face1.jpg" alt="image" class="img-sm profile-pic"> </div>
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
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ml-2" src="../../Distribution/Distribution/images/faces/face8.jpg" alt="Profile image"> <span class="font-weight-normal"> Henry Klein </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="../../Distribution/Distribution/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3">Allen Moreno</p>
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Activity</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i> FAQ</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul> -->
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
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="../../Logos/title.png" alt="profile image">
                  <!-- <div class="dot-indicator bg-success"></div> -->
                </div>
                <div class="text-wrapper">
                <?php
               include('../../BackEnd/Php/connection.php');
               $proname = mysqli_query($con,"SELECT * FROM `inventory` where `id`='$id'");
               {
                 while($row = mysqli_fetch_array($proname)){
                   $companyname = $row[2];
                 }
               }
               echo '<p class="profile-name">'.$companyname.'</p>';
                ?>
                  <!-- <p class="profile-name">Allen Moreno</p> -->
                  <p class="designation">Inventory</p>
                </div>
                <!-- <div class="icon-container">
                  <i class="icon-bubbles"></i>
                  <div class="dot-indicator bg-danger"></div>
                </div> -->
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Home</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.php">
                <span class="menu-title">HOME</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link" >MORE DETAILS</span></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="advertisment_details.php" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">MY ADS</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../Distribution/Distribution/pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../Distribution/Distribution/pages/ui-features/typography.html">Typography</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="payADD.php">
                <span class="menu-title">PAY ADDS</span>
                <i class="icon-globe menu-icon"></i>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="../../Distribution/Distribution/pages/forms/basic_elements.html">
                <span class="menu-title">UPDATE</span>
                <i class="icon-book-open menu-icon"></i>
              </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="sales.php">
                <span class="menu-title">SALES</span>
                <i class="icon-chart menu-icon"></i>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="../../Distribution/Distribution/pages/tables/basic-table.html">
                <span class="menu-title">Tables</span>
                <i class="icon-grid menu-icon"></i>
              </a>
            </li> -->
            <!-- <li class="nav-item nav-category"><span class="nav-link">Sample Pages</span></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">General Pages</span>
                <i class="icon-doc menu-icon"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../Distribution/Distribution/pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../Distribution/Distribution/pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../Distribution/Distribution/pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../Distribution/Distribution/pages/samples/error-500.html"> 500 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../Distribution/Distribution/pages/samples/blank-page.html"> Blank Page </a></li>
                </ul>
              </div>
            </li> -->
            <li class="nav-item pro-upgrade">
              <span class="nav-link">
                <a class="btn btn-block px-0 btn-rounded btn-upgrade" href="logout.php"> <i class="icon-badge mx-2"></i> LogOut</a>
              </span>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           <div class="page-header">
              <h3 class="page-title" style="font-color: #1bdbe0;">ENTER AD INFORMATION</h3>
            </div>
            <div class="row" >
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">AD REGISTER</h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" action="ad_register.php" method="POST">
                      <!-- <div class="form-group row">
                         <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <select class="form-control">
                            <option>SHOP lOCATION</option>
                            <option>Ottapalam</option>
                            <option> Shornur</option>
                          </select>
                        </div>
                      </div> -->
                      <div class="form-group row">
                        <!-- <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label> -->
                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="adName" name="adName" placeholder=" AD NAME">
                        </div> 
                      </div>
                      <div class="form-group row">
                        <!-- <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label> -->
                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="cat_Ad" name="cat_Ad" placeholder="CATEGORY OF AD">
                        </div>
                      </div>
                      <div class="form-group row">
                        <!-- <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label> -->
                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="prodName" name="prodName" placeholder=" PRODUCT NAME">
                        </div> 
                      </div>
                      <div class="form-group row">
                        <!-- <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Re Password</label> -->
                        <div class="col-sm-12">
                          <textarea class="form-control"  placeholder="DESCRIPTION" id="description" name="description"></textarea>
                        </div>
                      </div>
                      
                      <!-- <button type="submit" class="btn btn-primary mr-2">Request</button> -->
                      <button type="submit" name='request' class="btn btn-primary mr-2">Request</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
              <?php
              
             
              ?>
                <div class="card" >
                  <div class="card-body">
                    <h4 class="card-title">AD DETAILS </h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" action="ad_details.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group row">
                        <!-- <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label> -->
                        <div class="col-sm-12">
                          <input type="date" class="form-control" id="date" name="date" placeholder="date">
                        </div>
                      </div>
                      <div class="form-group row">
                        <!-- <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label> -->
                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="price" name="price" placeholder="PRICE">
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="file" name="fileToUpload" id="image" >
                        <!-- <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div> -->
                      </div>
                      <div class="form-group row">
                        <!-- <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Re Password</label> -->
                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="discount" name="discount" placeholder="Discount">
                        </div>
                      </div>
                      
                      <button type="submit" class="btn btn-primary mr-2">Request</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
             
              <?php
              
              // $addid =$_session['add'];
              // if(!isset($addid)){
              //   echo "<div class='card'>";
              // }
              // else {
              //   echo "<div class='card'>";
              // }
              ?>
               <div class="card" > 
                  <div class="card-body">
                    <h4 class="card-title">Genarated ADD </h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" action="ad_membership.php" method="POST">
                      <div class="form-group row">
                        <!-- <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label> -->
                        <div class="col-sm-12">
                          <select class="form-control" name="membership" id="membership" hidden>
                            <option>Type of membership</option>
                            <option>Silver</option>
                            <option>Gold</option>
                            <option>platinum</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <!-- <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label> -->
                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="shopname" name="shopname" placeholder=" SHOP NAME" hidden>
                        </div>
                      </div>
                      <div class="form-group row">
                        <!-- <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label> -->
                        <div class="col-sm-12" hidden>
                          <select class="form-control" id="slot" name="slot">
                            <option>SLOTS</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <!-- <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label> -->
                        <div class="col-sm-12">
                          <select class="form-control" id="pricead" name="pricead" hidden>
                            <option>PRICE OF AD</option>
                            <option>50K</option>
                            <option>100K</option>
                            <option>150K</option>
                          </select>
                        </div>
                      </div> 
                      <button type="submit" class="btn btn-primary mr-2">Genarate ADD</button>
                      <button class="btn btn-light">Cancel</button>
                   </form>
                  </div>
                </div>
              </div>
              <div class="col-12 grid-margin stretch-card" >
                <div class="card">
                  <div class="card-body">
                  
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <form action='inveProDetails.php' method = 'POST'>
                    <h4 class="card-title">Enter your Product Details</h4>
                    <p class="card-description"> Add classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>. </p>
                    <div class="form-group">
                      <label>Prduct Name</label>
                      <input type="text" name='product' class="form-control form-control-lg" placeholder="Username" aria-label="Product Name">
                    </div>
                    <div class="input-group-append">
                          <button class="btn btn-sm btn-primary" type="submit">ADD</button>
                    
                    </div>
                  </div></form>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card" hidden>
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Select size</h4>
                    <p class="card-description"> Add classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>. </p>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Large select</label>
                      <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect2">Default select</label>
                      <select class="form-control" id="exampleFormControlSelect2">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect3">Small select</label>
                      <select class="form-control form-control-sm" id="exampleFormControlSelect3">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card" hidden>
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic input groups</h4>
                    <p class="card-description"> Basic bootstrap input groups </p>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-primary text-white">$</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                          <span class="input-group-text">.00</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">$</span>
                        </div>
                        <div class="input-group-prepend">
                          <span class="input-group-text">0.00</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-sm btn-primary" type="button">Search</button>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                          </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Find in facebook" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-sm btn-facebook" type="button">
                            <i class="icon-social-facebook"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card" hidden>
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Checkbox Controls</h4>
                    <p class="card-description">Checkbox and radio controls (default appearance is in primary color)</p>
                    <form>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input"> Default </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked> Checked </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" disabled> Disabled </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" disabled checked> Disabled checked </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value=""> Default </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked> Selected </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optionsRadios2" id="optionsRadios3" value="option3" disabled> Disabled </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optionsRadio2" id="optionsRadios4" value="option4" disabled checked> Selected and disabled </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="card-body" hidden>
                    <p class="card-description">Add class <code>.form-check-{color}</code> for checkbox and radio controls in theme colors</p>
                    <form>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked> Primary </label>
                            </div>
                            <div class="form-check form-check-success">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked> Success </label>
                            </div>
                            <div class="form-check form-check-info">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked> Info </label>
                            </div>
                            <div class="form-check form-check-danger">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked> Danger </label>
                            </div>
                            <div class="form-check form-check-warning">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked> Warning </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="ExampleRadio1" id="ExampleRadio1" checked> Primary </label>
                            </div>
                            <div class="form-check form-check-success">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="ExampleRadio2" id="ExampleRadio2" checked> Success </label>
                            </div>
                            <div class="form-check form-check-info">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="ExampleRadio3" id="ExampleRadio3" checked> Info </label>
                            </div>
                            <div class="form-check form-check-danger">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="ExampleRadio4" id="ExampleRadio4" checked> Danger </label>
                            </div>
                            <div class="form-check form-check-warning">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="ExampleRadio5" id="ExampleRadio5" checked> Warning </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-12 grid-margin stretch-card" hidden>
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Inline forms</h4>
                    <p class="card-description"> Use the <code>.form-inline</code> class to display a series of labels, form controls, and buttons on a single horizontal row </p>
                    <form class="form-inline">
                      <label class="sr-only" for="inlineFormInputName2">Name</label>
                      <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
                      <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                      <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                      </div>
                      <div class="form-check mx-sm-2">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" checked> Remember me </label>
                      </div>
                      <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-12 grid-margin" hidden>
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Horizontal Two column</h4>
                    <form class="form-sample">
                      <p class="card-description"> Personal info </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">First Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Last Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Gender</label>
                            <div class="col-sm-9">
                              <select class="form-control">
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date of Birth</label>
                            <div class="col-sm-9">
                              <input class="form-control" placeholder="dd/mm/yyyy" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category</label>
                            <div class="col-sm-9">
                              <select class="form-control">
                                <option>Category1</option>
                                <option>Category2</option>
                                <option>Category3</option>
                                <option>Category4</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Membership</label>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> Free </label>
                              </div>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> Professional </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="card-description"> Address </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address 1</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">State</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address 2</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Postcode</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">City</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Country</label>
                            <div class="col-sm-9">
                              <select class="form-control">
                                <option>America</option>
                                <option>Italy</option>
                                <option>Russia</option>
                                <option>Britain</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card" hidden>
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Select 2</h4>
                    <div class="form-group">
                      <label>Single select box using select 2</label>
                      <select class="js-example-basic-single" style="width:100%">
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                        <option value="AM">America</option>
                        <option value="CA">Canada</option>
                        <option value="RU">Russia</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Multiple select using select 2</label>
                      <select class="js-example-basic-multiple" multiple="multiple" style="width:100%">
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                        <option value="AM">America</option>
                        <option value="CA">Canada</option>
                        <option value="RU">Russia</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card" hidden>
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Typeahead</h4>
                    <p class="card-description"> A simple suggestion engine </p>
                    <div class="form-group row">
                      <div class="col">
                        <label>Basic</label>
                        <div id="the-basics">
                          <input class="typeahead form-control" type="text" placeholder="States of USA">
                        </div>
                      </div>
                      <div class="col">
                        <label>Bloodhound</label>
                        <div id="bloodhound">
                          <input class="typeahead form-control" type="text" placeholder="States of USA">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="icon-heart text-danger"></i></span>
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
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../vendors/select2/select2.min.js"></script>
    <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../js/typeahead.js"></script>
    <script src="../../js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>