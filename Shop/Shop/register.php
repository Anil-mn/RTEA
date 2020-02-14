<?php
include('../../BackEnd/php/connection.php');

$userName = $_POST['Shopname'];
$password = $_POST['Password'];
$phoneNumber = $_POST['PhoneNumber'];
$Location = $_POST['Location'];
$Location = ucfirst($Location);
//$email_ID = $_POST['email_ID'];

$query="INSERT INTO `shop_info`( `PhoneNumber`, `ShopName`, `Password`,`Location`) VALUES  ('$phoneNumber','$userName','$password','$Location')";
$result=mysqli_query($con,$query); 
//header('Location:../profile.php');
// completed
?>