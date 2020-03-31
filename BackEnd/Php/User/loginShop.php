<?php
include('../connection.php');
 $ShopName = $_POST ['phoneNumber'];
 $password = $_POST['password'];

 $query = "select * from shop where ShopName = '$ShopName' and password = '$password'";
 $result = mysqli_query($con, $query);
 $check = mysqli_fetch_array($result);
 if ($check == true){
     echo "success";
 }



?>