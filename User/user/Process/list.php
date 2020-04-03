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
//echo $userId;
}
// $loc=$_POST['loc'];
 //$location=$_POST['location'];//shop name 

 $query = mysqli_query($con, "SELECT * FROM `shop_info` where `Location` = '$place' and `ShopName`='$ShopName'  ");

while($row = mysqli_fetch_array($query))
{ 

$ShopId =$row[0];
//$ShopName=$row[2];

}


$filename = basename($_SERVER['REQUEST_URI']);
//echo $filename;
$prodId =substr($filename,9);

//echo $prodId;

$demo= stristr($filename,",");
 $len = strlen($demo);
 $pageName =substr($filename,9,-$len);
 //echo $pageName;
 //echo $pageName."<br>";


 $productId=substr($demo,1);
 echo $productId;

 $demo = stristr($filename,",");

$query2=mysqli_query($con, "SELECT * FROM  `shop_products` where `Product_ID`='$productId'");
while($row1 = mysqli_fetch_array($query2))
{ 

$price =$row1[2];
$check = mysqli_query($con,"SELECT * From `user_tobuylist` where `ProductID`='$productId' and  `userID`='$userId'");
$result = mysqli_fetch_array($check);
if($result ==  true){
   echo '<script>
   alert("Already in list");
   </scripts>';

}
else {
   $buylist=mysqli_query($con,"INSERT INTO `user_tobuylist`( `ProductID`, `Price`,`Quantity`,`userID`) VALUES ('$productId','$price','1','$userId')");
}
}
header('location:../'.$pageName);

?>