<?php
 SESSION_START();
 if(!isset($_SESSION['loc'])){
    //header('location:index.html');
 }
 
 else{
    $PhoneNumber=$_SESSION['PhoneNumber'];
   
$place=$_SESSION['loc'];//location

$ShopName=$_SESSION['ShopName'];
 }
 include('../../../BackEnd/php/connection.php');
$check=mysqli_query($con, "SELECT * FROM `user_info` where `PhoneNumber`='$PhoneNumber'");
while($row = mysqli_fetch_array($check))
{ 
$userId =$row[0];
}
// $loc=$_POST['loc'];
 //$location=$_POST['location'];//shop name 

 $query = mysqli_query($con, "SELECT * FROM `shop_info` where `Location` = '$place' and `ShopName`='$ShopName'  ");

while($row = mysqli_fetch_array($query))
{ 

$ShopId =$row[0];
//$ShopName=$row[2];
echo $ShopId."<br>".$userId."<br>";
}
$date=date('Y-m-d');
$loginfo = mysqli_query($con, "SELECT * FROM `user_online` where `userID`='$userId'");
while($row = mysqli_fetch_array($loginfo))
{ 
$time=$row[3];
}
//$insertlog = mysqli_query($con,"INSERT INTO `user_log`(`ShopID`, `User_ID`, `Date`, `Time`) values ('$ShopId','$userId','$date','$time')");
    
    $usercartinfo = mysqli_query($con, "SELECT `id`, `onlineID`, `ProductID`, `Numberofprod`, `price`,sum(`Numberofprod`),Sum(`price`) FROM `user_cart` where `onlineID`='$userId'");
    while($row1 = mysqli_fetch_array($usercartinfo))
    {
    $prodid = $row1[2];
    $price = $row1[4];      
    $noofprod = $row1[3]; 
    $totalNumberOfPro = $row1[5];
    $totalPrice = $row1[6];
    echo $totalNumberOfPro."<br>".$totalPrice;
    $userloginfo = mysqli_query($con, "SELECT * FROM `user_log` order by `LogID` DESC limit 1");
    while($row2 = mysqli_fetch_array($userloginfo))
    { 
    $logID=$row2[0];
    }
    $inserttoTrans = mysqli_query($con,"INSERT INTO `user_transactions`( `LogID`, `ProductID`, `amount`, `No of products`) VALUES ('$logID','$prodid','$price','$noofprod')");
    }
    $updatelog = mysqli_query($con, "UPDATE `user_log` SET  `TotalAmt`='$totalPrice' ,`TotalProducts`='$totalNumberOfPro' Where `LogID`='$logID'");
    if($updatelog ==true ){
     
        $deleteUseronline=mysqli_query($con,"DELETE FROM `user_online` WHERE `userID`='$userId'");
        $delecart =mysqli_query($con,"DELETE FROM `user_cart` WHERE `onlineID`='$userId'");
        
    }
