<?php
include('../connection.php');
 $companyName = $_POST ['username'];
 $password = $_POST['password'];

 $query = "select * from market_companyinfo where CompanyID = '$companyName' and Password = '$password'";
 $result = mysqli_query($con, $query);
 $check = mysqli_fetch_array($result);
 if ($check == true){
     echo "success";
 }



?>