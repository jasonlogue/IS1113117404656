<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        
        <link rel="stylesheet" href="Ebus.css" type="text/css"/>
    </head>
    
    <body>
        <h4 class="ebus3_heading">Purchase Receipt</h4>
        
        <?php  
        // Bring across variables
          $_SESSION["name"] = $_POST["name"];
          $_SESSION["email"] = $_POST["email"];
        ?>
        
        <p>
            <?php
            // Display the user's name
            echo "Name: " . $_SESSION["name"] . ".";
            ?>
        </p>
        
        <p>
            <?php
            // Display the user's email
            echo "Email: " . $_SESSION["email"] . ".";
            ?>
        </p>
        
        <p>
            <?php
            // Display the total price
            echo "Total: " . $_SESSION["total"] . ".";
            ?>
        </p>
    </body>
</html>
