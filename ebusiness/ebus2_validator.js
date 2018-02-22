/* global $ */

function validateDetails(){
    
    var pin;
    var name;
    var email;
    
    pin = document.getElementById("user_pin").value;
    
    if (pin == ""){
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    
    
    name = document.getElementById("name").value;
    if (name == ""){
        alert("Please enter your Name");
    }
    else if (String(name));
    
    
    email = document.getElementById("email").value;
    
    if (email ==""){
        alert("Please enter your Email")
    }
    else{
        enablebtnPurchase();
    }
}

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}