<?php
include('../../connection.php');
 $phn_No = $_POST ['phn_no'];
 $password = $_POST['Password'];

 $query = "SELECT * FROM `distribution_info` WHERE `phoneNumber` = '$phn_No' and Password = '$password'";
 $result = mysqli_query($con, $query);
 $check = mysqli_fetch_array($result);
 if ($check == true){
     header('location:../../../Distribution/Distribution/home.html');
 }
else{
    echo "login faild";
}


?>