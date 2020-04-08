<?php


SESSION_START();

$PhoneNumber=$_SESSION['PhoneNumber'];
   
$place=$_SESSION['loc'];//location

$ShopName=$_SESSION['shopeName'];

 
include('../../../BackEnd/php/connection.php');
$check=mysqli_query($con, "SELECT * FROM `user_info` where `PhoneNumber`='$PhoneNumber'");
while($row = mysqli_fetch_array($check))
{ 
$userId =$row[0];
//echo $userId;
}
// $loc=$_POST['loc'];
 //$location=$_POST['location'];//shop name 

 $query = mysqli_query($con, "SELECT * FROM `shop_info` where `ShopID`='$ShopName' or `ShopName`='$ShopName'  ");

while($row = mysqli_fetch_array($query))
{ 

$ShopId =$row[0];
$Shop1Name=$row[2];

}
$timezone=date_default_timezone_set('Asia/Kolkata');
         $time =  date("h:i:s", time());
         
         $check1 = mysqli_query($con,"SELECT * FROM `user_online` where `userID`='$userId' or (`userID`='$userId' and `shopID`='$ShopId')");
         $res=mysqli_fetch_array($check1);
         if( $res==true)
         {
           // echo '<script> confirm("you are Already in a shop Please LogOut",window.location="p")</script>';
            //$ousers= mysqli_query($con,"UPDATE `user_online` SET `shopID`='$ShopId',`Time`='$time' where `userID`='$userId'");
         }
         else
         {
            $ousers= mysqli_query($con,"INSERT INTO `user_online`( `userID`, `shopID`, `Time`) VALUES ('$userId','$ShopId','$time')");

         }

         $deleteUseronline=mysqli_query($con,"DELETE FROM `user_online` WHERE `userID`='$userId'");
         

if(SESSION_DESTROY())
{
header('location:../../index.html');
}
?> 