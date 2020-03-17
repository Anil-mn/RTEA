<?php
include('../../../BackEnd/Php/connection.php');

SESSION_START();
$disID=$_SESSION['phn_No'];
//echo $disID;



$filename = basename($_SERVER['REQUEST_URI']);
$ReqestID =substr($filename,14);
echo $ReqestID;


$query = "UPDATE `distributor_orders` SET `Status` = 'Order Purchased' where `Request_ID`='$ReqestID'";
$result = mysqli_query($con,$query);
header('location : ../inventryInfo.php');

?>