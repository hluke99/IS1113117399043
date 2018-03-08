<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <link rel="stylesheet" href="Ebusdesign.css" type="text/css" />
        
        <!-- JQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        
    </head>
    
    <!-- Content for online shop -->
    <body class="body1">
       <div class="input">
        <h4>Select a Product</h4>
        
        <br/>
        <!-- PHP post method for saving product price -->
        <form method="POST" action="Ebus2.php">
        
        <label for="Salesforce (SaaS)">
        <input type="radio" Id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
        Salesforce @ $100
        </label>
        
        <br/>
        <!-- Labels for the 4 different services offered in the online shop -->
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
        <!-- Calling Javascript function to add functionality to product selector -->
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php" class="calc">Clear Choice</a>
    </div>
    
     <div class="footer">
         <h5>Changed your mind?</h5>
        <a href="../homepage.html" class="cancel">Cancel</a>
    </div>
    
    </body>
</html>