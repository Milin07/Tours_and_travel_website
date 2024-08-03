<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>

    <link rel="stylesheet" href="style 1.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<!-- cart section starts -->
<div class="cartstart">
    <div class="headercart">
      <p class="logo">Packages Cart</p>
      <div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></div>
    
    </div>
      <div class="containercart">
        <div id="root"></div>
          <div class="sidebar">
            <div class="headcart"><p>My Cart</p></div>
              
              <ul id="cartItemsList">
            <!-- This list will display the items in the cart -->
        </ul>
        
                <div class="footcart">
                  <h3>Total</h3>
                  <h2 id="total"> Rs 0.00</h2>
                </div>
                
    
            </div>
      </div>
      <button id="checkout-button" class="btncart-check" onclick="redirectToCheckout()">Checkout</button>
    </div>

<script src="script 1.js"></script>
</body>
</html>