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
    //Echo session varibales that were set on previous page
    echo "Total is " . $_SESSION["total"] . ".";
    ?>
    <br/>
    <?php echo "Name: " . $_SESSION["name"] . ".";
    ?>
    <br/>
    <?php echo "Email: " . $_SESSION["email"] . ".";
    ?>
    
</html>