<?php
include('../../../Backend/PHP/Connection.php');
$distuname= $_POST['distuname'];
$distPlace=$_POST['distPlace'];
$phoneNumber=$_POST['phoneNumber'];
$password=$_POST['password'];

$query="INSERT INTO `distribution_info`(`Place`, `name`, `phoneNumber`, `Password`) VALUES ('$distPlace', '$distuname', '$phoneNumber', '$password')";
$result= mysqli_query($con,$query);
header('Location:../index.html');
?>