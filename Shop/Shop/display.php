<?php
session_start();
$product = $_SESSION['product'];
echo $product;
?>