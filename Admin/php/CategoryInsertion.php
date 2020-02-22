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


if(isset($_POST['subcategory']))
{
    $subCategory = $_POST ['subcata']; 
    $sub=$_POST['subcat'];
    $check = mysqli_query($con,"SELECT * FROM `shop_categories` where `Categories`='$subCategory'");
    while($row = mysqli_fetch_array($check))
                       { 
                          $CataID=$row[0];
                          
                        }
                        $query="INSERT INTO `shop_subcategories`(`Categorie_ID`, `Name`)VALUES ('$CataID','$sub')";
                        $result=mysqli_query($con,$query);
                        header('Location:../Shop_CategorieInsertion.php');
                    }
   if(isset($_POST['superSubbutton']))    
   {
       $supersub=$_POST['superSub'];
       $super=$_POST['supercat'];
       $check = mysqli_query($con,"SELECT * FROM `shop_subcategories` where `Name`='$supersub'");
       while($row = mysqli_fetch_array($check))
                       { 
                          $subCataID=$row[0];
                          
                       }
                        
                    
                        $query="INSERT INTO `shop_supersub`(`SubCategorie_ID`, `Name`)VALUES ('$subCataID','$super')";
                        $result=mysqli_query($con,$query);
                        header('Location:../Shop_CategorieInsertion.php');



   }             

                    
 ?>


