<?php
 SESSION_START();
 if(!isset($_SESSION['place'])){
    //header('location:index.html');
 }
 else{
$place=$_SESSION['place'];//location
$ShopName=$_SESSION['shopeName'];

$filename = basename($_SERVER['REQUEST_URI']);

$maincategory =substr($filename,15);

 }
 $PhoneNumber=$_SESSION['PhoneNumber'];
 include('../../BackEnd/php/connection.php');
 $Userinfo = mysqli_query($con,"SELECT * FROM `user_info` where `PhoneNumber` = '$PhoneNumber'");
 while ($row = mysqli_fetch_array($Userinfo)){
     $UserId = $row[0];
 }
// $loc=$_POST['loc'];
 //$location=$_POST['location'];//shop name 
 $query = mysqli_query($con, "SELECT * FROM `shop_info` where `ShopID`='$ShopName' or `ShopName`='$ShopName'  ");
  while($row = mysqli_fetch_array($query))
{ 

$ShopId =$row[0];
$Shop1Name=$row[2];

}

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

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel = "icon" href = "../../Logos/title.png" 
        type = "image/x-icon">  
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
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        <?php
                        echo $place;
                        
                        $_SESSION['place']=$place;
                        ?>
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        <?php
                        echo $Shop1Name;
                        //$_SESSION['ShopName']=$ShopName;
                        ?>
                    </div>
                </div>
                <div class="ht-right">

               <!--shop changing using same procedure of change location-->     

               <a href="Process/Logout.php" class="login-panel"><i class="fa fa-user"></i>Logout</a>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="img/flag-1.jpg" data-imagecss="flag yt"
                                data-title="English">English</option>
                            <option value='yu' data-image="img/flag-2.jpg" data-imagecss="flag yu"
                                data-title="Bangladesh">German </option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="../../Logos/title.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                        <form action="StartShopping.php">
                             <button type="submit"  class="category-btn">StartShopping</button> </form>
                            <form action="" method="POST" class="input-group">
                                <input type="text" name="search" placeholder="What do you need?">
                                <button type="submit" name="Ser"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon"><a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon"><a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <?php

                                    $query=mysqli_query($con,"SELECT count(`listid`) from `user_tobuylist` where `UserID`='$UserId'");
                                    while($row=mysqli_fetch_array($query))
                                    {
                                        $num = $row[0];
                                        echo ' <span>'.$num.'</span>';
                                     }
                                    ?>
                                    <!-- <span>3</span> -->
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">

                                        <table>
                                            <tbody>
                                            <?php
                               include('../../BackEnd/php/connection.php');
                               //echo $userId;
                               $filename = basename($_SERVER['REQUEST_URI']);
                               #$pagename =substr($filename,15);
                               $pagename =$filename;
                               //echo $pagename;
                               //echo $userId;
                               $query=mysqli_query($con,"SELECT * from `user_tobuylist` where `userID`='$UserId' order by `listid` DESC limit 2");
                               while($row=mysqli_fetch_array($query))
                               {
                                   $productid=$row[1];
                                   $price=$row[2];
                                   $quantity=$row[3];
                                   $check=mysqli_query($con,"SELECT * from `shop_products` where `Product_ID`='$productid'");
                                   while($row1=mysqli_fetch_array($check))
                                   {
                                     $prodname=$row1[1];
                                     $priceperone= $row1[2];
                                     echo '
                                     <tr>
                                                    <td class="si-pic"><img style="height:80px ; width:60px;"  src="../../Images/productImages/'.$productid.'.jpg" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>₹'.$priceperone.' x '.$quantity.'</p>
                                                            <h6>'.$prodname.'</h6>
                                                        </div>
                                                    </td>
                                                    </td>
                                                    <td class="si-close">
                                                    <a class="ti-close" href="process/tobyproDelete.php?'.$pagename.','.$productid.'"></a>
                                                </td>
                                                    </tr>';
                                    }
                                }
                           
                                   ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    <div class="select-button">
                                        <a href="tobuy.php" class="primary-btn view-card">click here to see list</a>
                                    
                                    </div>
                                </div>
                            </li>
                            <?php
          include('../../BackEnd/php/connection.php');
          
        $query=mysqli_query($con,"SELECT SUM(`price`) from `user_tobuylist` where `UserID`='$UserId' ");
       while($row=mysqli_fetch_array($query))
       { $total=$row[0];}

       echo '<li class="cart-price">₹'.$total.'</li>';

                                 ?>
                            <!-- <li class="cart-price">$150.00</li> -->
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
                        <span>All Category</span>
                        <form id='category' action="demo.php" method='POST'>
                        <ul name="category" class="depart-hover">
                            <?php
                             //subcategory displaying
                            include('../../Backend/Php/Connection.php');
                            $query=mysqli_query($con,"SELECT * from Shop_Categories where `Categorie_ID`='$maincategory'");
                            while($row=mysqli_fetch_array($query))
                            {
                                $cataID = $row[0];
                                $catid=mysqli_query($con,"SELECT * from `Shop_subcategories` where `Categorie_ID`='$cataID'");
                                  while($row1=mysqli_fetch_array($catid))
                                  {
                                      $subid = $row1[0];
                                      $subcatname = $row1[2];
                                
                               // echo '<button><li name="category"><a href="demo.php">'.$row[1].'</a></li></button>';
                                

                                
                            echo '<li name="category"><a href="supersub.php?'.$subid.'">'.$subcatname.'</a></li>
            
                            ';
                              
                            }
                        }
                          
                            ?>
                            <!-- <li class="active"><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Underwear</a></li>
                            <li><a href="#">Kid's Clothing</a></li>
                            <li><a href="#">Brand Fashion</a></li>
                            <li><a href="#">Accessories/Shoes</a></li>
                            <li><a href="#">Luxury Brands</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li> -->

                        </ul>
                        </form>
                       
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <?php 
                        echo '<li><a href="MainCategory.php?'.$ShopName.'">Home</a></li>
                        <li><a href="selectshop.php">Shop</a></li>';?>
                       <li><a href="#">Collection</a>
                            <ul class="dropdown">
                                <li><a href="#">Men's</a></li>
                                <li><a href="#">Women's</a></li>
                                <li><a href="#">Kid's</a></li>
                            </ul>
                        </li>
                        <li><a href="tobuy.php">List</a></li>
                        <li><a href="feedback.php">FeedBack</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="MainCategory.php">Home</a></li>
                                <li><a href="SelectShop.php">Shop</a></li>
                                <li><a href="tobuy.php">List</a></li>
                                <li><a href="feedback.php">FeedBack</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                 <?php
             
                           $query=mysqli_query($con,"SELECT * from Shop_Categories where `Categorie_ID`='$maincategory'");
                           while($row=mysqli_fetch_array($query))
                           {
                               $cataID = $row[0];
                               $catid=mysqli_query($con,"SELECT * from `Shop_subcategories` where `Categorie_ID`='$cataID'");
                                 while($row1=mysqli_fetch_array($catid))
                                 {
                                     $subid = $row1[0];
                                     $subcatname = $row1[2];
                               
                               // echo '<button><li name="category"><a href="demo.php">'.$row[1].'</a></li></button>';
                                

                                
                            echo '<div class="col-lg-4"><form method="POST" action="supersub.php?'.$subid.'">
                            <div class="single-banner">
                                <img  style="height:300px ; width:400px;" src="../../Images/subCateImg/'.$subid.'.jpg" alt="image not found 404">
                                <div class="inner-text">
                                    <button>
                                    <h4>'.$subcatname.'</h4></button>
                                </div></form>
                            </div>
                        </div>';
                              
                            }
                        }
                            ?>

                          
                            

                <!-- <div class="col-lg-4"><form action="demo.php">
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
                </div>-->
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
            <?php
            //advertisement 3
             $addID=0;
                include('../../BackEnd/php/connection.php');
            $Ads = mysqli_query($con,"SELECT * FROM `market_userads` Where  `User_id` = '$UserId' and `SlotNumbers` = 1");
            while($row1=mysqli_fetch_array($Ads)){
                $addID=$row1[2]; 
                $Adsinfo = mysqli_query($con,"SELECT * FROM `market_add` Where  `Add_ID` = '$addID'");
                  while($row=mysqli_fetch_array($Adsinfo)){
                  $addName=$row[2];
                  $addProduct=$row[4];
                  $addDis=$row[5];
                 
                  }
                }
                  echo '<div class="col-lg-3">
                  <div class="product-large set-bg" data-setbg="../../Images/AdsImages/'.$addID.'.jpg">
                      <h2>Women’s</h2>
                      <a href="#">Discover More</a>
                  </div> 
              </div> ';
                
                
                  ?>
                   <!-- <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="../../Images/AdsImages/5.jpg">
                        <h2>Women’s</h2>
                        <a href="#">Discover More</a>
                    </div> 
                </div>  -->
                 <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                    <ul>
                    <?php
             
             $query=mysqli_query($con,"SELECT * from Shop_Categories where `Categorie_ID`='$maincategory'");
             while($row=mysqli_fetch_array($query))
             {
                 $cataID = $row[0];
                 $catid=mysqli_query($con,"SELECT * from `Shop_subcategories` where `Categorie_ID`='$cataID'");
                   while($row1=mysqli_fetch_array($catid))
                   {
                       $subid = $row1[0];
                       $subcatname = $row1[2];
                       echo '<li >'.$subcatname.'</li>';
                   }
                }
                 ?>
                      
                            <!-- <li class="active">Clothings</li>
                            <li>HandBag</li>
                            <li>Shoes</li>
                            <li>Accessories</li> -->
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                       
                    <?php
                    //displaying products by taking category id from shopsubcategory
                                include('../../BackEnd/php/connection.php');
                               // echo $maincategory;
                                $subInfo = mysqli_query($con,"SELECT * from  `shop_subcategories` WHERE `Categorie_ID`='$maincategory'");
                                while($row=mysqli_fetch_array($subInfo))
                                {
                                     $subID=$row[0];
                                     //echo $subID;
                                     //using subcategory id taking supersub id
                                     $SuperInfo = mysqli_query($con,"SELECT * from `shop_supersub` where `SubCategorie_ID`='$subID'");
                                     while($row1=mysqli_fetch_array($SuperInfo))
                                     {
                                       $superID=$row1[0];
                                      // echo $superID;
                                      //
                                       $check=mysqli_query($con,"SELECT *   from `shop_products` where `superSubID`= '$superID'");
                                       while($row2=mysqli_fetch_array($check))
                                         {
                                                $prodid=$row2[0];
                                                
                                                $price=$row2[2];
                                                $name=$row2[1];
                                                $check1 = mysqli_query($con,"SELECT * from `Shop_link` where `Product_ID`='$prodid' and `Shop_ID`='$ShopId' ");
                                                while($result = mysqli_fetch_array($check1))
                                                {
                                  
                                                    
                                                    echo    '<div class="product-item"  onclick="view('.$prodid.')">
                                                    <div class="pi-pic">
                                                    <Form action="list.php" method="POST">
                                                        <img style="height:280px; width:200px"src="../../Images/productImages/'.$prodid.'.jpg" alt="">
                                                        <div class="sale">Sale</div>
                                                        <div class="icon">
                                                        <i class="icon_heart_alt"></i>
                                                        </div>
                                                          <ul>
                                                          <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                                          <li class="quick-view"><a href="process/list.php?'.$pagename.','.$prodid.'" name='.$prodid.'>+ Add List</a></li>
                                                          <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                                      </ul>
                                                  </div>

                                                   <div class="pi-text">
                                                      <div class="catagory-name">'.$name.'</div>
                                                      <a href="#">
                                                          <h5>'.$name.'</h5>
                                                      </a>
                                                      <div class="product-price">
                                                          '.$price.'
                                                          <span>$35.00</span>
                                                      </div>
                                                      </from>
                                                  </div>
                                              </div>';

                                                }
                                         
                                            }
                                        } 
                                    }

               
                               ?>
                    
               
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- Women Banner Section End -->

    <!-- Deal Of The Week Section Begin-->
     <section class="deal-of-week set-bg spad" data-setbg="img/time-bg.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Deal Of The Week</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed<br /> do ipsum dolor sit amet,
                        consectetur adipisicing elit </p>
                    <div class="product-price">
                        $35.00
                        <span>/ HanBag</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="#" class="primary-btn">Shop Now</a>
            </div>
        </div>
    </section> 
    <!-- Deal Of The Week Section End -->

    <!-- Man Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class = "row">
            <div class="col-lg-8">
                  <div class="filter-control">
               <ul>
            <?php
             //displaying subcategories name
             $query=mysqli_query($con,"SELECT * from Shop_Categories where `Categorie_ID`='$maincategory'");
             while($row=mysqli_fetch_array($query))
             {
                 $cataID = $row[0];
                 $catid=mysqli_query($con,"SELECT * from `Shop_subcategories` where `Categorie_ID`='$cataID'");
                   while($row1=mysqli_fetch_array($catid))
                   {
                       $subid = $row1[0];
                       $subcatname = $row1[2];
                       echo '<li >'.$subcatname.'</li>';
                   }
                }
                 ?>
                
                            <!-- <li class="active">Clothings</li>
                            <li>HandBag</li>
                            <li>Shoes</li>
                            <li>Accessories</li> -->
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                    <?php
                                include('../../BackEnd/php/connection.php');
                               // echo $maincategory;
                                $subInfo = mysqli_query($con,"SELECT * from  `shop_subcategories` WHERE `Categorie_ID`='$maincategory'");
                                    while($row=mysqli_fetch_array($subInfo))
                                    {
                                         $subID=$row[0];
                                         //echo $subID;
                                         $SuperInfo = mysqli_query($con,"SELECT * from `shop_supersub` where `SubCategorie_ID`='$subID'");
                                         while($row1=mysqli_fetch_array($SuperInfo))
                                         {
                                           $superID=$row1[0];
                                          // echo $superID;
                                           $check=mysqli_query($con,"SELECT *   from `shop_products` where `superSubID`= '$superID'");
                                           while($row2=mysqli_fetch_array($check))
                                             {
                                                $prodid=$row2[0];
                                                $price=$row2[2];
                                                $name=$row2[1];
                                                $check1 = mysqli_query($con,"SELECT * from `Shop_link` where `Product_ID`='$prodid' and `Shop_ID`='$ShopId' ");
                                                while($result = mysqli_fetch_array($check1))
                                                {
                                                    //echo $result[2];
                                  
                                                    
                                                    echo    '<div class="product-item" onclick="view('.$prodid.')">
                                                    <div class="pi-pic">
                                                    <Form action="list.php" method="POST">
                                                        <img style="height:280px; width:200px"src="../../Images/productImages/'.$prodid.'.jpg" alt="">
                                                        <div class="sale">Sale</div>
                                                        <div class="icon">
                                                        <i class="icon_heart_alt"></i>
                                                        </div>
                                                          <ul>
                                                          <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                                          <li class="quick-view"><a href="process/list.php?'.$pagename.','.$prodid.'" name='.$prodid.'>+ Add List</a></li>
                                                          <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                                      </ul>
                                                  </div>

                                                   <div class="pi-text">
                                                      <div class="catagory-name">'.$name.'</div>
                                                      <a href="#">
                                                          <h5>'.$name.'</h5>
                                                      </a>
                                                      <div class="product-price">
                                                          '.$price.'
                                                          <span>$35.00</span>
                                                      </div>
                                                      </from>
                                                  </div>
                                              </div>';

                                                }
                                         
                                            }
                                        } 
                                    }

               
                               ?>
                               <script>
                                  function view(proid){
                                      
                                     window.location="productDetails.php?"+proid;
                                }
                                  </script>   
                    
               
                    </div>
                </div>
            </div>
        </div>
    </section> 
                       
    <!-- Man Banner Section End -->

    <!-- Instagram Section Begin -->
    
    <!-- Latest Blog Section End -->

    <!-- Partner Logo Section Begin -->
        
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
    