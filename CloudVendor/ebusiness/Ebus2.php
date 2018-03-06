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
            <li><a href ="../CloudVendor/home.html">Home</a></li>
            <li><a href ="..CloudVendor/aboutcloud.html">About Cloud</a></li>
            <li><a href ="../CloudVendor/products.html">Products</a></li>
            <div class="logo">
                <img src="../Images/logo.png">
            </div>
        </ul>
        
    </head>
    
    <body>
        
        <h4>Please enter your payment details</h4>
        
            <form action="ebus3.php" method="POST">

                    <label for="pin">PIN</label>
                    <input type="password" id="pin" placeholder="Card PIN" maxlength="4">
                    
                    <br>
                    
                     <label for="name">Name</label>
                    <input type="name" id="name" name="name" placeholder="Joe Bloggs">
                    
                    <br>
                    
                     <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="joebloggs@ucc.ie" >
                    
                    <br>
                    
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
            </form>
            
            <br/>
            
            <button onClick="validateDetails()">Validate</button>
            
            <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"];
            ?>
        
    </body>
</html>
