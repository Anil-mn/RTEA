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






?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Rtea Shop</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="../../index.html"><img src="../images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../images/logo-mini.svg" alt="logo"/></a>
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
                  <img src="../images/faces/face4.jpg" alt="image" class="profile-pic">
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
                  <img src="../images/faces/face2.jpg" alt="image" class="profile-pic">
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
                  <img src="../images/faces/face3.jpg" alt="image" class="profile-pic">
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
              <img class="img-xs rounded-circle" src="../images/faces/face4.jpg" alt="">
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
              <div class="profile-image"> <img src="../images/faces/face4.jpg" alt="image"/> <span class="online-status online"></span> </div>
              <div class="profile-name">
                <p class="name">Richard V.Welsh</p>
                <p class="designation">Manager</p>
                <div class="badge badge-teal mx-auto mt-3">Online</div>
              </div>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="../../index.html"><img class="menu-icon" src="../images/menu_icons/01.png" alt="menu icon"><span class="menu-title">Dashboard</span></a></li>
          <li class="nav-item"><a class="nav-link" href="../../pages/widgets.html"><img class="menu-icon" src="../images/menu_icons/02.png" alt="menu icon"><span class="menu-title">Widgets</span></a></li>
          <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/buttons.html"><img class="menu-icon" src="../images/menu_icons/03.png" alt="menu icon"><span class="menu-title">Buttons</span></a></li>
          <li class="nav-item"><a class="nav-link" href="../../pages/forms/basic_elements.html"><img class="menu-icon" src="../images/menu_icons/04.png" alt="menu icon"><span class="menu-title">Form</span></a></li>
          <li class="nav-item"><a class="nav-link" href="../../pages/charts/chartjs.html"><img class="menu-icon" src="../images/menu_icons/05.png" alt="menu icon"><span class="menu-title">Charts</span></a></li>
          <li class="nav-item"><a class="nav-link" href="../../pages/tables/basic-table.html"><img class="menu-icon" src="../images/menu_icons/06.png" alt="menu icon"><span class="menu-title">Table</span></a></li>
          <li class="nav-item"><a class="nav-link" href="../../pages/icons/font-awesome.html"><img class="menu-icon" src="../images/menu_icons/07.png" alt="menu icon"> <span class="menu-title">Icons</span></a></li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="../../images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">General Pages</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html">Blank Page</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html">Login</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html">Register</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.html">404</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.html">500</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/typography.html"><img class="menu-icon" src="../images/menu_icons/09.png" alt="menu icon"> <span class="menu-title">Typography</span></a></li>
          <li class="nav-item purchase-button"><a class="nav-link" href="https://www.bootstrapdash.com/product/star-admin-pro/" target="_blank">Get full version</a></li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card" hidden>
                <div class="card-body" >
                  <h4 class="card-title">Basic Table</h4>
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Profile</th>
                        <th>VatNo.</th>
                        <th>Created</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Jacob</td>
                        <td>53275531</td>
                        <td>12 May 2017</td>
                        <td><label class="badge badge-danger">Pending</label></td>
                      </tr>
                      <tr>
                        <td>Messsy</td>
                        <td>53275532</td>
                        <td>15 May 2017</td>
                        <td><label class="badge badge-warning">In progress</label></td>
                      </tr>
                      <tr>
                        <td>John</td>
                        <td>53275533</td>
                        <td>14 May 2017</td>
                        <td><label class="badge badge-info">Fixed</label></td>
                      </tr>
                      <tr>
                        <td>Peter</td>
                        <td>53275534</td>
                        <td>16 May 2017</td>
                        <td><label class="badge badge-success">Completed</label></td>
                      </tr>
                      <tr>
                        <td>Dave</td>
                        <td>53275535</td>
                        <td>20 May 2017</td>
                        <td><label class="badge badge-warning">In progress</label></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card" hidden>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Hoverable Table</h4>
                  <p class="card-description">
                    Add class <code>.table-hover</code>
                  </p>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>User</th>
                        <th>Product</th>
                        <th>Sale</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Jacob</td>
                        <td>Photoshop</td>
                        <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i></td>
                        <td><label class="badge badge-danger">Pending</label></td>
                      </tr>
                      <tr>
                        <td>Messsy</td>
                        <td>Flash</td>
                        <td class="text-danger"> 21.06% <i class="mdi mdi-arrow-down"></i></td>
                        <td><label class="badge badge-warning">In progress</label></td>
                      </tr>
                      <tr>
                        <td>John</td>
                        <td>Premier</td>
                        <td class="text-danger"> 35.00% <i class="mdi mdi-arrow-down"></i></td>
                        <td><label class="badge badge-info">Fixed</label></td>
                      </tr>
                      <tr>
                        <td>Peter</td>
                        <td>After effects</td>
                        <td class="text-success"> 82.00% <i class="mdi mdi-arrow-up"></i></td>
                        <td><label class="badge badge-success">Completed</label></td>
                      </tr>
                      <tr>
                        <td>Dave</td>
                        <td>53275535</td>
                        <td class="text-success"> 98.05% <i class="mdi mdi-arrow-up"></i></td>
                        <td><label class="badge badge-warning">In progress</label></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
             

              <div class="card">
                <div class="card-body">
                 
                  <h4 class="card-title">Distribution Request</h4>
                  <p class="card-description">
                    <code></code>
                  </p>
                  <form action="#" method='POST'>
                 
                  <table class="table table-striped">
                      
                    <thead>
                      <tr>
                        <th>
                         Product Name
                        </th>
                        <th>
                          Quantity
                        </th>
                        <th>
                      
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                          
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
$date = date('Y-m-d');      
// $check=mysqli_query($con,"SELECT * FROM `shop_link` where `Shop_ID`='$shopid' and `NumberOf`<7");
// while($row = mysqli_fetch_array($check))
// {
//     $prodid=$row[1];

//     $res=mysqli_query($con,"SELECT * FROM `shop_products` where `Product_ID`='$prodid' ");
//  while($row = mysqli_fetch_array($res))
//  {
//      $prodname=$row[1];
     
     $res1=mysqli_query($con,"SELECT * FROM `dis_shopreq` where `ShopID`='$shopid' ");
     while($row1 = mysqli_fetch_array($res1))
     {
         $ReqID=$row1[0];
       
         $quantity=$row1[3];
         $prodname=$row1[2];
         $status=$row1[6]; 
         echo '<tr> 
         
         <td>'.$prodname.'</td><td>'.$quantity.'</td><td><button type="submit" name='.$ReqID.'>More</button></td>';
         //echo $ReqID;
                      $res2=mysqli_query($con,"SELECT * FROM `distributor_orders` where `Request_ID`='$ReqID'");
                     while($row2 = mysqli_fetch_array($res2))
                        {
                             $distributorid=$row2[1] ;
                            echo $distributorid;
                     
                           $res3=mysqli_query($con,"SELECT * FROM `distribution_info` where `Distribution_ID`='$distributorid'");
                            while($row3 = mysqli_fetch_array($res3))
                                {
                                    $distributorname=$row3[2] ;
                                    $phonenum=$row3[3];
                                    
                       }



                    }
         if($status=='Requested')
               {
                  // echo "<td>".$status."</td></tr>" ;
                  $progress=25; 
                  $progressbarcolor ='progress-bar progress-bar-striped bg-danger';
                  $textColor ='card-title font-weight-normal text-danger';
                    
               }

         if($status=='Accepted')
              {
                     
                               //    echo "<td>".$status."</td><td>".$distributorname."</td><td>".$phonenum."</td></tr>" ; 
                                   $progress=50;
                                   $progressbarcolor ='progress-bar progress-bar-striped bg-warning';
                                   $textColor ='card-title font-weight-normal text-warning';
             
                               }
             
             if($status=='Order Purchased')
             {
               // echo "<td>".$status."</td><td>".$distributorname."</td><td>".$phonenum."</td></tr>" ; 
                $progress=75;
                $progressbarcolor ='progress-bar progress-bar-striped bg-info';
                $textColor ='card-title font-weight-normal text-info';
             
             }
             elseif($status=='Delivered')
             {
               // echo '<td>'.$status.'</td><td>'.$distributorname.'</td><td>'.$phonenum.'</td></div></tr> ' ; 
                $progress=100;
                $progressbarcolor ='progress-bar progress-bar-striped bg-success';
                $textColor ='card-title font-weight-normal text-success';
             
             }
             echo '<tr></tr>';
}


               echo '</tbody></table></form>';




        //  echo "<tr><td>".$prodname."</td><td>".$quantity."</td><td>".$row1[4]."</td><td>".$status."</td><td></td></tr>";
     
         if(isset($_POST[$ReqID]))
{
echo $ReqID;
    echo '
    
              
                <div class="card-body">

                <div class="row">';

                if($status=='Requested' or $status=='Accepted' or $status=='Order Purchased' or $status=='Delivered') 
                {
       echo '      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                  <h4 class="'.$textColor.'">Requested</h4>
                  <p class="card-text">Processing</p>
                   </div> 
                   </div>  </div>';}
                   
                   if($status=='Accepted' or $status=='Order Purchased' or $status=='Delivered') 
                   {

                   echo '           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                   <div class="card">
                   <div class="card-body">
                     <h4 class="'.$textColor.'">Accepted</h4>
                     <p class="card-text">'.$distributorname.'</p>
                     <p class="card-text">'.$phonenum.'</p>
                      </div> 
                      </div>  </div>';}

                      if($status=='Order Purchased' or $status=='Delivered') 
                {
                   echo '   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                      <div class="card-body">
                        <h4 class="'.$textColor.'">Order Purchased</h4>
                        <p class="card-text">'.$distributorname.'</p>
                        <p class="card-text">'.$phonenum.'</p>

                         </div> 
                         </div> 
                          </div>';}
                          if($status=='Delivered') 
                          {

                  echo '       <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                         <div class="card">
                         <div class="card-body">
                           <h4 class="'.$textColor.'">Delivered</h4>
                           <p class="card-text">'.$distributorname.'</p>
                           <p class="card-text">'.$phonenum.'</p>
                            </div> 
                            </div>  </div>';}

               echo '  </div>
                  <div class="progress">
                    <div class="'.$progressbarcolor.'" style="width: '.$progress.'%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                  </div>
                </div>
              </div>
            </div>';
//  if($_POST[$prodname]=='')
//  {
//   $quantity=$row1[3];
  
//  }
//  else{
//   $quantity = $_POST[$prodname];
 
//   $query="UPDATE  `dis_shopreq`  set  `Quntity`='$quantity', `Date`='$date' Where `ReqID`='$ReqID'";
//   $result=mysqli_query($con,$query);
//  }
}
       
   




// $query ="SELECT * FROM `dis_shopreq` where `Product` LIKE '%$prodname%' " ;
// $res1=mysqli_query($con,$query);
// while($row = mysqli_fetch_array($res1))
// {
   
//     echo "<tr><td>".$row[2]."</td></tr>";
    
// }


?>
                      
                    
                 
                
                      

                  <!-- <h4 class="card-title">Bordered table</h4>
                  <p class="card-description">
                    Add class <code>.table-bordered</code>
                  </p>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          #
                        </th>
                        <th>
                          First name
                        </th>
                        <th>
                          Progress
                        </th>
                        <th>
                          Amount
                        </th>
                        <th>
                          Deadline
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                          Herman Beck
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          $ 77.99
                        </td>
                        <td>
                          May 15, 2015
                        </td>
                      </tr>
                      <tr>
                        <td>
                          2
                        </td>
                        <td>
                          Messsy Adam
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          $245.30
                        </td>
                        <td>
                          July 1, 2015
                        </td>
                      </tr>
                      <tr>
                        <td>
                          3
                        </td>
                        <td>
                          John Richards
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          $138.00
                        </td>
                        <td>
                          Apr 12, 2015
                        </td>
                      </tr>
                      <tr>
                        <td>
                          4
                        </td>
                        <td>
                          Peter Meggik
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          $ 77.99
                        </td>
                        <td>
                          May 15, 2015
                        </td>
                      </tr>
                      <tr>
                        <td>
                          5
                        </td>
                        <td>
                          Edward
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          $ 160.25
                        </td>
                        <td>
                          May 03, 2015
                        </td>
                      </tr>
                      <tr>
                        <td>
                          6
                        </td>
                        <td>
                          John Doe
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          $ 123.21
                        </td>
                        <td>
                          April 05, 2015
                        </td>
                      </tr>
                      <tr>
                        <td>
                          7
                        </td>
                        <td>
                          Henry Tom
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          $ 150.00
                        </td>
                        <td>
                          June 16, 2015
                        </td>
                      </tr>
                    </tbody>
                  </table> 
                </div>
              </div>-->
            </div>
            <!-- <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card"> -->
              
            <div class="col-lg-12 grid-margin stretch-card" hidden>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Inverse table</h4>
                  <p class="card-description">
                    Add class <code>.table-dark</code>
                  </p>
                  <table class="table table-dark">
                    <thead>
                      <tr>
                        <th>
                          #
                        </th>
                        <th>
                          First name
                        </th>
                        <th>
                          Amount
                        </th>
                        <th>
                          Deadline
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                          Herman Beck
                        </td>
                        <td>
                          $ 77.99
                        </td>
                        <td>
                          May 15, 2015
                        </td>
                      </tr>
                      <tr>
                        <td>
                          2
                        </td>
                        <td>
                          Messsy Adam
                        </td>
                        <td>
                          $245.30
                        </td>
                        <td>
                          July 1, 2015
                        </td>
                      </tr>
                      <tr>
                        <td>
                          3
                        </td>
                        <td>
                          John Richards
                        </td>
                        <td>
                          $138.00
                        </td>
                        <td>
                          Apr 12, 2015
                        </td>
                      </tr>
                      <tr>
                        <td>
                          4
                        </td>
                        <td>
                          Peter Meggik
                        </td>
                        <td>
                          $ 77.99
                        </td>
                        <td>
                          May 15, 2015
                        </td>
                      </tr>
                      <tr>
                        <td>
                          5
                        </td>
                        <td>
                          Edward
                        </td>
                        <td>
                          $ 160.25
                        </td>
                        <td>
                          May 03, 2015
                        </td>
                      </tr>
                      <tr>
                        <td>
                          6
                        </td>
                        <td>
                          John Doe
                        </td>
                        <td>
                          $ 123.21
                        </td>
                        <td>
                          April 05, 2015
                        </td>
                      </tr>
                      <tr>
                        <td>
                          7
                        </td>
                        <td>
                          Henry Tom
                        </td>
                        <td>
                          $ 150.00
                        </td>
                        <td>
                          June 16, 2015
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-12 stretch-card" hidden>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Table with contextual classes</h4>
                  <p class="card-description">
                    Add class <code>.table-{color}</code>
                  </p>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          #
                        </th>
                        <th>
                          First name
                        </th>
                        <th>
                          Product
                        </th>
                        <th>
                          Amount
                        </th>
                        <th>
                          Deadline
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="table-info">
                        <td>
                          1
                        </td>
                        <td>
                          Herman Beck
                        </td>
                        <td>
                          Photoshop
                        </td>
                        <td>
                          $ 77.99
                        </td>
                        <td>
                          May 15, 2015
                        </td>
                      </tr>
                      <tr class="table-warning">
                        <td>
                          2
                        </td>
                        <td>
                          Messsy Adam
                        </td>
                        <td>
                          Flash
                        </td>
                        <td>
                          $245.30
                        </td>
                        <td>
                          July 1, 2015
                        </td>
                      </tr>
                      <tr class="table-danger">
                        <td>
                          3
                        </td>
                        <td>
                          John Richards
                        </td>
                        <td>
                          Premeire
                        </td>
                        <td>
                          $138.00
                        </td>
                        <td>
                          Apr 12, 2015
                        </td>
                      </tr>
                      <tr class="table-success">
                        <td>
                          4
                        </td>
                        <td>
                          Peter Meggik
                        </td>
                        <td>
                          After effects
                        </td>
                        <td>
                          $ 77.99
                        </td>
                        <td>
                          May 15, 2015
                        </td>
                      </tr>
                      <tr class="table-primary">
                        <td>
                          5
                        </td>
                        <td>
                          Edward
                        </td>
                        <td>
                          Illustrator
                        </td>
                        <td>
                          $ 160.25
                        </td>
                        <td>
                          May 03, 2015
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <!-- <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div> -->
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
</html>
