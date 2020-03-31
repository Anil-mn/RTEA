<?php
// Data Base Connection
$con = mysqli_connect("localhost","root","","rtea"); 
 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>    
