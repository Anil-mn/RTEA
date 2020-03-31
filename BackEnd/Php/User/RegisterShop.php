<?php
include('../connection.php');

$userName = $_POST['userName'];
$password = $_POST['password'];
$phoneNumber = $_POST['phoneNumber'];
//$email_ID = $_POST['email_ID'];

$query="INSERT INTO `shop`( `PhoneNumber`, `ShopName`, `Password`) VALUES  ('$phoneNumber','$userName','$password')";
$result=mysqli_query($con,$query); 
//header('Location:../profile.php');
// completed
?>