/* global $ */ 

function validateDetails(){
// declaring the variables
    var pin;
    var name;
    var email;
//ensuring the user cannot leave the PIN input box blank or less then 4 digits
    pin = document.getElementById("user_pin").value;
   { 
    if (pin == ""){
        alert("Please Enter your PIN");
        
    }
    else if (String(pin).length <4){
        alert("Please Ensure you PIN is Correct");
        
    }
//ensuring the user cannot leave the name input box blank or less then 2 digits    
    name = document.getElementById("Name").value;
     if(name == ""){
        alert("Please enter your Name");
        
}
   else if(String(name).length < 2){
       alert("Please Ensure your details are correct");
       
   }
//ensuring the user cannot leave the email input blank or less then 5 digits
   email = document.getElementById("Email").value;
   
   if(email == ""){
       alert("Please enter your Email");
       
   }
    else if(String(email).length < 5){
        alert("Please enter a valid email");
        
    }
// telling the function to enable the purchase button once all validations had been passed
   else {
   enablebtnPurchase();
}
   }
   }





 function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
   }

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}