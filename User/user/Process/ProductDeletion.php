<?php

//to delete the product from cart(while clicking X)
 include('../../../BackEnd/php/connection.php');

 $filename = basename($_SERVER['REQUEST_URI']);

 $filename =substr($filename,20);
 echo $filename;

$query ="DELETE FROM `user_cart` WHERE `ProductID`='$filename'";
$result = mysqli_query($con,$query);
header('location:../StartShopping.php');

 


?>