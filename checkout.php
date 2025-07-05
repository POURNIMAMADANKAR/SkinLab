<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    
<div class="container">
    <div class="checkoutLayout">

        
        <div class="returnCart">
            <a href="/">keep shopping</a>
            <h1>List Product in Cart</h1>
            <div class="list">

                <div class="item">
                    <img src="./image/p1.png">
                    <div class="info">
                        <div class="name">Face Cream</div>
                        <div class="price">&#8377;400/1 ITem</div>
                    </div>
                    <div class="quantity">2</div>
                    <div class="returnPrice">&#8377;800</div>
                </div>

            </div>
        </div>


        <div class="right">
            <h1>Checkout</h1>

            <div class="form">
                <div class="group">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name">
                </div>
    
                <div class="group">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" id="phone">
                </div>
    
                <div class="group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address">
                </div>
    
                <div class="group">
                    <label for="country">State</label>
                    <select name="State" id="state">
                        <option value="">Choose..</option>
                        <option value="">Maharashtra</option>
                    </select>
                </div>
    
                <div class="group">
                    <label for="city">City</label>
                    <select name="city" id="city">
                        <option value="">Choose..</option>
                        <option value="">Akola</option>
                        <option value="">Amravati</option>
                        <option value="">Buldhana</option>
                        <option value="">Nagpur</option>
                        <option value="">Wardha</option>
                        <option value="">Pune</option>
                    </select>
                </div>
            </div>
            <div class="return">
                <div class="row">
                    <div>Total Quantity</div>
                    <div class="totalQuantity">2</div>
                </div>
                <div class="row">
                    <div>Total Price</div>
                    <div class="totalPrice">&#8377;800</div>
                </div>
            </div>
            <button class="buttonCheckout" style="text-align: center;">CHECKOUT</button>
            </div>
    </div>
</div>


<script src="checkout.js"></script>

</body>
</html>