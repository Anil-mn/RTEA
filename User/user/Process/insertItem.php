<?php
SESSION_START();
$PhoneNumber=$_SESSION['PhoneNumber'];
 include('../../../BackEnd/php/connection.php');


$query=mysqli_query($con,"SELECT * from `user_info` where `PhoneNumber`='$PhoneNumber'");
while($row=mysqli_fetch_array($query))
                                   {
                                $userid=$row[0];
                                
                                   }


 $prodname=$_POST['prodname'];
$quantity=$_POST['quantity'];

$check=mysqli_query($con,"SELECT * from `shop_products` where `Name` like '%$prodname%'");
                                   while($row1=mysqli_fetch_array($check))
                                   {
                                     $prodid=$row1[0];
                                     $price=$row1[2];

                                    }
     $price=$price*$quantity;                               
   
 if(isset($_POST['submit1']))
 {
     $query1="INSERT into `user_cart` (`ProductID`, `Numberofprod`,`price`,`onlineID`) values ('$prodid','$quantity','$price','$userid')";
     $result=mysqli_query($con,$query1);   
     header('location:../StartShopping.php');
 }     

 ?>