<?php
include('../connection.php');

$userName = $_POST['userName'];
$password = $_POST['password'];
$phoneNumber = $_POST['phoneNumber'];
$email_ID = $_POST['emailId'];

$query="INSERT INTO `user`(`Name`, `PhoneNumber`, `Email_ID`, `Password`) VALUES ('$userName','$phoneNumber','$email_ID','$password')";
$result=mysqli_query($con,$query); 
//header('Location:../profile.php');
// completed
?>