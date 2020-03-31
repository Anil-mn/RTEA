<?php
include('../connection.php');
 $companyName = $_POST ['phoneNumber'];
 $password = $_POST['password'];

 $query = "select * from inventory where companyName = '$companyName' and password = '$password'";
 $result = mysqli_query($con, $query);
 $check = mysqli_fetch_array($result);
 if ($check == true){
     echo "success";
 }



?>