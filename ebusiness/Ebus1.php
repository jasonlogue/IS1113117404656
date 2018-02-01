<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!-- JQuery -->
        <script src="https//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        </head>  
        
        <body>
            
            <h4> Select a Product</h4>
            
            </br>
            <form method="POST" action="Ebus2.php">
                
                <Label for="salesforce">
                <input type="radio"  id="salesforce" name="product" checked onClick="disablebtnproceed()"/>
                SalesForce @ $100
                </label>
                
                </br>
                
                 <Label for="aws">
                <input type="radio"  id="aws" name="product" onClick="disablebtnproceed()"/>
                AWS @ $300
                </label>
                
                </br>
                </br>
                
                 <Label for="subtotal">
                     Sub Total
                <input type="text"  id="subtotal" value="0.00" readonly/>
                </label>
                
                </br>
            
                <Label for="total">
                    Total
                <input type="text"  id="total" value="0.00" readonly/>
                </label>
                
                </br>
                
                <button type="submit" id="btnProceed" disabled> Add to Shopping Cart</button>
                
            </form>
            
            </br>
            <button onClick="calcSub()">Calculate Cost</button>
            <a role="button" href="Ebus1.php">Clear Choice</a>
            
        </body>
</html>