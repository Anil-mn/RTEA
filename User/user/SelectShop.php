<?php
SESSION_START();
 if(!isset($_SESSION['PhoneNumber'])){
	header('location:../index.html');
 }
 else{
   $PhoneNumber=$_SESSION['PhoneNumber'];
   //echo $PhoneNumber ;
 }
 include('../../BackEnd/php/connection.php');
 // Taking User Details Using Phone Number Taken From Session
 $Userinfo = mysqli_query($con,"SELECT * FROM `user_info` where `PhoneNumber` = '$PhoneNumber'");
while ($row = mysqli_fetch_array($Userinfo)){
    $UserId = $row[0];
}

 // Session started
?>



<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RTEA</title>

    <!-- Title icon -->
    <link rel = "icon" href = "../../Logos/title.png" 
        type = "image/x-icon"> 
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <script src='test.js'></script>
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
            <?php
                    
                    $userInfo = mysqli_query($con, "SELECT * FROM `user_info` where `PhoneNumber`= '$PhoneNumber'");
                     while($row = mysqli_fetch_array($userInfo))
                     {
                       $userLocation  = $row['Location'];
                     }
                 ?>
                <div class="ht-left">
                     <div class="mail-service">
                          <?php  
                           $query = mysqli_query($con, "SELECT * FROM `location` where `LocationID`='$userLocation'");
                           while($row = mysqli_fetch_array($query))
                          { 
                            //   echo ' <i class=" fa fa-envelope"></i>'.$row['Name'];
                              echo ' <i class=" fa fa-envelope"></i>'.$row['Name'];
                              $name =$row['Name'];

                            }
                              ?>
                    </div> 
                   
                    <div class="phone-service">
                        <i class=" fa fa-phone" hidden id=''></i>
                    </div>
                </div>
                 <form action='' method ='POST' >
                <div class="ht-right">
                    <a href="Process/Logout.php" name="changeloc" class="login-panel"><i class="fa fa-user"></i>Logout</a>
                  <div class="lan-selector">
                   <select class="language_drop"  name="countries" id="countries" style="width:300px;">
                          </select>
                    </div>
                    <?php
                    
                    $query = mysqli_query($con, "SELECT * FROM `location` where `Name`='$name'");
                
                    while($row = mysqli_fetch_array($query))
                   {
                        $loc=$row['Name'];
                        $_SESSION['loc']=$loc;           
                           }
              ?>
                     <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>  
        
        <form action='' method ='POST' >
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                   
                        <div class="logo">
                            <a href="./index.html">
                            <?php 
                            
                            //echo '<img src="../images/'.$PhoneNumber.'.jpg" alt="not found">';
                            ?>
                              <img src="../../Logos/title.png" alt="not found"> 
                            </a>
                        </div>
                    </div>
                  
        <!-- </form>   -->
                    <div class="col-lg-7 col-md-7">
                           
                        <div class="advanced-search">
                            
                            <select id="loc" name='loc' class="category-btn" aria-placeholder="select loc">
                            <?php
                             
                            if(isset($_POST['changeloc']))
                            {
                                $loc=$_POST['countries'];
                                // $location=$_POST['location'];
                               //shops displaying after clicking change location
                           
                           
                             $query = mysqli_query($con, "SELECT * FROM `shop_info` where `Location` = '$loc'  ");
                            

                        while($row = mysqli_fetch_array($query))
                       { 
                        // echo "<option>".$row['ShopName']."</option>" ;
                        $ShopId =$row[0];
                        //echo "<option>".$loc."</option>" ;
                        }
                    }
                    //displaying default location
                    else{
                        $query = mysqli_query($con, "SELECT * FROM `shop_info` where `Location` = '$loc' ");
                            

                        while($row = mysqli_fetch_array($query))
                       { 
                        // echo "<option>".$row['ShopName']."</option>" ;
                        //$ShopId =$row[0];
                        }  
                    }
                    $query = mysqli_query($con, "SELECT * FROM `location`");
                 
                    while($row = mysqli_fetch_array($query))
                   { 
                      echo "<option>".$row['Name']."</option>" ;
                     
                   }
                  ?>
                        </select>  
                            <div class="input-group">
                            <button type="submit" name="shop"><i class="ti-search"></i></button>
                            </div>
                         </form>
                        </div>
                    </div>
                    <?php
                            if(isset($_POST["shop"]))
                            {
                                $loc = $_POST["loc"];
                                $_SESSION['loc']=$loc;
                                //echo $_SESSION['loc'];
                             }

                            ?>
                    <div class="col-lg-3 text-right col-md-3" hidden>
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>3</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img src="img/select-product-1.jpg" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$60.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="si-pic"><img src="img/select-product-2.jpg" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$60.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>$120.00</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">$150.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <!-- <span>Select Shop</span>
                        <ul class="depart-hover"> -->
                        <?php
                              echo '<span>Select Shop from '.$loc.'</span>
                              <ul class="depart-hover">';
                               $query = mysqli_query($con, "SELECT * FROM `shop_info` where `Location` = '$loc' ");
                                  

                               while($row = mysqli_fetch_array($query))
                              { 
                               echo "<li><a href='MainCategory.php?".$row[0]."'>".$row['ShopName']."</a></li>" ;
                               //$ShopId =$row[0];
                               }  

                        ?> 
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="#">Home</a></li>
                        
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">ToBuyList</a></li>
                        <li><a href="#">Collection</a>
                           
                        </li>
                        <!-- <li><a href="./blog.html">Blog</a></li>
                        <li><a href="./contact.html">Contact</a></li> -->
                        <li><a href="#">Pages</a>
                           
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div> 
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
  <section class="hero-section">
        <div class="hero-items owl-carousel">
            <?php
            //Display All products in shops
            $Ads = mysqli_query($con,"SELECT * FROM `market_userads` Where  `User_id` = '$UserId' limit 2");
            while($row1=mysqli_fetch_array($Ads)){
                $addID=$row1[2];
                $Adsinfo = mysqli_query($con,"SELECT * FROM `market_add` Where  `Add_ID` = '$addID'");
                  while($row=mysqli_fetch_array($Adsinfo)){
                  $addName=$row[2];
                  $addProduct=$row[4];
                  $addDis=$row[5];
                  echo 
                  '<div class="single-hero-items set-bg" data-setbg="../../Images/AdsImages/'.$addID.'.jpg">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-5">
                              <span>'.$addName.'</span>
                              <h1>'.$addProduct.'</h1>
                              <p>'.$addDis.' </p>
                              <a href="#" class="primary-btn">Shop Now</a>
                          </div>
                      </div>
                      <div class="off-card">
                          <h2>Sale <span>50%</span></h2>
                      </div>
                  </div>
               </div>
                  ';
                }
            }

            ?>
            
        </div>
    </section> 
    <!-- Hero Section End-->

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4"><form action="demo.php">
                    <div class="single-banner">
                        <img src="img/banner-1.jpg" alt="">
                        <div class="inner-text">
                            <button>
                            <h4>Men’s</h4></button>
                        </div></form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/banner-2.jpg" alt="">
                        <div class="inner-text">
                            <h4>Women’s</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/banner-3.jpg" alt="">
                        <div class="inner-text">
                            <h4>Kid’s</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
            <?php
            $addID=0;
             //Display ADD from ID 3 and greater ....
                include('../../BackEnd/php/connection.php');
            $Ads = mysqli_query($con,"SELECT * FROM `market_userads` Where  `User_id` = '$UserId' and `SlotNumbers` = 3");
            while($row1=mysqli_fetch_array($Ads)){
                $addID=$row1[2];
                $Adsinfo = mysqli_query($con,"SELECT * FROM `market_add` Where  `Add_ID` = '$addID'");
                  while($row=mysqli_fetch_array($Adsinfo)){
                  $addName=$row[2];
                  $addProduct=$row[4];
                  $addDis=$row[5];
                  }
                }
                 //Display ADD from ID 3 and greater ....
                  echo '<div class="product-large set-bg" data-setbg=""../../Images/AdsImages/'.$addID.'.jpg">
                        <h2>Women’s</h2>
                        <a href="#">Discover More</a>
                        </div>';
                  ?>
                <!-- <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="img/products/women-large.jpg">
                        <h2>Women’s</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div> -->
                 <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Food</li>
                            <li>Electronics</li>
                            <li>Household items</li>
                            <li>Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/women-1.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Coat</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class="product-price">
                                    $14.00
                                    <span>$35.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/women-2.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Shoes</div>
                                <a href="#">
                                    <h5>Guangzhou sweater</h5>
                                </a>
                                <div class="product-price">
                                    $13.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/women-3.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towel</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/women-4.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towel</div>
                                <a href="#">
                                    <h5>Converse Shoes</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- Women Banner Section End -->

    
    <!-- Deal Of The Week Section End -->

    <!-- Man Banner Section Begin -->
    <section class="man-banner spad"  hidden>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/man-1.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Coat</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class="product-price">
                                    $14.00
                                    <span>$35.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/man-2.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Shoes</div>
                                <a href="#">
                                    <h5>Guangzhou sweater</h5>
                                </a>
                                <div class="product-price">
                                    $13.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/man-3.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towel</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/man-4.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towel</div>
                                <a href="#">
                                    <h5>Converse Shoes</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                </div>
            </div>
        </div>
    </section>
    <!-- Man Banner Section End -->

    <!-- Instagram Section Begin -->
   
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog spad" hidden>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="img/latest-1.jpg" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    May 4,2019
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="#">
                                <h4>The Best Street Style From Fashion Week</h4>
                            </a>
                            <p>Love vintage shopping, I think it's really fun. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="img/ban1.jpg" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    May 4,2019
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="#">
                                <h4> Ultimate Guide To fill Shopping cart</h4>
                            </a>
                            <p>Whoever said money can't buy happiness simply didn't know where to go shopping.

                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="img/latest-3.jpg" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    May 4,2019
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="#">
                                <h4>How To Brighten Your Wardrobe With A Dash Of Lime</h4>
                            </a>
                            <p> A bargain is something you can't use at a price you can't resist.</p>
                        </div>
                    </div>
                </div>
            </div>
        
    <!-- Latest Blog Section End -->

    <!-- Partner Logo Section Begin -->
 
    
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    <!--<footer class="footer-section">
       
                        <div class="copyright-text">
                           <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!--Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>-->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="payment-pic">
                            <img src="img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>