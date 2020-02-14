<?php
include('../connection.php');
 $companyno = $_POST ['phoneNumber'];
 $password = $_POST['password'];

 $query = "select * from inventory where id = '$companyno' and password = '$password'";
 $result = mysqli_query($con, $query);
 $check = mysqli_fetch_array($result);
 if ($check == true){
     echo "success";
 }



?>