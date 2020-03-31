<?php
include('../connection.php');

$CompanyName = $_POST['userName'];
$password = $_POST['password'];
$phoneNumber = $_POST['phoneNumber'];
//$email_ID = $_POST['email_ID'];


$query="INSERT INTO `inventory`( `phoneNumber`, `companyName`, `password`) VALUES  ('$phoneNumber','$CompanyName','$password')";
$result=mysqli_query($con,$query); 

//header('Location:../profile.php');
// completed
?>