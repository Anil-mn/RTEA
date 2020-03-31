<?php
include('../connection.php');
 $phoneNumber = $_POST ['phoneNumber'];
 $password = $_POST['password'];

 $query = "select * from user where PhoneNumber = '$phoneNumber' and password = '$password'";
 $result = mysqli_query($con, $query);
 $check = mysqli_fetch_array($result);
 if ($check == true){
     echo "sucess instert into table";
 }



?>