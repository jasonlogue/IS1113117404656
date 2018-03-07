<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8"/>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    
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
                <a href="../homepage.html">&larr;Exit</a>
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
        
        <h1 class="paymentheading">Please enter your payment details</h1>
            
            <!-- Creating form -->
            <form action="ebus3.php" method="POST">

                    <label class="pin" for="pin">PIN:</label>
                    <input class="txtpin" type="password" id="pin" placeholder="Card PIN" maxlength="4">
                    
                    <br>
                    
                     <label class="paymentname" for="name">Name:</label>
                    <input class="txtname" type="name" id="name" name="name" placeholder="Joe Bloggs">
                    
                    <br>
                    
                     <label class="paymentemail" for="email">Email Address:</label>
                    <input class="txtemail" type="email" id="email" name="email" placeholder="joebloggs@ucc.ie" >
                    
                    <br>
                    
                <button class="paymentproceed" type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
            </form>
            
            <br/>
            
            <!-- Adding button -->
            <button class="paymentvalidate" onClick="validateDetails()">Validate</button>
            <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"];
            ?>
        
    </body>
</html>
