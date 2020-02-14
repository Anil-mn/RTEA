<?php

include('../../BackEnd/Php/connection.php');

$phoneNumber = $_POST['phoneNumber'];
$companyName = $_POST['companyName'];
$password = $_POST['password'];
$location = $_POST['location'];

$query = "INSERT INTO  `inventory`(`phoneNumber`,`companyName`,`password`,`location`) VALUES('$phoneNumber','$companyName','$password','$location')";
$result = mysqli_query($con,$query);
header('location:login.html')
?>