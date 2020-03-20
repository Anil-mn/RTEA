<?php
include('../connection.php');
 $Distribution_ID = $_POST ['Distribution_ID'];
 $Password = $_POST['Password'];

 $query = "SELECT * FROM `distribution_info` WHERE  Distribution_ID = '$Distribution_ID' and Password = '$Password'";
 $result = mysqli_query($con, $query);
 $check = mysqli_fetch_array($result);
 if ($check == true){
     header('location:../../../Distribution/Distribution/home.html');
 }
else{
    echo "login faild";
}


?>