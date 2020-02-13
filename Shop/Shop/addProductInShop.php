<?php
include('../../BackEnd/php/connection.php');
session_start();
$superSub=$_SESSION['product'];
echo $superSub;
 $numberOfProducts =$_POST['noofproduct'];
 $location = $_POST['location'];
 $productItem = $_POST['productItem'];
 



//  $query= mysqli_query($con,"INSERT INTO `shop_link`(`Product_ID`, `Shop_ID`, `NumberOf`, `Location`) 
//  VALUES  ('','$productItem','','')";


?>