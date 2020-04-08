
<?php
 SESSION_START();
 if(!isset($_SESSION['loc'])){
    //header('location:index.html');
 }
 else{
    $PhoneNumber=$_SESSION['PhoneNumber'];
   
$place=$_SESSION['loc'];//location

$ShopName=$_SESSION['shopeName'];

 }
include('../../BackEnd/php/connection.php');
$check=mysqli_query($con, "SELECT * FROM `user_info` where `PhoneNumber`='$PhoneNumber'");
while($row = mysqli_fetch_array($check))
{ 
$userId =$row[0];
//echo $userId;
}
// $loc=$_POST['loc'];
 //$location=$_POST['location'];//shop name 

 $query = mysqli_query($con, "SELECT * FROM `shop_info` where `ShopID`='$ShopName' or `ShopName`='$ShopName'  ");

while($row = mysqli_fetch_array($query))
{ 

$ShopId =$row[0];
$Shop1Name=$row[2];

}
$timezone=date_default_timezone_set('Asia/Kolkata');
         $time =  date("h:i:s", time());
         
         $check1 = mysqli_query($con,"SELECT * FROM `user_online` where `userID`='$userId' or (`userID`='$userId' and `shopID`='$ShopId')");
         $res=mysqli_fetch_array($check1);
         if( $res==true)
         {
           // echo '<script> confirm("you are Already in a shop Please LogOut",window.location="p")</script>';
            //$ousers= mysqli_query($con,"UPDATE `user_online` SET `shopID`='$ShopId',`Time`='$time' where `userID`='$userId'");
         }
         else
         {
            $ousers= mysqli_query($con,"INSERT INTO `user_online`( `userID`, `shopID`, `Time`) VALUES ('$userId','$ShopId','$time')");

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
                       // $_SESSION['ShopName']=$ShopName;
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
                        <form action="">
                             <button type="submit"  class="category-btn">Shopping</button> </form>
                            <form action="" method="POST" class="input-group">
                                <input type="text" name="search" placeholder="">
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
                                    $query=mysqli_query($con,"SELECT count(`listid`) from `user_tobuylist` where `UserID`='$userId'");
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
                               $query=mysqli_query($con,"SELECT * from `user_tobuylist` where `userID`='$userId' order by `listid` DESC limit 2");
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
        $query=mysqli_query($con,"SELECT SUM(`price`) from `user_tobuylist` where `UserID`='$userId' ");
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
                            include('../../Backend/Php/Connection.php');
                             $catid=mysqli_query($con,"SELECT * from `Shop_supersub` where `SubCategorie_ID`='$subcategory'");
                                  while($row1=mysqli_fetch_array($catid))
                                  {
                                      $subid = $row1[0];
                                      $subcatname = $row1[2];
                                
                               // echo '<button><li name="category"><a href="demo.php">'.$row[1].'</a></li></button>';
                                 echo '<li name="category"><a href="products.php?'.$subid.'">'.$subcatname.'</a></li>';
                              
                            
                        }
                          
                            ?>
                           

                        </ul>
                        </form>
                       
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                    <?php 
                        echo '<li><a href="MainCategory.php?'.$ShopName.'">Home</a></li>' ;
                            ?>
                              <li><a href="SelectShop.php">Shop</a></li>
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
                    <div class="breadcrumb-text product-more">
                        <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->
    <!-- <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="#" class="primary-btn continue-shop">Continue shopping</a>
                                <a href="#" class="primary-btn up-cart">Update cart</a>
                            </div> -->
    <div class="container">
            <div class="row">
    <div class="cart-buttons">
                                
                                <form action="Process/insertItem.php" method='POST' class="coupon-form">
                                    <input type="text" name="prodname" placeholder="Enter product name">
                                    <input type="text" name="quantity" placeholder="Enter quantity">
                                    <button href="#" name="submit1" class="primary-btn up-cart">Update cart</button>
                                    <!-- <button type="submit" class="site-btn coupon-btn">Apply</button> -->
                                    
                                </form>
                            </div></div></div>
    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table" style="height:440px; overflow:visible; overflow-y:scroll;">
                    <form action="Process/ProductDeletion.php" method="GET">
                    <!-- <form action="" method="POST"> -->
                        <table >
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <?php
                               include('../../BackEnd/php/connection.php');
                               
                               $query1=mysqli_query($con,"SELECT * from `user_online` where `userID`='$userId' and `shopID`='$ShopId'");
                               while($row=mysqli_fetch_array($query1))
                                                                  {
                                                                    $onlineid=$row[1];
                                                                  }   
                               $query=mysqli_query($con,"SELECT * from `user_cart` where `onlineID`='$onlineid' ");
                               while($row=mysqli_fetch_array($query))
                               {
                                   $productid=$row[2];
                                   $price=$row[4];
                                   $quantity=$row[3];
                                   $check=mysqli_query($con,"SELECT * from `shop_products` where `Product_ID`='$productid'");
                                   while($row1=mysqli_fetch_array($check))
                                   {
                                     $prodname=$row1[1];
                                     $priceperone= $row1[2];}
                           
                                   
                                   echo '<tr>
                                  
                                   <td class="cart-pic first-row"><img style="height:80px ; width:50px;" src="../../Images/productImages/'.$productid.'.jpg" alt=""></td>
                                   <td class="cart-title first-row">
                                       <h5 name="name">'.$prodname.'</h5>
                                   </td>
                                   <td class="p-price first-row">₹'.$priceperone.'</td>
                                   <td class="qua-col first-row">
                                       <div class="quantity">
                                         <div class="pro-qty">
                                           <a href="Process/subItem.php?'.$productid.'" class="dec qtybtn">-</a>
                                               <input type="text"  value="'.$quantity.'">
                                           <a href="Process/AddItem.php?'.$productid.'" class="inc qtybtn">+</a>
                                           </div>
                                       </div>
                                   </td>
                                   <td class="total-price first-row">₹'.$price.'</td>
                                   <td class="close-td first-row"><a  class="ti-close name="'.$prodname.'" href="Process/ProductDeletion.php?'.$productid.'"></a></td>
                                 </tr>';
                             
                                
                                }
                               
                               
                               

?>
                                
                            </tbody>
                        </table>
                        </form>
                    </div>
                  
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="#" class="primary-btn continue-shop">Continue shopping</a>
                                <a href="#" class="primary-btn up-cart">Update cart</a>
                            </div>
                            <div class="discount-coupon">
                                <h6>Discount Codes</h6>
                                <form action="#" class="coupon-form">
                                    <input type="text" placeholder="Enter your codes">
                                    <button type="submit" class="site-btn coupon-btn">Apply</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <?php
          include('../../BackEnd/php/connection.php');
        $query=mysqli_query($con,"SELECT SUM(`price`) from `user_cart` where `onlineID`='$userId' ");
       while($row=mysqli_fetch_array($query))
       { $total=$row[0];}

       echo '<ul>
       <li class="subtotal">Subtotal <span>₹'.$total.'</span></li>
       <li class="cart-total">Total <span>₹'.$total.'</span></li>
   </ul>'

                                 ?>
                                <!-- <ul>
                                    <li class="subtotal">Subtotal <span>$240.00</span></li>
                                    <li class="cart-total">Total <span>$240.00</span></li>
                                </ul> -->
                                <a href="checkout.php" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

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