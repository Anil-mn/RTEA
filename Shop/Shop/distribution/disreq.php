<?php
function disreq()
{


include('../../../BackEnd/php/connection.php');

session_start();
$PhoneNumber=$_SESSION['PhoneNumber'];
$query=mysqli_query($con,"SELECT * FROM `shop_info` where `PhoneNumber`='$PhoneNumber'");
while($row = mysqli_fetch_array($query))
{
    $shopid=$row[0];
    //echo $shopid;
}

$date=date('Y-m-d');
$query=mysqli_query($con,"SELECT * FROM `shop_link` where `Shop_ID`='$shopid' and `Numberof`<5");
while($row = mysqli_fetch_array($query))
{
    $prodid=$row[1];
    echo $prodid;
    $query1=mysqli_query($con,"SELECT * FROM `shop_products` where `Product_ID`='$prodid'");
    while($row = mysqli_fetch_array($query1))
{
    $prodname=$row[1];
    $dist=mysqli_query($con,"SELECT * FROM `dis_shopreq` where `ShopID`='$shopid' and `Product`='$prodname'");
    $res=mysqli_fetch_array($dist);
    if($res==true)
    {
        $q1=mysqli_query($con,"SELECT * FROM `dis_shopreq` where `ShopID`='$shopid' and `Product`='$prodname' and `Status`='Delivered'");
    $r1=mysqli_fetch_array($q1);
     if($r1==true)
     {
        $check=mysqli_query($con,"UPDATE `dis_shopreq` SET `Status`='Not Requested',`Date`='$date' where `ShopID`='$shopid' and `Product`='$prodname'");
    }
  }
    else
    {
        
        
        $check=mysqli_query($con,"INSERT INTO `dis_shopreq`( `ShopID`, `Product`, `Quntity`, `Date`) VALUES ('$shopid','$prodname','20','$date')");
    }
}}
}
?>
