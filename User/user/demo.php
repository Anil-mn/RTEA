<?php
include('../../BackEnd/php/connection.php');
$nameofshop = $_POST['location'];
$countries  ='Palakkad';


$query = mysqli_query($con, "SELECT * FROM `shop_info` where ShopName='$nameofshop' and `Location`='$countries'");
while($row = mysqli_fetch_array($query))
{ 
    $ser=$row[3];
    echo $ser;
 }
?>

