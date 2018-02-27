<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        
        <link rel="stylesheet" href="Ebusdesign.css" type="text/css" />
        
    </head>
    <body class="body3">
        <div class = receipt>
        <h4>RECEIPT</h4>
    
    
        
    <?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    ?>
    <?php
    //Echo session varibales that were set on previous page
    echo "Total is " . $_SESSION["total"] . ".";
    ?>
    <br/>
    <?php
    echo "Name is : $name" . "."
    ?>
    <br/>
    <?php
    echo "Email is: $email" . "."
    ?>
        <br/>
        <br/>
        <h4>Thank you for your purchase from Cloudy Connections!</h4>
        <br/>
        <a href="../homepage.html">Return Home</a>
        
        </div>
    </body>
</html>