<?php
include('../connection.php');
SESSION_START();
$id = $_POST ['id'];
 $password = $_POST['password'];
 if($id=='admin' and $password=='rtea') 
    {
        header('location:../../../admin/index.php');
    }
   else 
  { 
 $query = "SELECT * FROM `inventory` WHERE  id = '$id' and password = '$password'";
 $result = mysqli_query($con, $query);
 $check = mysqli_fetch_array($result);
 if ($check == true){
    $_SESSION['id'] = $_POST['id'];
    echo  $_SESSION['id'];
    header('location:../../../Marketing/Marketing/home.php');
 }
else{
    echo "login faild";
}

  }
?>