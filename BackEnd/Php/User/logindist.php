<?php
 include('../connection.php');
 SESSION_START();
 $phn_No = $_POST ['phn_No'];
 $password = $_POST['password'];

 $query = "SELECT * FROM `distribution_info` WHERE `phoneNumber` = '$phn_No' and `Password` = '$password'";
 $result = mysqli_query($con, $query);
 while($row=mysqli_fetch_array($result))
 {
    $ID=$row[0];
 }
 //$check = mysqli_fetch_array($result);
 if (isset($ID)){
  
    $_SESSION['phn_No'] = $ID;
     header('location:../../../Distribution/Distribution/home.php');
 }
else{
    echo $ID;
    echo "login failed";
}


?>