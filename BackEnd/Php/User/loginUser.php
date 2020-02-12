<?php
include('../connection.php');
 $PhoneNumber = $_POST ['PhoneNumber'];
 $Password = $_POST['Password'];

 $query = "select * from user_info where PhoneNumber = '$PhoneNumber' and Password = '$Password'";
 $result = mysqli_query($con, $query);
 $check = mysqli_fetch_array($result);
 if ($check == true){
     echo "success insert into table";
 }



?>