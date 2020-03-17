<?php


SESSION_START();
$disID=$_SESSION['phn_No'];
echo $disID;
include('../../BackEnd/Php/connection.php');
$DisInfo =   mysqli_query($con,"SELECT * FROM `distribution_info` Where `Distribution_ID`='$disID'");
while($row = mysqli_fetch_array($DisInfo))
{
 $DisLocation =$row[1];
}


                              
                              $query = mysqli_query($con,"SELECT * FROM `distributor_orders` WHERE `Distributor_ID` = '$disID' ");
                              while ($row = mysqli_fetch_array($query))
                              {
                                $reqID = $row[2];
                                //echo $reqID;
                              
                              $result=mysqli_query($con,"SELECT * FROM `dis_shopreq` Where `ReqID` = '$reqID'");
                              while($row1 = mysqli_fetch_array($result))
                              { 
                               
                                $ShopId = $row1[1];
                                $productName = $row1[2];
                                $quntity = $row1[3];
                                //echo $ShopId  ;
                                $shopInfo = mysqli_query($con,"SELECT * FROM `shop_info` Where `ShopID` = '$ShopId'");
                                while($row2 = mysqli_fetch_array($shopInfo))
                                { 
                                
                                 $shopName =  $row2[2];
                                 $location =  $row2[4];
                                // echo $shopName;

                              echo $shopName.$location.$productName.$quntity;
  
                               }
                              }
                            }

?>