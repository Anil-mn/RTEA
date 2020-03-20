<?php
SESSION_START();
if(!isset($_SESSION['id'])){
  echo $_SESSION['id'];
	header('location:index.html');
 }
 else{
   //$id=$_SESSION['id'];
 
}




// Function calling from market memebership
 Function GenAdd(){
    
$id=$_SESSION['id'];

// Collectiong Add id and product name 
include('../../BackEnd/Php/connection.php');
$marketADs = mysqli_query($con,"SELECT * FROM `market_add` Order by `ADD_ID` DESC limit 1");
while($row=mysqli_fetch_array($marketADs)){
    $add_id = $row[0];
    $productName = $row[4];
    //echo $productName;
}


//selecting product ID for further process
$SelectProductId = mysqli_query($con,"SELECT * FROM `shop_products` WHERE `Name` like '%$productName%'");
while($row=mysqli_fetch_array($SelectProductId)){
    $productID = $row[0];
    
    
    //echo $productID;
}


//collectin add details like dude date
$addDetails = mysqli_query($con,"SELECT * FROM `market_addcollection` Where `id` = '$add_id'");
while($row=mysqli_fetch_array($addDetails)){
    $DueDate= $row[2];
    //echo $DueDate;
}



// Select shop IDs after perfoming some constrains 
$ShopDetais =  mysqli_query($con,"SELECT * FROM `shop_link` WHERE `Product_ID` = '$productID' and `NumberOf` > 30");
while($row=mysqli_fetch_array($ShopDetais))
{
    $ShopIdForName = $row[2];
    //echo $ShopIdForName ;
    
    // Collecting Shop Avilavle slots from Shop info
    $SlotInShop = mysqli_query($con,"SELECT * FROM `shop_info` Where ShopID = '$ShopIdForName'");
    while($row1=mysqli_fetch_array($SlotInShop))
    {
        $ShopSlotAvail = $row1[6];
       // echo $ShopIdForName.'of'.$ShopSlotAvail;
       //echo $ShopSlotAvail;
       //check add already exist or not

       //If slot is not available in the shop reject
       if($ShopSlotAvail==0);
           {
              echo '       .no slot available in this shop      .';
           }
      
           //if slot is available then place add
       if($ShopSlotAvail > 0)  {
                   $getAdd = mysqli_query($con,"SELECT 	* FROM `market_shopads` where `AddID`='$add_id' and `ShopID`='$ShopIdForName'");
                   $check = mysqli_fetch_array($getAdd);
        
                    if($check == true) //check the add already placed or not
                     {
                        echo "        .Add Already placed in shop    .";
                     }
                   else 
                     {
                          echo $ShopIdForName.' '.$add_id.' '.$ShopSlotAvail.' '.$DueDate;
                          $query ="INSERT INTO `market_shopads`(`ShopID`, `AddID`, `SoltNumber`, `DueDate`) VALUES ('$ShopIdForName','$add_id','$ShopSlotAvail','$DueDate')";
                          $insertIntoShopSlot = mysqli_query($con,$query );
                          if($insertIntoShopSlot == true)
                            {
                                echo "     .inserted    .";
                                $updateShop = mysqli_query($con,"UPDATE `shop_info` SET `AddSlots` = `AddSlots`-1 Where ShopID='$ShopIdForName'" );
                             }
                     }

            }
    }

}  




// Selecting number of shops that add placed
$shops = mysqli_query($con,"SELECT count(`ID`) FROM `market_shopads` WHERE `AddID` = '$add_id'");
while($row=mysqli_fetch_array($shops)){
    $numberofshops = $row[0];
    //$numberofproducts = $row[1];
   // echo $numberofshops;
  //  echo $numberofproducts ;
}






//User Count 

$usersTrans = mysqli_query($con,"SELECT * FROM `user_transactions` WHERE `ProductID` = '$productID' and `amount`>30");
while($row=mysqli_fetch_array($usersTrans))
{
    $logID = $row[1];
    echo '   .Log id='.$logID;

    //echo $logID;
    $userslog = mysqli_query($con,"SELECT `User_ID` FROM `user_log` WHERE `LogID` = '$logID'");
    while($row1=mysqli_fetch_array($userslog))
    {
       $UserID = $row1[0];
       echo '  .User id='.$UserID;
       $checkSlotUser1 =mysqli_query($con,"SELECT * FROM `market_userads` where `User_id`='$UserID' and Add_ID = '$add_id'");
          $num1=mysqli_fetch_array($checkSlotUser1);
         if($num1 == true){
         //echo $num1[0];
        }
       else {
             $insertToUserSlot = "INSERT INTO `market_userads`(`User_id`, `Add_ID`, `SlotNumbers`, `DueDate`) VALUES ('$UserID','$add_id','1','$DueDate')";
             $result = mysqli_query($con,$insertToUserSlot);
             echo "This is not";
        }
     
        $checkSlotUser =mysqli_query($con,"SELECT * FROM `market_userads` where `User_id`='$UserID' order by `SlotNumbers` DESC limit 1");
       while($num=mysqli_fetch_array($checkSlotUser))
        {
             $slot = $num[3];
             if ($slot > 10)
                {
                    echo "    .no slot availble in this user.     ";
                }
             else 
               {

                 $checkAlreaydplacedOrNot = mysqli_query($con,"SELECT * FROM `market_userads` Where `User_id`= '$UserID' and `Add_ID` = '$add_id'");
                  $ifnot = mysqli_fetch_array($checkAlreaydplacedOrNot);
                 if($ifnot ==true)
                   {
                       echo '     .add already placed in this user.    ';
                   }
                 else 
                   {    
                        
                        $slot=$slot+1;
                        echo '     :slot === '.$slot;
                        $insertToUserSlot = "INSERT INTO `market_userads`(`User_id`, `Add_ID`, `SlotNumbers`, `DueDate`) VALUES ('$UserID','$add_id','$slot','$DueDate')";
                        $result = mysqli_query($con,$insertToUserSlot);
                        echo $UserID;
                   }
           
              }
        }
       
       

    }  
}


// To insert users first time








$countOfusers = mysqli_query($con,"SELECT COUNT(`SlotNumbers`) FROM `market_userads` where `Add_ID` = '$add_id'");
while ($row3 = mysqli_fetch_array($countOfusers))
{
    $TotalUserCount = $row3[0];
}
//echo $UserID;









//echo $counts;
//echo $TotalUserCount;
//Generating and posting add in the ads table for show to invtery
$checkmarker_ads = mysqli_query($con,"SELECT * FROM `market_ads` Where AddID = '$add_id'");
$result2 = mysqli_fetch_array($checkmarker_ads);
if($result2 == true){
    echo "    .Alreday exist    .";
}
else {
$query="INSERT INTO `market_ads`(`invID`, `ProductID`, `AddID`, `NoOfShops`, `NoOfUsers`,`DueDate`) VALUES ('$id','$productID','$add_id','$numberofshops','$TotalUserCount','$DueDate')";
$result = mysqli_query($con,$query);

}
}
?>