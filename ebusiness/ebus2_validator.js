/* global $ */ 

function validateDetails(){
  
    var pin;
    var name;
    var email;
    
    pin = document.getElementById("user_pin").value;
   { 
    if (pin == ""){
        alert("Please Enter your PIN");
        
    }
    else if (String(pin).length <4){
        alert("Please Ensure you PIN is Correct");
        
    }
    
    name = document.getElementById("name").value;
     if(name == ""){
        alert("Please enter your Name");
        
}
   else if(String(name).length < 2){
       alert("Please Ensure your details are correct");
       
   }
   
   email = document.getElementById("email").value;
   
   if(email == ""){
       alert("Please enter your Email");
       
   }
    else if(String(email).length < 5){
        alert("Please enter a valid email");
        
    }
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