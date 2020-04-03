<?php
include('../../BackEnd/php/connection.php');
if(isset($_POST['categorySubmit']))
{
 $CategoryName = $_POST ['CategoryName'];
 $CategoryName = ucfirst($CategoryName);
 echo  $CategoryName;
 $query="INSERT INTO `shop_categories`(`Categories`) VALUES ('$CategoryName')";
 $result=mysqli_query($con,$query);


$check=mysqli_query($con,"SELECT * from shop_categories ORDER BY `Categorie_ID` desc limit 1" );
while($row=mysqli_fetch_array($check)){
$cata=$row[0];

}

$target_dir = "..\Images/";
 $target_file = $target_dir . basename($_FILES["fileToUploadCata"]["name"]);

 $name = $cata;

 $newfilename=$name ;
 echo $newfilename;
 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 // Check if image file is a actual image or fake image
 //if(isset($_POST["submit"])) {
     $check = getimagesize($_FILES["fileToUploadCata"]["tmp_name"]);
     if($check !== false) {
         echo "File is an image - " . $check["mime"] . ".";
         $uploadOk = 1;
     } else {
         echo "File is not an image.";
         $uploadOk = 0;
     }
 }
 // Check if file already exists
 if (file_exists($target_file)) {
     echo "Sorry, file already exists.";
     $uploadOk = 0;
 }
 // Check file size
 if ($_FILES["fileToUploadCata"]["size"] > 5000000) {
     echo "Sorry, your file is too large.";
     $uploadOk = 0;
 }
 // Allow certain file formats
 if( $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
 && $imageFileType != "gif" ) {
     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
     $uploadOk = 0;
 }
 // Check if $uploadOk is set to 0 by an error
 if ($uploadOk == 0) {
     echo "Sorry, your file was not uploaded.";
 // if everything is ok, try to upload file
 } else {
     //if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        if(move_uploaded_file($_FILES["fileToUploadCata"]["tmp_name"], "../../Images/categoryimages/" . $newfilename.'.jpg')){
         echo "The file ". basename( $_FILES["fileToUploadCata"]["name"]). " has been uploaded.";
         header('Location:../Shop_CategorieInsertion.php');
     } else {
         echo "Sorry, there was an error uploading your file.";
     }
   }  












if(isset($_POST['subcategory']))
{
    $subCategory = $_POST ['subcata'];
    $sub=$_POST['subcat'];
    $sub = ucfirst($sub);
    $check = mysqli_query($con,"SELECT * FROM `shop_categories` where `Categories`='$subCategory'");
    while($row = mysqli_fetch_array($check))
                       { 
                          $CataID=$row[0];
                          
                        }
                        $query="INSERT INTO `shop_subcategories`(`Categorie_ID`, `Name`)VALUES ('$CataID','$sub')";
                        $result=mysqli_query($con,$query);
                        $check=mysqli_query($con,"SELECT * from shop_subcategories ORDER BY `SubCategorie_ID` desc limit 1" );
                        while($row=mysqli_fetch_array($check)){
                        $su=$row[0];
                        
                        }
                        
                        $target_dir = "..\Images/";
                         $target_file = $target_dir . basename($_FILES["fileToUploadSub"]["name"]);
                        
                         $name = $su;
                        
                         $newfilename=$name ;
                         echo $newfilename;
                         $uploadOk = 1;
                         $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                         // Check if image file is a actual image or fake image
                         //if(isset($_POST["submit"])) {
                             $check = getimagesize($_FILES["fileToUploadSub"]["tmp_name"]);
                             if($check !== false) {
                                 echo "File is an image - " . $check["mime"] . ".";
                                 $uploadOk = 1;
                             } else {
                                 echo "File is not an image.";
                                 $uploadOk = 0;
                             }
                         }
                         // Check if file already exists
                         if (file_exists($target_file)) {
                             echo "Sorry, file already exists.";
                             $uploadOk = 0;
                         }
                         // Check file size
                         if ($_FILES["fileToUploadSub"]["size"] > 5000000) {
                             echo "Sorry, your file is too large.";
                             $uploadOk = 0;
                         }
                         // Allow certain file formats
                         if( $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                         && $imageFileType != "gif" ) {
                             echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                             $uploadOk = 0;
                         }
                         // Check if $uploadOk is set to 0 by an error
                         if ($uploadOk == 0) {
                             echo "Sorry, your file was not uploaded.";
                         // if everything is ok, try to upload file
                         } else {
                             //if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                if(move_uploaded_file($_FILES["fileToUploadSub"]["tmp_name"], "../../Images/subCateImg/" . $newfilename.'.jpg')){
                                 echo "The file ". basename( $_FILES["fileToUploadSub"]["name"]). " has been uploaded.";
                                 header('Location:../Shop_CategorieInsertion.php');
                             } else {
                                 echo "Sorry, there was an error uploading your file.";
                             }
                           } 










   if(isset($_POST['superSubbutton']))    
   {
       $supersub=$_POST['superSub'];
       $super=$_POST['supercat'];
       $super = ucfirst($super);
       $check = mysqli_query($con,"SELECT * FROM `shop_subcategories` where `Name`='$supersub'");
       while($row = mysqli_fetch_array($check))
                       { 
                          $subCataID=$row[0];
                          
                       }
                        
                    
                        $query="INSERT INTO `shop_supersub`(`SubCategorie_ID`, `Name`)VALUES ('$subCataID','$super')";
                        $result=mysqli_query($con,$query);
                        $check=mysqli_query($con,"SELECT * from shop_supersub ORDER BY `SuperSubCat_ID` desc limit 1" );
                        while($row=mysqli_fetch_array($check)){
                        $sup=$row[0];
                        
                        }
                        
                        $target_dir = "..\Images/";
                         $target_file = $target_dir . basename($_FILES["fileToUploadSuper"]["name"]);
                        
                         $name = $sup;
                        
                         $newfilename=$name ;
                         echo $newfilename;
                         $uploadOk = 1;
                         $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                         // Check if image file is a actual image or fake image
                         //if(isset($_POST["submit"])) {
                             $check = getimagesize($_FILES["fileToUploadSuper"]["tmp_name"]);
                             if($check !== false) {
                                 echo "File is an image - " . $check["mime"] . ".";
                                 $uploadOk = 1;
                             } else {
                                 echo "File is not an image.";
                                 $uploadOk = 0;
                             }
                         }
                         // Check if file already exists
                         if (file_exists($target_file)) {
                             echo "Sorry, file already exists.";
                             $uploadOk = 0;
                         }
                         // Check file size
                         if ($_FILES["fileToUploadSuper"]["size"] > 5000000) {
                             echo "Sorry, your file is too large.";
                             $uploadOk = 0;
                         }
                         // Allow certain file formats
                         if( $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                         && $imageFileType != "gif" ) {
                             echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                             $uploadOk = 0;
                         }
                         // Check if $uploadOk is set to 0 by an error
                         if ($uploadOk == 0) {
                             echo "Sorry, your file was not uploaded.";
                         // if everything is ok, try to upload file
                         } else {
                             //if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                if(move_uploaded_file($_FILES["fileToUploadSuper"]["tmp_name"], "../../Images/supersubImg/" . $newfilename.'.jpg')){
                                 echo "The file ". basename( $_FILES["fileToUploadSuper"]["name"]). " has been uploaded.";
                                 header('Location:../Shop_CategorieInsertion.php');
                             } else {
                                 echo "Sorry, there was an error uploading your file.";
                             }
                           } 


    










   if(isset($_POST['supercategory']))    
   {
       $supersubcat=$_POST['subcata'];
  
       $prodname=$_POST['Productname'];  
       $prodname = ucfirst($prodname);
       $price=$_POST['Price'];
       $description=$_POST['Description'];
       $check = mysqli_query($con,"SELECT * FROM `shop_supersub` where `Name`='$supersubcat'");
       while($row = mysqli_fetch_array($check))
                       { 
                          $supersubID=$row[0];
                          
                       }
                        
                    
                        $query="INSERT INTO `shop_products`(`Name`, `Price`, `Description`, `superSubID`)VALUES ('$prodname','$price','$description','$supersubID')";
                        $result=mysqli_query($con,$query);
                        echo $query;
                      header('Location:../Shop_CategorieInsertion.php');

$check=mysqli_query($con,"SELECT * from shop_products ORDER BY `Product_ID` desc limit 1" );
while($row=mysqli_fetch_array($check)){
$proid=$row[0];

}

$target_dir = "..\Images/";
 $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

 $name = $proid;

 $newfilename=$name ;
 echo $newfilename;
 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 // Check if image file is a actual image or fake image
 //if(isset($_POST["submit"])) {
     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
     if($check !== false) {
         echo "File is an image - " . $check["mime"] . ".";
         $uploadOk = 1;
     } else {
         echo "File is not an image.";
         $uploadOk = 0;
     }
 }
 // Check if file already exists
 if (file_exists($target_file)) {
     echo "Sorry, file already exists.";
     $uploadOk = 0;
 }
 // Check file size
 if ($_FILES["fileToUpload"]["size"] > 5000000) {
     echo "Sorry, your file is too large.";
     $uploadOk = 0;
 }
 // Allow certain file formats
 if( $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
 && $imageFileType != "gif" ) {
     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
     $uploadOk = 0;
 }
 // Check if $uploadOk is set to 0 by an error
 if ($uploadOk == 0) {
     echo "Sorry, your file was not uploaded.";
 // if everything is ok, try to upload file
 } else {
     //if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "../../Images/ProductImages/" . $newfilename.'.jpg')){
         echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
         header('Location:../Shop_CategorieInsertion.php');
     } else {
         echo "Sorry, there was an error uploading your file.";
     }
   }  
              

                    
 ?>


