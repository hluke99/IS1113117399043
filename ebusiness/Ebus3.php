<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>RECEIPT</h4>
    </body>
    
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
    echo "Name is : $name " . "."
    ?>
    <br/>
    <?php
    echo "Email is: $email " . "."
    ?>
    
</html>