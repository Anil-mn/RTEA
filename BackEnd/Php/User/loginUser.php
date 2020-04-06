<?php
include('../connection.php');
SESSION_START();

 $PhoneNumber = $_POST ['PhoneNumber'];
 $Password = $_POST['Password'];
 if($PhoneNumber=='12345' and $Password=='rtea') 
    {
        header('location:../../../admin/index.php');
    }
   else 
  { 
 $query = "select * from user_info where PhoneNumber = '$PhoneNumber' and Password = '$Password'";
 $result = mysqli_query($con, $query);
 $check = mysqli_fetch_array($result);
 if(isset($check)){
    $_SESSION['PhoneNumber'] = $_POST['PhoneNumber'];
    header('location: ../../../User/user/SelectShop.php');
}
else {
  echo '<script> confirm("Wrog Password",window.location="../../../User")</script>';
}
  }


?>