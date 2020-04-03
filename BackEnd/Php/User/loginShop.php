<?php
include('../connection.php');
SESSION_START();

 $ShopName = $_POST ['PhoneNumber'];
 $password = $_POST['Password'];
 
 $query = "select * from shop_info where PhoneNumber = '$ShopName' and Password = '$password'";
 $result = mysqli_query($con, $query);
 $check = mysqli_fetch_array($result);
 if ($check == true){
    $_SESSION['PhoneNumber'] = $_POST['PhoneNumber'];
     header('location:../../../Shop/Shop/CurrentUser.php');
 }

else{
   
    echo 'login failed';
}
