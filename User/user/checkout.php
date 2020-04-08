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
    $username=$row[1];
    $emailID=$row[3];
    $gender=$row[5];
    $dob=$row[6];
    $locationID=$row[7];
    $locationInfo = mysqli_query($con, "SELECT * FROM `location` where `LocationID`='$locationID'");
    while($row1 = mysqli_fetch_array($locationInfo))
    { 
    $locationName = $row1[1];
    
    }
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
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Check Out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="checkout-section spad">
        <div class="container">
            <form action="#" class="checkout-form">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <a href="#" class="content-btn">Click Here To Login</a>
                        </div>
                        <?php
                        include('../../BackEnd/php/connection.php');
                        $userinfo=mysqli_query($con,"SELECT * from `user_info` where `UserId`=")


                        ?>
                        <h4>Biiling Details</h4>
                        <div class="row">
                            <?php
                           echo '<div class="col-lg-6">
                                <label for="fir">First Name<span></span></label>
                                <input type="text" value='.$username.' id="fir">
                            </div>
                            <div class="col-lg-6">
                                <label for="last">Last Name<span></span></label>
                                <input type="text" id="last">
                            </div>
                            <div class="col-lg-12">
                                <label for="cun">Country<span></span></label>
                                <input type="text" value="India" id="cun">
                            </div>
                            <div class="col-lg-12">
                            <label for="cun-name">Gender</label>
                            <input type="text" value='.$gender.' id="cun-name">
                        </div>
                            <div class="col-lg-12">
                                <label for="town">Town / City<span></span></label>
                                <input type="text" value='.$locationName.' id="town">
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Email Address<span></span></label>
                                <input type="text" value='.$emailID.' id="email">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone">Phone<span></span></label>
                                <input type="text" value='.$PhoneNumber.' id="phone">
                            </div>
                            <div class="col-lg-12">
                                <div class="create-item">
                                    <label for="acc-create">
                                        Create an account?
                                        <input type="checkbox" id="acc-create">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>';

                    ?>
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <input type="text" placeholder="Enter Your Coupon Code">
                        </div>
                        <div class="place-order"  >
                            <h4>My items</h4>
                            <div class="order-total" >
                                <ul class="order-table" style="height:200px; width:490px; overflow:hidden; overflow-y:scroll;">

                                    <li>Product<span>Total</span></li>
                                    <?php
                                    include('../../BackEnd/php/connection.php');
                                    //echo $userId;
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
                                          $priceperone= $row1[2];
                                        }
                                        echo '<li class="fw-normal">'.$prodname.' x '.$quantity.' <span>₹'.$price.'</span></li>
                                        
                                        ';

                                        }
                                         

                                        include('../../BackEnd/php/connection.php');
                                        $query=mysqli_query($con,"SELECT SUM(`price`) from `user_cart` where `onlineID`='$userId' ");
                                       while($row=mysqli_fetch_array($query))
                                       { $total=$row[0];}
                                     
                               echo ' </ul>
                                <ul class="order-table">
                                    <li class="fw-normal">Subtotal <span>₹'.$total.'</span></li>
                                    <li class="total-price">Total <span>₹'.$total.'</span></li>';
                                    ?>
                                </ul>
                                
                                <div class="payment-check">
                                    <div class="pc-item">
                                        <label for="pc-check">
                                            Cheque Payment
                                            <input type="checkbox" id="pc-check">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="pc-item">
                                        <label for="pc-paypal">
                                            Paypal
                                            <input type="checkbox" id="pc-paypal">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="order-btn">
                                    <a href="Process/pay.php" class="site-btn place-btn">Pay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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
