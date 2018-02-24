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
        
    </head>
    
    <body>
        
        <h4>Please enter your payment details</h4>
        
            <form action="ebus3.php" method="POST">

                    <label for="user_pin">PIN</label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    
                    <br>
                    
                     <label for="user_name">Name</label>
                    <input type="name" id="user_name" placeholder="Joe Bloggs">
                    
                    <br>
                    
                     <label for="user_email">Email Address</label>
                    <input type="email" id="user_email" placeholder="joebloggs@ucc.ie" >
                    
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
