<?php
 include('../../../BackEnd/php/connection.php');

 $filename = basename($_SERVER['REQUEST_URI']);

 $filename =substr($filename,18);
 echo $filename;

$query ="DELETE FROM `user_tobuylist` WHERE `ProductID`='$filename'";
$result = mysqli_query($con,$query);
header('location:../tobuy.php');
?>