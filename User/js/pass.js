// Paswword validation

function test_pn() { 
  
            var b=document.getElementById("phoneNumber").value;
           
            
            if (b.match(/[0-9]/g) && b.length == 10) 
            {
            
               
            }
            else
              
                alert("Invalid Phone number")
        }
        function test_ps() { 
            var str = document.getElementById("password").value; 
    
                if (str.match(/[a-z]/g) && str.match( 
                    /[A-Z]/g) && str.match( 
                    /[0-9]/g) && str.match( 
                        /[^a-zA-Z\d]/g) && str.length >= 8)  
                    {
                 
                
                    }
            else 
    
                alert("Invalid Password")
} 