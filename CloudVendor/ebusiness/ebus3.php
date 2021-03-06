<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8"/>
        <title>Receipt</title>
        
        <link rel="stylesheet" href="ebus.css" type="text/css"/>
        
        <!-- Creating navbar -->
        <ul>
            <li><a href ="../../CloudVendor/home.html">Home</a></li>
            <li><a href ="../../CloudVendor/aboutcloud.html">About Cloud</a></li>
            <li><a href ="../../CloudVendor/products.html">Products</a></li>
            <img class="logo" src="../../Images/logo.png">
        </ul>
        
        <!-- Setting font -->
        <link href="https://fonts.googleapis.com/css?family=Mukta+Malar" rel="stylesheet">
        
    </head>
    
    <body>
            
            <!-- Adding button --> 
            <div class="exitbutton">
                <a href="../../homepage.html">&larr;Exit</a>
            </div>
            
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
        
        <!-- Displaying receipt info -->
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
            echo "Total: $" . $_SESSION["total"] . ".";
            ?>
        </p>
        
        </div>
        
        <h3 class="thankyou">Your order has been placed. Thank you for shopping with us! An email has been sent to you with an attached invoice detailing your purchase. We hope to do 
        business with you again soon.</h3>
        
    </body>
</html>
