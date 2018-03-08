/* global $ */

// declaring the variables
 var argSubTotal;

function calcSub(){
    

// adding functionality behind the buttons on ebus1 and implementing their values    
 if(document.getElementById('Salesforce(SaaS)').checked) {
    argSubTotal = 100;
}

 if(document.getElementById('Cloud9(PaaS)').checked) {
     argSubTotal = 200;
}

if(document.getElementById('AWS(IaaS)').checked) {
    argSubTotal = 300;
}

if (document.getElementById('Gmail(CaaS)').checked) {
    argSubTotal = 400;
}
// passing the values of the function to the calculation function
  calcDisVatTotal(argSubTotal);

}


function calcDisVatTotal(parmSubTotal){
// Declaring variables   
   var subTotal = argSubTotal;
   var discountAmt;
   var vatAmt;
   var totalPrice;
// The calculations   
    discountAmt = subTotal * 0.05;
    vatAmt = subTotal * 0.10;
    totalPrice = ((subTotal - discountAmt)+ vatAmt);
// passing the values to the display function
    display(subTotal, discountAmt, vatAmt, totalPrice);
}


function display(parm1, parm2, parm3, parm4){
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discount").value = parm2;
    document.getElementById("vat").value = parm3; 
    document.getElementById("total").value = parm4;
    
    enablebtnProceed();
}


function enablebtnProceed() {
   $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}