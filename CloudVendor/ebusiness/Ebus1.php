<!DOCTYPE html>
<html lang="en">
    <head>
      
      <meta charset="utf-8"/>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
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
            
            <div class="shopheading">
              <h1>Select a Product</h1>
            </div>
    <br>
    <br>
    <br>
    <br>
    <br>
           
           <!-- Creating form --> 
          <div class="productselection">
            <form method="POST" action="Ebus2.php">
              
            
              <label for="salesforce" class="lblsalesforce">
                <input class="rdbsalesforce" type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br>
              
              <label for="cloud9" class="lblcloud9">
                <input class="rdbcloud9" type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                Cloud9 @ $200
              </label>
              
              <br>
              
              <label for="aws" class="lblaws">
                <input class="rdbaws" type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
              </label>
              
              <br>
              
              <label for="gmail" class="lblgmail">
                <input class="rdbgmail" type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
              </label>
              
              <br>
              
              <!-- Price Summary -->
              <label for="subtotal" class="lblsubtotal">
                Sub Total:
                <input class="txtsubtotal" type="text" id="subtotal" value="0.00" readonly/>
              </label>
              
              <br>
              
              <label for="discount" class="lbldiscount">
                Discount @ 5%:
                <input class="txtdiscount" type="text" id="discount" value="0.00" readonly/>
              </label>
              
              <br>
              
              <label for="vat" class="lblvat">
                VAT @ 10%:
                <input class="txtvat" type="text" id="vat" value="0.00" readonly/>
              </label>
              
              <br>
              
              <label for="total" class="lbltotal">
                Total:
                <input class="txttotal" type="text" id="total" name="total" value="0.00" readonly/>
              </label>
    
              <br>
              
          </div>   
             
            <!-- Adding buttons -->
            <button class="btnaddtocart" type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            <a class="calcsubbtn" onClick="calcSub()">Calculate Cost</a>
            <br>
            <a class="clearbtn" href="Ebus1.php">Clear Choice</a>
              
          </form>
            

          
    </body>
</html>