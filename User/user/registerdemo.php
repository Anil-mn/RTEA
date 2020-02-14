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

$check= mysqli_query($con, "SELECT * FROM `location` where `Name`='$Location'");
while($row = mysqli_fetch_array($check)){
    $Location= $row[0];

}
$query="INSERT INTO `user_info`( `Name`, `PhoneNumber`, `Email_ID`, `Password`, `Gender`, `Dob`, `Location`) VALUES
('$userName','$phoneNumber','$email_ID','$password','$Gender','$dob','$Location')";
$result=mysqli_query($con,$query); 

}

header('location:login.html')
else 
echo "not";
?>

