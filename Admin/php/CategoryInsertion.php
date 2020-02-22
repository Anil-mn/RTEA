<?php
include('../../BackEnd/php/connection.php');
if(isset($_POST['categorySubmit']))
{
 $CategoryName = $_POST ['CategoryName'];
 $CategoryName = ucfirst($CategoryName);
 echo  $CategoryName;
 $query="INSERT INTO `shop_categories`(`Categories`) VALUES ('$CategoryName')";
 $result=mysqli_query($con,$query);
 
 header('Location:../Shop_CategorieInsertion.php');
}
 ?>


