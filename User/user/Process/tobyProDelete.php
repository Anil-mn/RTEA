<?php
 include('../../../BackEnd/php/connection.php');

 $filename = basename($_SERVER['REQUEST_URI']);
 echo $filename."<br>";
 $page =substr($filename,18);
 //echo $id."<br>";
 
 //echo $len."<br>";

 

 #$demo = strpbrk($filename,"p");
 $demo= stristr($filename,",");
 $len = strlen($demo);
 $pageName =substr($filename,18,-$len);
 echo $pageName."<br>";


 $productId=substr($demo,1);
 //echo $productId;

 $demo = stristr($filename,",");


$query ="DELETE FROM `user_tobuylist` WHERE `ProductID`='$productId'";
$result = mysqli_query($con,$query);
header('location:../'.$pageName);
?>