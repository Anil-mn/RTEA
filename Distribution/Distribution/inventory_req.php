<?php
 include('../../BackEnd/php/connection.php');

SESSION_START();
if(!isset($_SESSION['phn_No'])){
  echo $_SESSION['phn_No'];
	header('location:index.html');
 }
 else{
   $disID=$_SESSION['id'];
 
}

$inventoryname = $_POST['inventoryname'];
$productname = $_POST['productname'];
$location = $_POST['location'];
$quantity = $_POST['quantity'];
$deadline = $_POST['deadline'];
$quer= mysqli_query($con,"SELECT *  FROM `inventory` WHERE `companyName`='$inventoryname' and `location`='$location' ");
while($row=mysqli_fetch_array($quer)){
    $id=$row[0];
}
echo $id;
$query = "INSERT INTO `distribution_inventoryreq`(`Inventory_ID`, `Product_ID`, `Quantity`, `deadline`) VALUES ('$disID','$productname','$quantity','$deadline')";
$result = mysqli_query($con,$query);
echo "success";
?>