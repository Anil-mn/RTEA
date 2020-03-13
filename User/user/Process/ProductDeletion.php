<?php
 include('../../../BackEnd/php/connection.php');
 $filename = basename($_SERVER['REQUEST_URI']);

 $filename =substr($filename,20);
 echo $filename;





?>