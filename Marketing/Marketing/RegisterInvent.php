<?php
include('../../BackEnd/Php/connection.php');

$phoneNumber = $_POST['phoneNumber'];
$companyName = $_POST['companyName'];
$companyAddress = $_POST['companyAddress'];
$location = $_POST['location'];
$password = $_POST['password'];
$date = date('Y-m-d');
$numvalid=mysqli_query($con, "SELECT `id` FROM `inventory` where `PhoneNumber`='$phoneNumber'");
$res=mysqli_fetch_array($numvalid);
if($res==true)
{
    echo '<script> confirm("Phone Number:'.$phoneNumber.' Already Exist",window.location="../register.php")</script>';
}
else {
$query = "INSERT INTO `inventory`(`phoneNumber`, `companyName`, `password`, `location`, `companyAddress`,`date`) VALUES ('$phoneNumber','$companyName','$password','$location','$companyAddress','$date')";
$result = mysqli_query($con,$query);

header('location:../index.html');
// completedid
}
?>