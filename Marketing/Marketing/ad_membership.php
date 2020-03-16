<?php
SESSION_START();
include('../../BackEnd/Php/connection.php');
include('generateAds.php');
$ID = $_SESSION['ADD'];
$id=$_SESSION['id'];
// $membership = $_POST['membership'];
// $shopname = $_POST['shopname'];
// $slot = $_POST['slot'];
// $pricead = $_POST['pricead'];
GenAdd();

// $query = "INSERT INTO `market_membership`(`add_id`,`mem_type`,`ad_Shop`,`ad_Slot`,`Price`) VALUES('$ID','$membership','$shopname','$slot','$pricead')";
// $result = mysqli_query($con,$query);
header('location:payadd.php');
// echo $query;



?>
