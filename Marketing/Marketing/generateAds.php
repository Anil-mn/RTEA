<?php
SESSION_START();
if(!isset($_SESSION['id'])){
  echo $_SESSION['id'];
	header('location:index.html');
 }
 else{
   $id=$_SESSION['id'];
 
}


include('../../BackEnd/Php/connection.php');
$marketADs = mysqli_query($con,"SELECT * FROM `market_add` Order by `ADD_ID` DESC limit 1");
while($row=mysqli_fetch_array($marketADs)){
    $productName = $row[4];
    //echo $productName;
}


$SelectProductId = mysqli_query($con,"SELECT * FROM `shop_products` WHERE `Name` like '%$productName%'");
while($row=mysqli_fetch_array($SelectProductId)){
    $productID = $row[0];
    //echo $productID;
}


$shops = mysqli_query($con,"SELECT count(`Product_ID`),max(`NumberOf`),count(`Shop_ID`) FROM `shop_link` WHERE `Product_ID` = '$productID' and `NumberOf` > 30");
while($row=mysqli_fetch_array($shops)){
    $numberofshops = $row[2];
    $numberofproducts = $row[1];
    // echo $numberofshops;
   // echo $numberofproducts ;
}

$TotalUserCount = 0;
$usersTrans = mysqli_query($con,"SELECT * FROM `user_transactions` WHERE `ProductID` = '$productID'");
while($row=mysqli_fetch_array($usersTrans)){
    $logID = $row[1];
    //echo $logID;
   $userslog = mysqli_query($con,"SELECT `User_ID` FROM `user_log` WHERE `LogID` = '$logID'");
   while($row1=mysqli_fetch_array($userslog)){
    $UserID = $row1[0];
    //echo $UserID;
    $count = mysqli_query($con,"SELECT count(`User_ID`) FROM `user_log` WHERE `User_ID`='$UserID'");
    while($row2=mysqli_fetch_array($count)){
    $counts = $row2[0];
 }
    if($UserID == true){
        $TotalUserCount = $TotalUserCount + 1;
    }
}  
}
echo $counts;
echo $TotalUserCount;

?>