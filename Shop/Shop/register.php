<?php
include('../../BackEnd/php/connection.php');

$userName = $_POST['Shopname'];
$password = $_POST['Password'];
$phoneNumber = $_POST['PhoneNumber'];
$Location = $_POST['Location'];
$Location = ucfirst($Location);
$date = date('Y-m-d');
//$email_ID = $_POST['email_ID'];


$check = mysqli_query($con,"SELECT * FROM `location` Where `Name` Like '%$Location'");
while($row=mysqli_fetch_array($check)){
    $demo = $row['Name'];
}
if(isset($demo)){ echo $demo;}
else{
    $insert = "INSERT INTO `location` (`Name`) VALUES ('$Location')";
    $result=mysqli_query($con,$insert);
}
$query="INSERT INTO `shop_info`( `PhoneNumber`, `ShopName`, `Password`,`Location`,`Date`) VALUES  ('$phoneNumber','$userName','$password','$Location','$date')";
$result=mysqli_query($con,$query); 


header('Location:../index.html');
// completed
?>