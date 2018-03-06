<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    
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
        

        <h1 class="paymentheading">Please enter your payment details</h1>
            
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
            
            <button class="paymentvalidate" onClick="validateDetails()">Validate</button>
            <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"];
            ?>
        
    </body>
</html>
