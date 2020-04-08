<?php
//to decrement the product quantity in tobuylist(while clicking -)
 include('../../../BackEnd/php/connection.php');
 $filename = basename($_SERVER['REQUEST_URI']);

 $productID =substr($filename,16);
 echo $productID;

$check=mysqli_query($con,"SELECT * from `shop_products` where `Product_ID`='$productID'");
while($row1=mysqli_fetch_array($check))
{
  $prodname=$row1[1];
  $priceperone= $row1[2];
}
$query=mysqli_query($con,"SELECT * from `user_tobuylist` where `ProductID`='$productID'");
                               while($row=mysqli_fetch_array($query))
                               {
                                   $productid=$row[1];
                                   $price=$row[2];
                                   $num = $row[3];
                               }   
 $newPrice =$price-$priceperone;  
 $num =  $num-1;                                       
 $que = "UPDATE `user_tobuylist` SET  `Price`='$newPrice',`Quantity`=' $num' where `ProductID`='$productID' ";
 $result=mysqli_query($con,$que);
 header('location:../tobuy.php');