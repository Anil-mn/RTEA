<?php
//to decrement the product quantity in cart(while clicking -)
 include('../../../BackEnd/php/connection.php');
 $filename = basename($_SERVER['REQUEST_URI']);

 $productID =substr($filename,12);
 echo $productID;

$check=mysqli_query($con,"SELECT * from `shop_products` where `Product_ID`='$productID'");
while($row1=mysqli_fetch_array($check))
{
  $prodname=$row1[1];
  $priceperone= $row1[2];
}
$query=mysqli_query($con,"SELECT * from `user_cart` where `ProductID`='$productID'");
                               while($row=mysqli_fetch_array($query))
                               {
                                   $productid=$row[2];
                                   $price=$row[4];
                                   $num = $row[3];
                               }   
 $newPrice =$price-$priceperone;  
 $num =  $num-1;                                       
 $que = "UPDATE `user_cart` SET `price`='$newPrice',`Numberofprod`=' $num' where `ProductID`='$productID' ";
 $result=mysqli_query($con,$que);
 header('location:../StartShopping.php');