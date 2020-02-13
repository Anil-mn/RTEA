<?php

include('../../BackEnd/php/connection.php');
$Category = $_POST['categorie'];
$subcatagoerie =$_POST['subcata'];
$superSub = $_POST['superSub'];
 
$CatagSelection = mysqli_query($con, "SELECT * FROM `shop_categories` where `Categories` = '$Category'");
while($row = mysqli_fetch_array($CatagSelection))
{$cata=$row[0];}



$subcatagSelection = mysqli_query($con, "SELECT * FROM `shop_subcategories` where `Name` = '$subcatagoerie' and `Categorie_ID`= '$cata'");
while($row = mysqli_fetch_array($subcatagSelection))
{$sub=$row[0];}


$superSubSelection =mysqli_query($con, "SELECT * FROM `shop_supersub` where `Name` = '$superSub' and `SubCategorie_ID`='$sub'");
while($row = mysqli_fetch_array($superSubSelection))
{$super=$row[0];}


$productInfo = mysqli_query($con, "SELECT * FROM `shop_products` where `superSubID` = '$super'");
while($row = mysqli_fetch_array($productInfo))
{$product=$row['Name'];}

session_start();
$_SESSION['product'] = $product;
echo $_SESSION['product'];
header('location:display.php');
?>