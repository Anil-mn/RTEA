<?php
include('../../BackEnd/Php/connection.php');

if (isset($_POST['submit']))
{
$userName = $_POST['userName'];

$phoneNumber = $_POST['phoneNumber'];            
$email_ID = $_POST['emailId'];
$password = $_POST['password'];
$Gender = $_POST['Gender'];
$dob = $_POST['dob'];
$Location = $_POST['location'];

$target_dir = "profileImg/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
echo $target_file ;


$check= mysqli_query($con, "SELECT * FROM `location` where `Name`='$Location'");
while($row = mysqli_fetch_array($check)){
    $Location= $row[0];

}
$query="INSERT INTO `user_info`( `Name`, `PhoneNumber`, `Email_ID`, `Password`, `Gender`, `Dob`, `Location`) VALUES
('$userName','$phoneNumber','$email_ID','$password','$Gender','$dob','$Location')";
$result=mysqli_query($con,$query); 


$name = $phoneNumber;
$newfilename=$name ;
 //$target_dir = "..\profileImg/";
 //$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

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
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "..\images/" . $newfilename.'.jpg')){
         echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
         //header('location:index.html');
     } else {
         echo "Sorry, there was an error uploading your file.";
     }
 }






//header('location:index.html')

?>
