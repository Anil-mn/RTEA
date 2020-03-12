<?php
include('../connection.php');
SESSION_START();

 $PhoneNumber = $_POST ['PhoneNumber'];
 $Password = $_POST['Password'];

 $query = "select * from user_info where PhoneNumber = '$PhoneNumber' and Password = '$Password'";
 $result = mysqli_query($con, $query);
 $check = mysqli_fetch_array($result);
 if(isset($check)){
    $_SESSION['PhoneNumber'] = $_POST['PhoneNumber'];
    header('location: ../../../User/user/SelectShop.php');
}



?>