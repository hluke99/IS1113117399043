<?php
//start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <h4>Please enter your payment details</h4>
        
        
            <form action="Ebus3.php" method="POST">
                <fieldset>
                    
                </fieldset>


                    <label for="user_pin">PIN:</label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">

                    <br/>
                    
                    <label for="Name">Name:</label>
                    <input type="text" id="name" placeholder="Name" maxlength="25">
                    
                    <br/>
                    
                    <label for="Email">Email:</label>
                    <input type="text" id="email" placeholder="Email" maxlength="50">
                    
                    <br/>
                
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            
        
        <script type="text/javascript" src="ebus2_validator.js" ></script>
   
    <?php
    //set session variables
    $_SESSION["total"] = $_POST["total"];
    
    $_SESSION["name"] = $_POST["name"];
    
    $_SESSION["email"] = $_POST["email"];
    ?>
    
    </body>
</html>