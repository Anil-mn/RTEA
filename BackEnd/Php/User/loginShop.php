<?php
include('../connection.php');
 $ShopName = $_POST ['PhoneNumber'];
 $password = $_POST['Password'];

 $query = "select * from shop_info where PhoneNumber = '$ShopName' and Password = '$password'";
 $result = mysqli_query($con, $query);
 $check = mysqli_fetch_array($result);
 if ($check == true){
     header('location:../../../Shop/Shop/productInstertion.php');
 }

else{
    echo 'login faild';
}
