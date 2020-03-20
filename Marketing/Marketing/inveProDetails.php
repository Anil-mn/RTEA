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

$ProductName = $_POST['product'];
//echo $ProductName;
//$ProductName =ucfirst($ProductName);


$inventryInfo = mysqli_query($con,"SELECT * FROM `inventory` where `id`= '$id' ");
while($row=mysqli_fetch_array($inventryInfo)){
    $companyName = $row[2];
    $InvId = $row[0];
    $Location = $row[5];
    echo $companyName.$InvId.$Location;
}
$ProductInfo = mysqli_query($con,"SELECT * FROM `shop_products` where `Name` like '%$ProductName%' ");
while($row=mysqli_fetch_array($ProductInfo)){
    $ProductNameFrom = $row['Name'];
    $ProductID = $row[0];
    echo $ProductNameFrom;
}
$inventrycheck = mysqli_query($con,"SELECT * FROM `inventory_products` where `ProName`= '$ProductName' and `InvID` = '$id' ");
$resu = mysqli_fetch_array($inventrycheck);
if($resu==true){
echo 'already';
header('location:home.php');
}
else{


$InvtProduct = mysqli_query($con,"INSERT INTO `inventory_products`( `invName`, `InvID`, `ProName`, `Location`) VALUES('$companyName','$InvId','$ProductNameFrom','$Location')");
header('location:home.php');
}
