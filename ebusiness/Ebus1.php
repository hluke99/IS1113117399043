<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!-- JQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        
    </head>
    
    <body>
        
        <h4>Select a Product</h4>
        
        <br/>
        
        <form method="POST" action="Ebus2.php">
        
        <label for="Salesforce (SaaS)">
        <input type="radio" Id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
        Salesforce @ $100
        </label>
        
        <br/>
        
        <label for="Cloud9 (PaaS)">
        <input type="radio" Id="cloud9" name="product" onClick="disablebtnProceed()"/>
        Cloud9 @ $200
        </label>
        
        <br/>
        
        <label for="AWS (IaaS)">
        <input type="radio" Id="aws" name="product" onClick="disablebtnProceed()"/>
        AWS @ $300
        </label>
        
        <br/>
        
        <label for="Gmail (CaaS)">
        <input type="radio" Id="gmail" name="product" onClick="disablebtnProceed()"/>    
        Gmail @ $400
        </label>
        
        <br/>
        <br/>
        
        <label for="subtotal">
        Sub Total
        <input type="text" Id="subtotal" value="0.00" readonly/>
        </label>
        
        <br/>
        
        <label for="discount">
        Discount @ 5%
        <input type="text" id="discount" name="discount" value="0.00" readonly/>
        </label>
        
        <br/>
        
        <label for="vat">
        VAT @ 10%   
        <input type="text" id="vat" name="vat" value="0.00" readonly/>
        </label>
        
        <br/>
        
        <label for="total">
        Total
        <input type="text" id="total" name="total" value="0.00" readonly/>
        </Label>
        
        <br/>
        
        <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
        
        </form>
        
        <br/>
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
        
    </body>
</html>