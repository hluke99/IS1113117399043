/* global $ */

 var argSubTotal;

function calcSub(){
    

    
    if(document.getElementById('salesforce').checked) {
    argSubTotal = 100;
}

 if(document.getElementById('cloud9').checked) {
     argSubTotal = 200;
}

if(document.getElementById('aws').checked) {
    argSubTotal = 300;
}

if (document.getElementById('gmail').checked) {
    argSubTotal = 400;
}

  calcDisVatTotal(argSubTotal);

}


function calcDisVatTotal(parmSubTotal){
   
   var subTotal = argSubTotal;
   var discountAmt;
   var vatAmt;
   var totalPrice;
    
    discountAmt = subTotal * 0.05;
    vatAmt = subTotal * 0.10;
    totalPrice = ((subTotal - discountAmt)+ vatAmt)

    display(subTotal, discountAmt, vatAmt, totalPrice)
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