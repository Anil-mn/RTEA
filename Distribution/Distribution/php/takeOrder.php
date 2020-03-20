<?php
include('../../../BackEnd/Php/connection.php');

SESSION_START();
$disID=$_SESSION['phn_No'];
//echo $disID;



$filename = basename($_SERVER['REQUEST_URI']);
$ReqestID =substr($filename,14);

echo $ReqestID;


$query = "UPDATE `distributor_orders` SET `Status` = 'Order Purchased' where `Request_ID`='$ReqestID'";
$query1 = mysqli_query($con,"UPDATE `dis_shopreq` SET `Status` = 'Order Purchased' where `ReqID`='$ReqestID'");
$result = mysqli_query($con,$query);
header('Location: ../home.php');

?>