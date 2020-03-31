<?php
 include('../../Backend/php/connection.php');
$adid=basename($_SERVER['REQUEST_URI']);
$adid=substr($adid,19);
$query=mysqli_query($con,"DELETE FROM `market_ads` WHERE `AddID`= '$adid'");
// $res=mysqli_fetch_array($query);
// echo $res;

    if($query==true)
    {
      $query1=mysqli_query($con,"SELECT * from `market_shopads` where `AddID`= '$adid'");
      while($row=mysqli_fetch_array($query1))
      {
          $shopid=$row[1];


          $updateshop=mysqli_query($con,"UPDATE `shop_info` SET `AddSlots`=AddSlots+1 where `ShopID`='$shopid'");
          $deleteshopslot=mysqli_query($con,"DELETE from `market_shopads` where `AddID`= '$adid'");
          $deleteuserslot=mysqli_query($con,"DELETE from `market_userads` where `Add_ID`= '$adid'");
          header('location:../marketingVali.php');
          
      }
     
    }  


?>