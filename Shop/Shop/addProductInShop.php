<?php
include('../../BackEnd/php/connection.php');
session_start();
$superSub=$_SESSION['product'];
echo $superSub;
 $numberOfProducts =$_POST['noofproduct'];
 $location = $_POST['location'];
 $productItem = $_POST['productItem'];
 $shopId=1;
 $check = mysqli_query($con, "SELECT * FROM `shop_products` where `Name` = '$productItem'");
 while($row = mysqli_fetch_array($check))
                     {
                         $productID=$row[0];
                     }

$query= mysqli_query($con,"INSERT INTO `shop_link`(`Product_ID`, `Shop_ID`, `NumberOf`, `Location`) 
VALUES  ('$productID',' $shopId','$numberOfProducts','$location')";


?>