/* global $ */

function validateDetails(){
   
   
    
    var pin;
    var name;
    var email;
    
    pin = document.getElementById("user_pin").value;
    
    if (pin == ""){
        alert("Please Enter your PIN");
    }
    else if (String(pin).length <4){
        alert("Please Ensure you PIN is Correct");
    }
    else {
        enablebtnPurchase()
    }
    

    name = document.getElementById("name").value;
    
     if(name == ""){
        alert("Please enter your Name");
}
   
   
   email = document.getElementById("email").value;
   
   if(email == ""){
       alert("Please enter your Email");
   }
}




 function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
   }

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}