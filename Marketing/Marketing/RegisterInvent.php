<?php
include('../../BackEnd/Php/connection.php');

$phoneNumber = $_POST['phoneNumber'];
$companyName = $_POST['companyName'];
$companyAddress = $_POST['companyAddress'];
$location = $_POST['location'];
$password = $_POST['password'];
$date = date('Y-m-d');

$query = "INSERT INTO `inventory`(`phoneNumber`, `companyName`, `password`, `location`, `companyAddress`,`date`) VALUES ('$phoneNumber','$companyName','$password','$location','$companyAddress','$date')";
$result = mysqli_query($con,$query);

header('location:../index.html');
// completed
?>