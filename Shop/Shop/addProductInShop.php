<?php
include('../../BackEnd/php/connection.php');
session_start();
$superSub=$_SESSION['product'];
//echo $superSub;
$button=$_POST['submit'];
if(isset($button)){
$numberOfProducts =$_POST['noofproduct']; 
$location = $_POST['location'];
$productItem = $_POST['productItem'];


$shopphonenum = $_SESSION ['PhoneNumber'];

$check = mysqli_query($con, "SELECT * FROM `shop_info` where `PhoneNumber`= '$shopphonenum'");
while($row = mysqli_fetch_array($check))
{
    $shopId=$row[0];
   
}


 $check = mysqli_query($con, "SELECT * FROM `shop_products` where `Name` LIKE '%$productItem%'");
 while($row = mysqli_fetch_array($check))
                     {
                     $productID=$row[0];
                     echo $productID;
                         
                     }
//$query= mysqli_query($con,"INSERT INTO `shop_link`(`Product_ID`, `Shop_ID`, `NumberOf`, `Location`) VALUES  ('$productID',' $shopId','$numberOfProducts','$location')";
$query="INSERT INTO `shop_link`(`Product_ID`, `Shop_ID`, `NumberOf`, `Location`) VALUES ('$productID','$shopId','$numberOfProducts','$location')";
 $result=mysqli_query($con,$query); 

header('Location:productInstertion.php');
}
?>