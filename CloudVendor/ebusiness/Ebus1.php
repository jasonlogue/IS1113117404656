<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
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
            
        <div class="exitbutton">
        <p><a href="../homepage.html">&larr;Exit</a></p>
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
            
            <div class="shopheading">
            <h1>Select a Product</h1>
            </div>
    <br>
    <br>
    <br>
    <br>
    <br>
            
            <div class="productselection">
            <form method="POST" action="Ebus2.php">
              
              <label for="salesforce" class="rb_salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br>
              
              <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                Cloud9 @ $200
              </label>
              
              <br>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
              </label>
              
              <br>
              
              <label for="gmail">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
              </label>
              
              <br>
              
              <!-- Price Summary -->
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
              </label>
              
              <br>
              
              <label for="discount">
                Discount @ 5%
                <input type="text" id="discount" value="0.00" readonly/>
              </label>
              
              <br>
              
              <label for="vat">
                VAT @ 10%
                <input type="text" id="vat" value="0.00" readonly/>
              </label>
              
              <br>
              
              <label for="total" class="txt_total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
              </label>
    
              <br/>
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            </div>
            <button onClick="calcSub()">Calculate Cost</button>
            <br>
            <a role="button" href="Ebus1.php">Clear Choice</a>
    
    </body>
</html>