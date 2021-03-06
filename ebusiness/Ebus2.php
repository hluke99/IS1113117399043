<?php
//start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8"/>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <link rel="stylesheet" href="Ebusdesign.css" type="text/css" />
        
    </head>
    <body class="body2">
        <div class="input">
        <h4>Please enter your payment details</h4>
        
            <!-- PHP post method used here to save users name and email for use in receipt -->
            <form method="POST" action="Ebus3.php">
                

                        
                    <label for="user_pin">PIN:</label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">

                    <br/>
                    
                    <label for="Name">Name:</label>
                    <input type="text" id="Name" name="name" placeholder="Name" maxlength="25">
                    
                    <br/>
                    
                    <label for="Email">Email:</label>
                    <input type="text" id="Email" name="email" placeholder="Email" maxlength="50">
                    
                    <br/>
                
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              </form>
            
            
            <br/>
            
            <!-- Calling the validate function from ebus2validator to ensure details entered are usable -->
            <button onClick="validateDetails()">Validate</button>
            </div>
        
        <div class="footer">
         <h5>Changed your mind?</h5>
        <a href="../homepage.html" class="home2">Cancel Purchase</a>
        <a href="Ebus1.php" class="change">Change Selection</a>
        </div>
        
        <script src="ebus2_validator.js" ></script>
        
        
       
    <?php
    //set session variables
    $_SESSION["total"] = $_POST["total"];
    
    $_SESSION["name"] = $_POST["name"];
    
    $_SESSION["email"] = $_POST["email"];
    ?>
    
    </body>
</html>