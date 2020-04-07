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
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Main Category</h4>
                      <p class="card-description">
                        
                      </p>
                      <form class="forms-sample" action="php/CategoryInsertion.php" method='POST' enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Catagory Name</label>
                          <input type="text" class="form-control" name="CategoryName" id="exampleInputEmail1" placeholder="Catagorie Name">
                          <br><br>
                        <input type="file" name="fileToUploadCata"> 
                        </div>
                        <!-- <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div> -->
                        <button type="submit" name="categorySubmit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light" type="reset">Cancel</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Sub Category</h4>
                      <p class="card-description">
                       
                      </p>
                      <form class="forms-sample" action="php/CategoryInsertion.php" method='POST' enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="exampleFormControlSelect1">Catagory Name</label>
                          <select class="form-control form-control-lg" name='subcata' id="exampleFormControlSelect1">
                          <?php 
                          include('../BackEnd/php/connection.php');
                          $query = mysqli_query($con, "SELECT * FROM `shop_categories`");
                    while($row = mysqli_fetch_array($query))
                       { 
                          echo "<option >".$row['Categories']."</option>" ;
                          
                        }
                        
                        ?>
                    </select>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Sub category</label>
                          <div class="col-sm-9">
                            <input type="text" name="subcat" class="form-control" id="exampleInputPassword2" required placeholder="">
                          </div>
                          <br><br>
                    <input type="file" name="fileToUploadSub"> 
                        </div>
                        <button type="submit" class="btn btn-success mr-2" name="subcategory">Submit</button>
                        <button class="btn btn-light" type="reset">Cancel</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">SuperSub Category</h4>
                  <p class="card-description">
                   
                  </p>
                  <form class="forms-sample" action="php/CategoryInsertion.php" method='POST' enctype="multipart/form-data">
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">SubCategory Name</label>
                    <select class="form-control form-control-lg" name='superSub' id="exampleFormControlSelect1">
                    <?php 
                    include('../BackEnd/php/connection.php');
                    $query = mysqli_query($con, "SELECT * FROM `shop_subcategories`");
                    while($row = mysqli_fetch_array($query))
                       { 
                          echo "<option >".$row['Name']."</option>" ;
                          
                        }
                       
                         
                        ?>
                    </select>
                    </div>
                    
                    <div class="form-group">
                       <label for="exampleInputEmail3">Super Category</label>
                      <input type="text" name="supercat" class="form-control" id="exampleInputEmail3" placeholder=""> 
                      <input type="file" name="fileToUploadSuper"> 
                    </div>
                    
                    <button type="submit" name="superSubbutton" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light" type="reset">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Products</h4>
                      <p class="card-description">
                        
                      </p>
                      <form class="forms-sample" action="php/CategoryInsertion.php" method='POST' enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="exampleFormControlSelect1">Catagory Name</label>
                          <select class="form-control form-control-lg" name='subcata' id="exampleFormControlSelect1">
                          <?php 
                         include('../BackEnd/php/connection.php');
                         $productInfo = mysqli_query($con, "SELECT * FROM `shop_supersub`");
                         while($row = mysqli_fetch_array($productInfo))
                         {
                          echo "<option >".$row['Name']."</option>" ;
                        }?>
                        
                      
                    </select>
                    <div class="form-group">
                       <label for="exampleInputEmail3">Product Name</label>
                      <input type="text" name="Productname" class="form-control" id="exampleInputEmail3" placeholder=""> 
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail3">Description</label>
                      <input type="text" name="Description" class="form-control" id="exampleInputEmail3" placeholder=""> 
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail3">Price</label>
                      <input type="number" name="Price" class="form-control" id="exampleInputEmail3" placeholder=""> 
                    </div><br>
                    <input type="file" name="fileToUpload"> 

                  <button type="submit" name="supercategory" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light" type="reset">Cancel</button>
                        </div>
</form></form>
                        
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
                         $productInfo = mysqli_query($con, "SELECT * FROM `shop_supersub`");
                         while($row = mysqli_fetch_array($productInfo))
                         {
                          echo "<option >".$row['Name']."</option>" ;
                        }?>
                        </select><br>
                        <button type="submit" name="details" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button></div>
                        <div class="card-body">
                  <h5 class="card-title mb-4">Global Sales by Top Locations</h5>
                  <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12" style="height:200px; width:490px; overflow:hidden; overflow-y:scroll;">
                      <table class="table table-striped" >
                      <th>...</th><th>Name</th><th>Price</th>
                        <tbody>
                  <?php
                   include('../BackEnd/php/connection.php');
                      if(isset($_POST['details']))
                      {
                        $name=$_POST['detailssub'];
                       $query=mysqli_query($con, "SELECT * FROM `shop_supersub` WHERE `Name`='$name'"); 
                       while($row = mysqli_fetch_array($query))
                       {
                         $superid=$row[0];
                       }
                      

                        $query=mysqli_query($con, "SELECT * FROM `shop_products` where  `superSubID`='$superid'");
                        while($row = mysqli_fetch_array($query))
                       {
                         $image=$row[0];
                         $image =$image.'.jpg';
                         //echo $image;
                        echo '<tr><td><div class="flag"> <img src="../Images/ProductImages/'.$image.'" style="height: 35px;width: 35px; " alt="no"></div> </td><td class="text-right">'.$row[1].'</td><td>'.$row[2].'</td></tr>';
                       }}
                    ?> 
                        </tbody>
                      </table>
                    </div></form>
                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-xs-12">
                      <div class="rounded" id="map" style="min-height:300px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
                <div class="col-12 grid-margin stretch-card">
                  <div class="card" hidden>
                    <div class="card-body">
                      <h4 class="card-title">Colored input groups</h4>
                      <p class="card-description">
                        Input groups with colors
                      </p>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend bg-info">
                            <span class="input-group-text bg-transparent"><i class="mdi mdi-shield-outline text-white"></i></span>
                          </div>
                          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="colored-addon1">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend bg-primary border-primary">
                            <span class="input-group-text bg-transparent"><i class="mdi mdi mdi-menu text-white"></i></span>
                          </div>
                          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="colored-addon2">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="colored-addon3">
                          <div class="input-group-append bg-primary border-primary">
                            <span class="input-group-text bg-transparent"><i class="mdi mdi-menu text-white"></i></span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend bg-primary border-primary">
                            <span class="input-group-text bg-transparent text-white">$</span>
                          </div>
                          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                          <div class="input-group-append bg-primary border-primary">
                            <span class="input-group-text bg-transparent text-white">.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card" hidden>
                <div class="card-body">
                  <h4 class="card-title">Input size</h4>
                  <p class="card-description">
                    This is the default bootstrap form layout
                  </p>
                  <div class="form-group">
                    <label>Large input</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username">
                  </div>
                  <div class="form-group">
                    <label>Default input</label>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                  </div>
                  <div class="form-group">
                    <label>Small input</label>
                    <input type="text" class="form-control form-control-sm" placeholder="Username" aria-label="Username">
                  </div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Selectize</h4>
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
           
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card" hidden>
                <div class="card-body">
                  <h4 class="card-title">Checkbox Flat Controls</h4>
                  <p class="card-description">Checkbox and radio controls with flat design</p>
                  <form class="forms-sample">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                              Default
                            </label>
                          </div>
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" checked>
                              Checked
                            </label>
                          </div>
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" disabled>
                              Disabled
                            </label>
                          </div>
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" disabled checked>
                              Disabled checked
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="form-radio form-radio-flat">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="flatRadios1" id="flatRadios1" value="" checked>
                              Option one
                            </label>
                          </div>
                          <div class="form-radio form-radio-flat">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="flatRadios2" id="flatRadios2" value="option2">
                              Option two
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-radio form-radio-flat disabled">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="flatRadios3" id="flatRadios3" value="option3" disabled>
                              Option three is disabled
                            </label>
                          </div>
                          <div class="form-radio form-radio-flat disabled">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="flatRadios4" id="flatRadios4" value="option4" disabled checked>
                              Option four is selected and disabled
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-12 grid-margin">
              <div class="card" hidden>
                <div class="card-body">
                  <h4 class="card-title">Horizontal Two column</h4>
                  <form class="form-sample">
                    <p class="card-description">
                      Personal info
                    </p>
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
                            <input class="form-control" placeholder="dd/mm/yyyy"/>
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
                            <div class="form-radio">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>
                                Free
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-radio">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2">
                                Professional
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="card-description">
                      Address
                    </p>
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
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
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
  <!-- plugins:js -->
  <script src="../Shop/Shopnode_modules/jquery/dist/jquery.min.js"></script>
  <script src="../Shop/Shopnode_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../Shop/Shopnode_modules/bootstrap/dist/js/bootstrap.min.js"></script>
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

</html>
ab-t-r