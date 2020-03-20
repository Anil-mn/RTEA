<?php

function LinkInsertion()
{
include('../../../BackEnd/php/connection.php');

///session_start();


$PhoneNumber=$_SESSION['PhoneNumber'];
$query=mysqli_query($con,"SELECT * FROM `shop_info` where `PhoneNumber`='$PhoneNumber'");
while($row = mysqli_fetch_array($query))
{
    $shopid=$row[0];
    //echo $shopid;
}
$RequestInfo=mysqli_query($con,"SELECT * FROM `dis_shopreq` where `ShopID`='$shopid' and `Status`='Delivered'");
while($row = mysqli_fetch_array($RequestInfo))
{
    $quantity=$row[3];
    $prodname=$row[2];
     $productInfo= mysqli_query($con,"SELECT * FROM `shop_products` where `Name`='$prodname'");
     while($row1= mysqli_fetch_array($productInfo))
       {
         $prodid=$row1[0];
       $updateshoplink=mysqli_query($con,"UPDATE `shop_link` SET `NumberOf`=`NumberOf`+'$quantity' where `Shop_ID`='$shopid' and `Product_ID`='$prodid'");
if($updateshoplink==true)
{
    $updateshopreq = mysqli_query($con,"UPDATE `dis_shopreq` SET `Status`='Delivery Confirmed' where `ShopID`='$shopid' and  `Product`='$prodname'") ; 
}
       }
}
}
?>