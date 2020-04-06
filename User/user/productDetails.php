<?php
 SESSION_START();
 if(!isset($_SESSION['place'])){
    //header('location:index.html');
 }
 else{
$place=$_SESSION['place'];//location
$ShopName=$_SESSION['shopeName'];

$filename = basename($_SERVER['REQUEST_URI']);

$pID =substr($filename,19);
}

 $PhoneNumber=$_SESSION['PhoneNumber'];
 include('../../BackEnd/php/connection.php');
 $Userinfo = mysqli_query($con,"SELECT * FROM `user_info` where `PhoneNumber` = '$PhoneNumber'");
 while ($row = mysqli_fetch_array($Userinfo)){
     $UserId = $row[0];
     $UserName = $row[1];
     $userMail = $row[3];
 }
// $loc=$_POST['loc'];
 //$location=$_POST['location'];//shop name 
 $query = mysqli_query($con, "SELECT * FROM `shop_info` where `ShopID`='$ShopName' or `ShopName`='$ShopName' ");
                            

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

               <a href="process/logout.php" class="login-panel"><i class="fa fa-user"></i>LogOut</a>
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
                                                <!-- <tr>
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
                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- <div class="select-total">
                                        <span>total:</span>
                                        <h5>$120.00</h5>
                                    </div> -->
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
                        
                        <ul name="category" class="depart-hover">
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
                        echo '<li><a href="MainCategory.php?'.$ShopName.'">Home</a></li>'
                      ;
                            ?>
                               <li><a href="SelectShop.php">Shop</a></li>
                        <li><a href="#">Collection</a>
                            <ul class="dropdown">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">shop</a></li>
                            <li><a href="#">List</a></li>
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
                    <div class="breadcrumb-text product-more">
                        <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Detail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3" >
                    <div class="filter-widget">
                        <h4 class="fw-title">Deviate</h4>
                        <ul class="filter-catagories">
                        <li><a href="#">Home</a></li>
                            <li><a href="#">shop</a></li>
                            <li><a href="#">List</a></li>
                        </ul>
                    </div>
                    <div class="filter-widget" hidden>
                        <h4 class="fw-title">Brand</h4>
                        <div class="fw-brand-check">
                            <div class="bc-item">
                                <label for="bc-calvin">
                                    Calvin Klein
                                    <input type="checkbox" id="bc-calvin">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-diesel">
                                    Diesel
                                    <input type="checkbox" id="bc-diesel">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-polo">
                                    Polo
                                    <input type="checkbox" id="bc-polo">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-tommy">
                                    Tommy Hilfiger
                                    <input type="checkbox" id="bc-tommy">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Price</h4>
                        <div class="filter-range-wrap">
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="33" data-max="98">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>
                        <a href="#" class="filter-btn">Filter</a>
                    </div>
                    <div class="filter-widget" hidden>
                        <h4 class="fw-title">Color</h4>
                        <div class="fw-color-choose">
                            <div class="cs-item">
                                <input type="radio" id="cs-black">
                                <label class="cs-black" for="cs-black">Black</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-violet">
                                <label class="cs-violet" for="cs-violet">Violet</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-blue">
                                <label class="cs-blue" for="cs-blue">Blue</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-yellow">
                                <label class="cs-yellow" for="cs-yellow">Yellow</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-red">
                                <label class="cs-red" for="cs-red">Red</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-green">
                                <label class="cs-green" for="cs-green">Green</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget" hidden>
                        <h4 class="fw-title">Size</h4>
                        <div class="fw-size-choose">
                            <div class="sc-item">
                                <input type="radio" id="s-size">
                                <label for="s-size">s</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="m-size">
                                <label for="m-size">m</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="l-size">
                                <label for="l-size">l</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="xs-size">
                                <label for="xs-size">xs</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Tags</h4>
                        <div class="fw-tags">
                            <a href="#">Towel</a>
                            <a href="#">Shoes</a>
                            <a href="#">Coat</a>
                            <a href="#">Dresses</a>
                            <a href="#">Trousers</a>
                            <a href="#">Men's hats</a>
                            <a href="#">Backpack</a>
                        </div>
                    </div>
                </div>

                <?php

                 $catid=mysqli_query($con,"SELECT * from `Shop_products` where `Product_ID`='$pID'");
                 while($row1=mysqli_fetch_array($catid))
                 {
                     $productid = $row1[0];
                     $pname = $row1[1];
                     $pprice = $row1[2];
                     $Dis =$row1[3];
                     $subID = $row1[4];
                 }   
                     $SuperInfo = mysqli_query($con,"SELECT * from `shop_supersub` where `SuperSubCat_ID`='$subID'");
                     while($row2=mysqli_fetch_array($SuperInfo))
                     {
                       $superID=$row2[1];
                       $superSubName = $row2[2];
                       //echo $superID;
                     }  
                     
                        $subInfo = mysqli_query($con,"SELECT * from  `shop_subcategories` WHERE `SubCategorie_ID`='$superID'");
                                    while($row3=mysqli_fetch_array($subInfo))
                                    {
                                         $SubID=$row3[1];
                                         $SubName = $row3[2];
                                         //echo $subID;
                                    }   
                                         $query=mysqli_query($con,"SELECT * from Shop_Categories where Categorie_ID='$SubID'");
                                         while($row4=mysqli_fetch_array($query))
                                           {
                                               $cataName=$row4[1];

                                           }
                                           $Pqun = 'Currently Unavailable';
                                           $query = "SELECT * from `shop_link` where `Product_ID`='$pID' ";
                                           $que=mysqli_query($con,$query);
                                            while($row2=mysqli_fetch_array($que))
                                             {   
                                                 $Pqun=$row2[3];
                                             }      
                     $cutprice=$pprice+30;

                   echo '
                   
                <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-pic-zoom">
                            <img class="product-big-img" src="../../Images/ProductImages/'.$pID.'.jpg" alt="">
                            <div class="zoom-icon">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel" hidden>
                                <div class="pt active" data-imgbigurl="../../Images/ProductImages/'.$pID.'.jpg"><img
                                        src="../../Images/ProductImages/'.$pID.'.jpg" alt=""></div>
                                <div class="pt" data-imgbigurl="../../Images/ProductImages/'.$pID.'.jpg"><img
                                        src="img/product-single/product-2.jpg" alt=""></div>
                                <div class="pt" data-imgbigurl="../../Images/ProductImages/'.$pID.'.jpg"><img
                                        src="img/product-single/product-3.jpg" alt=""></div>
                                <div class="pt" data-imgbigurl="../../Images/ProductImages/'.$pID.'.jpg"><img
                                        src="img/product-single/product-3.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details">
                            <div class="pd-title">
                                <span></span>
                                <h3>'.$pname.'</h3>
                                <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                            </div>
                            <div class="pd-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span>(5)</span>
                            </div>
                            <div class="pd-desc">
                                <p>'.$Dis.'</p>
                                <h4>₹'.$pprice.' <span>₹'.$cutprice.'</span></h4>
                            </div>
                            <div class="pd-color" hidden>
                                <h6>Color</h6>
                                <div class="pd-color-choose">
                                    <div class="cc-item">
                                        <input type="radio" id="cc-black">
                                        <label for="cc-black"></label>
                                    </div>
                                    <div class="cc-item">
                                        <input type="radio" id="cc-yellow">
                                        <label for="cc-yellow" class="cc-yellow"></label>
                                    </div>
                                    <div class="cc-item">
                                        <input type="radio" id="cc-violet">
                                        <label for="cc-violet" class="cc-violet"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="pd-size-choose" hidden>
                                <div class="sc-item">
                                    <input type="radio" id="sm-size">
                                    <label for="sm-size">s</label>
                                </div>
                                <div class="sc-item">
                                    <input type="radio" id="md-size">
                                    <label for="md-size">m</label>
                                </div>
                                <div class="sc-item">
                                    <input type="radio" id="lg-size">
                                    <label for="lg-size">l</label>
                                </div>
                                <div class="sc-item">
                                    <input type="radio" id="xl-size">
                                    <label for="xl-size">xs</label>
                                </div>
                            </div>
                            <div class="quantity">
                                <div class="pro-qty" hidden>
                                    <input type="text" value="1">
                                </div>';
                                if($Pqun=='Currently Unavailable'){
                                    echo '<a href="process/list.php?'.$filename.','.$pID.'" name='.$pID.'" class="primary-btn pd-cart" hidden>Add To Cart</a>';
                                }
                                else{
                               echo '<a href="process/list.php?'.$filename.','.$pID.'" name='.$pID.'" class="primary-btn pd-cart">Add To List</a>';}
                            echo '</div>
                            <ul class="pd-tags">
                                <li><span>Super Sub </span>: '.$superSubName.'</li>
                                <li><span>Sub Category</span>: '.$SubName.'</li>
                                <li><span>CATEGORIES</span>: '.$cataName.'</li>
                            </ul>
                            <div class="pd-share">
                                <div class="p-code">ID : '.$pID.'</div>
                                <div class="pd-social">
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-twitter-alt"></i></a>
                                    <a href="#"><i class="ti-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                   ';

                 

?>
   <div class="product-tab">
                        <div class="tab-item">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#tab-1" role="tab">DESCRIPTION</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-2" role="tab">More Details</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-3" role="tab">Customer Reviews (02)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-item-content">
                            <div class="tab-content">
                                <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                    <div class="product-content">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h5>Introduction</h5>
                                                <?php
                                                echo '
                                                <p>'.$Dis.' </p>
                                                <h5>Features</h5>
                                                <p></p>
                                                </div>
                                            <div class="col-lg-5">
                                                <img src="../../Images/ProductImages/'.$pID.'.jpg" alt="">
                                            </div>
                                                ';

                                                ?>
                                                
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                    <div class="specification-table">
                                        <table>
                                            <tr>
                                                <td class="p-catagory">Customer Rating</td>
                                                <td>
                                                    <div class="pd-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <span>(5)</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Price</td>
                                                <td>
                                                   <?php echo'<div class="p-price">₹'.$pprice.'</div>';?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Add To Cart</td>
                                                <td>
                                                    <div class="cart-add">+ add to cart</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Availability</td>
                                                <td>
                                                <?php echo'<div class="p-stock">'.$Pqun.'</div>';?>
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Catagory</td>
                                                <td>
                                                    <?php echo'<div class="p-size">'.$cataName.'</div>';?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Sub cata</td>
                                                <td>
                                                <?php echo'<div class="p-size">'.$SubName.'</div>';?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Super Sub</td>
                                                <td>
                                                    <?php echo'<div class="p-size">'.$superSubName.'</div>';?>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                    <div class="customer-review-option">
                                        <h4>2 Comments</h4>
                                        <div class="comment-option">
                                        <?php
                                        $cutomer = mysqli_query($con,"SELECT * FROM `user_review` where ProductID='$pID' limit 2");
                                        while($row=mysqli_fetch_array($cutomer)){
                                            $view = $row[3];
                                            $rate = $row[4]; 
                                            $name = $row[2];
                                            echo '
                                            <div class="co-item">
                                            <div class="avatar-pic">
                                                <img src="../../Images/UserImages/'.$PhoneNumber.'.jpg" alt="">
                                            </div>
                                            <div class="avatar-text">
                                                
                                                <h5>'.$name.'<span></span></h5>
                                                <div class="at-reply">'.$view.'</div>
                                            </div>
                                        </div>';
                                        }

                                        ?>
                                        
                                            <!-- <div class="co-item">
                                                <div class="avatar-pic">
                                                    <img src="img/product-single/avatar-1.png" alt="">
                                                </div>
                                                <div class="avatar-text">
                                                    <div class="at-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <h5>Brandon Kelley <span>27 Aug 2019</span></h5>
                                                    <div class="at-reply">Nice !</div>
                                                </div>
                                            </div>
                                            <div class="co-item">
                                                <div class="avatar-pic">
                                                    <img src="img/product-single/avatar-2.png" alt="">
                                                </div>
                                                <div class="avatar-text">
                                                    <div class="at-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <h5>Roy Banks <span>27 Aug 2019</span></h5>
                                                    <div class="at-reply">Nice !</div>
                                                </div>
                                            </div> -->
                                        </div>
                                       
                                        <?php
                                        echo '<div class="leave-comment">
                                            <h4>Leave A Comment</h4>
                                            <form action="process/review.php" Method="POST" class="comment-form">
                                                <div class="personal-rating">
                                                <h6></h6>
                                               
                                            </div>
                                                <div class="row">
                                            
                                                    <div class="col-lg-6">
                                                        <input type="text" value="'.$UserName.'">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="'.$userMail.'">
                                                        <input type="text" name="product" value="'.$pID.'" hidden>
                                                    </div>';
                                                    ?>
                                                    <div class="col-lg-12">
                                                        <textarea placeholder="Messages" name="review"></textarea>
                                                        <button type="submit" name="MSG" class="site-btn">Send message</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
   
    ?>
    <!-- Product Shop Section End -->

    <!-- Related Products Section End -->
    <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">

<?php

$catid=mysqli_query($con,"SELECT * from `Shop_products` where `superSubID`='$superID' limit 4");
while($row1=mysqli_fetch_array($catid))
{
    $productid = $row1[0];
    $pname = $row1[1];
     $pprice= $row1[2];
    $Dis =$row1[3];
    $subID = $row1[4]; 
    if($pID != $productid){
        echo '  <div class="col-lg-3 col-sm-6" onclick="view('.$productid.')">
        <div class="product-item">
            <div class="pi-pic">
                <img style="height:280px; width:200px" src="../../Images/ProductImages/'.$productid.'.jpg" alt=""> 
                <div class="sale">Sale</div>
                <div class="icon">
                    <i class="icon_heart_alt" ></i>
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
                    <h5>'.$pname.'</h5>
                </a>
                <div class="product-price">
                    '.$pprice.'
                    <span>$35.00</span>
                </div>
            </div>
        </div>
    </div>
        ';
    }
    else {
      
    
      # code...
    }
}   
?>






 <script>
                                  function view(proid){
                                      
                                     window.location="productDetails.php?"+proid;
                                }
                                  </script>  


                <!-- <div class="col-lg-3 col-sm-6">
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
                </div>
                <div class="col-lg-3 col-sm-6">
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
                </div>
                <div class="col-lg-3 col-sm-6">
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
                </div>
                <div class="col-lg-3 col-sm-6">
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
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Related Products Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello.colorlib@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail">
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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