<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        
        <link rel="stylesheet" href="ebus.css" type="text/css"/>
        
        <ul>
            <li><a href ="home.html">Home</a></li>
            <li><a href ="aboutcloud.html">About Cloud</a></li>
            <li><a href ="products.html">Products</a></li>
            <div class="logo">
                <img src="../../Images/logo.png">
            </div>
        </ul>
        
        <!-- Setting font -->
        <link href="https://fonts.googleapis.com/css?family=Mukta+Malar" rel="stylesheet">
        
    </head>
    
    <body>
        
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
        <h1 class="ebus3heading">Purchase Receipt</h1>
        
        <?php  
        // Bring across variables
          $_SESSION["name"] = $_POST["name"];
          $_SESSION["email"] = $_POST["email"];
        ?>
        <div class="receiptinfo">
            
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
        
        </div>
        
        <h3 class="thankyou">Your order has been placed. Thank you for shopping with us! An email has been sent to you with an attached invoice detailing your purchase. We hope to do 
        business with you again soon.</h3>
        
    </body>
</html>
