<?php
 SESSION_START();
 if(!isset($_SESSION['place'])){
    //header('location:index.html');
 }
 else{
$place=$_SESSION['place'];//location
$ShopName=$_SESSION['shopeName'];


}
$filename = basename($_SERVER['REQUEST_URI']);
$suID =substr($filename,11);



 $PhoneNumber=$_SESSION['PhoneNumber'];
 include('../../../BackEnd/php/connection.php');
 $Userinfo = mysqli_query($con,"SELECT * FROM `user_info` where `PhoneNumber` = '$PhoneNumber'");
 while ($row = mysqli_fetch_array($Userinfo)){
     $UserId = $row[0];
     $UserName=$row[1];
 }
// $loc=$_POST['loc'];
 //$location=$_POST['location'];//shop name 
 $query = mysqli_query($con, "SELECT * FROM `shop_info` where `ShopID`='$ShopName' or `ShopName`='$ShopName' ");
                            

while($row = mysqli_fetch_array($query))
{ 

$ShopId =$row[0];
$Shop1Name=$row[2];

}


     $rand = rand(1,5);
    $product=$_POST['product'];
    $pagename='productDetails.php?'.$product;
     $review=$_POST['review'];
     echo $product.$review.$UserName;
     $query="INSERT INTO `user_review`(`ProductID`, `UserName`, `Review`, `Rating`) VALUES('$product','$UserId','$review','$rand')";
     $res = mysqli_query($con,$query);
     echo $query;
    header("location:../".$pagename);