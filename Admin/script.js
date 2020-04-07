//Page redirection from Admin index
function move(n){
    if(n==0){
        window.location="UserValidation.php";
    }
    else if(n==1){
        window.location="ShopValidation.php";
    }
    else if(n==2){
        window.location="distributionvali.php";
    }
    else
    {
        window.location="marketingvali.php";
    }
}