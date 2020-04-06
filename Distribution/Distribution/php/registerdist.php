<?php
include('../../../Backend/PHP/Connection.php');
$distuname= $_POST['distuname'];
$distPlace=$_POST['distPlace'];
$phoneNumber=$_POST['phoneNumber'];
$password=$_POST['password'];
$numvalid=mysqli_query($con, "SELECT `PhoneNumber` FROM `Distribution_info` where `PhoneNumber`='$phoneNumber'");
$res=mysqli_fetch_array($numvalid);
if($res==true)
{
    echo '<script> confirm("Phone Number:'.$phoneNumber.' Already Exist",window.location="../register.html")</script>';
}
else {
$query="INSERT INTO `distribution_info`(`Place`, `name`, `phoneNumber`, `Password`) VALUES ('$distPlace', '$distuname', '$phoneNumber', '$password')";
$result= mysqli_query($con,$query);
header('Location:../index.html');
}
?>