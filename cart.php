<?php
include('connect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Cart The shop</title>
    <link rel="icon" href="image N/PIC.jpg">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color:rgb(224, 221, 221);
    padding: 10px 80px;
}

.logo1 img {
   width: 200px;
    
}
   
 


.search-bar input {
    width: 300px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.user-cart {
    display: flex;
    gap: 10px;
}

.user-cart a {
    text-decoration: none;
    font-size: 16px;
}

a:hover{
        text-decoration:underline;
      

    }
.login-button{
    display:inline-block;
        margin:10px o;
        padding:10px 20px;
        background-color:blue;
        color:white;
        border-redius:5px;

}


nav ul {
    display: flex;
    list-style:none;
    background-color: #333;
   
}

nav ul li {
    margin: 0px 50px;
    
}

nav ul li a {
    color: white;
    padding: 10px;
    display: block;
    text-decoration: none;
    
}

nav ul li a:hover {
    background-color: #555;
}
/* Basic Styling */
body {
    font-family: Arial, sans-serif;
}

main {
    display: flex;
    justify-content: space-between;
    padding: 20px;
}

.cart-items {
    width: 60%;
}

.cart-items .item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px;
    border-bottom: 1px solid #ccc;
}

.cart-items .item img {
    width: 50px;
}

.cart-items .quantity-controls {
    display: flex;
    align-items: center;
}

.cart-items .quantity-controls button {
    padding: 5px;
}

.summary {
    width: 30%;
    border: 1px solid #ccc;
    padding: 30px;
}

.summary p {
	padding: 10px;
}

.summary h3 {
	padding: 20px;
}

.summary label {
	padding: 10px;
}

/* Footer Container */
.footer-container {
    display: flex;
    justify-content: space-between;
    padding: 40px;
    background-color: #343131;
    color: #efe6e6;
}

.footer-column {
    flex-basis: 22%;
    margin-right: 20px;
}

.footer-column h3 {
    margin-bottom: 15px;
    font-size: 18px;
    color: #efe6e6;
}

.footer-column address,
.footer-column ul {
    font-size: 14px;
    line-height: 1.6;
    color: #f6f6f6;
}

.footer-column a {
    color: #d6e1e7;
    text-decoration: none;
}

.footer-column a:hover {
    text-decoration: underline;
}

/* Social Icons */
.social-icons img {
    width: 44px;
    margin-left: 10px;
    vertical-align: middle;
    
}
.social-icons{
    text-align: left;
}
/* Footer Bottom */
.footer-bottom {
    text-align: center;
    padding: 20px;
    background-color:rgb(224, 221, 221);
    color: #272525;;
    font-size: 14px;
}

.footer-bottom a {
    color: #272728;
    text-decoration: none;
}

.footer-bottom a:hover {
    text-decoration: underline;
}

/* Payment Methods */
.payment-methods img {
    width: 60px;
    margin: 0 5px;
}


</style>
</head>
<body>
    <header>
        <div class="logo1">
            <img src="image N/IMG2.png" alt="Book Cart Logo">
        </div>
        
           
        <div class="search-bar">
            <input type="text" placeholder="Search anything...">
            

        </div>
        <div class="user-cart">
            <a href="cart.php" class="cart-icon">🛒</a>
           
            <div class="card-body">
        <a href="log in.php" class="login-button" >log in/sign in</a>
    </header>

    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="about us.php">About us</a></li>
            <li><a href="payment & refund.php">Payment & refund policy</a></li>
            <li><a href="reviewpage.php">Review</a></li>
            <li><a href="FAQ.php">FAQ</a></li>
           
        </ul>
    </nav>
	
	
	<main>
		<section class="cart-items">
            <h2>Shopping Cart</h2>
            <div class="item" id="item1">
                <img src="images C\book1.jpg" alt="Item No1">
                <p>Stephen King</p>
                <div class="quantity-controls">
                    <button onclick="updateQuantity('item1', -1)">-</button>
                    <span id="quantity-item1">1</span>
                    <button onclick="updateQuantity('item1', 1)">+</button>
                </div>
                <button class="delete-btn" onclick="removeItem('item1')">🗑️</button>
            </div>
			
			<div class="item" id="item1">
                <img src="images C\book2.jpg" alt="Item No1">
                <p>The Book of Charlie</p>
                <div class="quantity-controls">
                    <button onclick="updateQuantity('item1', -1)">-</button>
                    <span id="quantity-item1">1</span>
                    <button onclick="updateQuantity('item1', 1)">+</button>
                </div>
                <button class="delete-btn" onclick="removeItem('item1')">🗑️</button>
            </div>

		</section>
		
		<aside class="summary">
            <h3>Summary</h3>
            <label for="customerCode">Customer Code</label>
            <input type="text" id="customerCode">
            <div>
                <p>Subtotal: Rs.<span id="subtotal">0</span></p>
                <p>Discount: Rs.<span id="discount">0</span></p>
                <p>Tax: Rs.<span id="tax">0</span></p>
                <p>Total: Rs.<span id="total">0</span></p>
            </div>
            <button onclick="proceedToCheckout()">Proceed to checkout</button>
        </aside>
	</main>	
	
	
   <!-- Footer Section -->
<footer>
    <div class="footer-container">
        <div class="footer-column">
            <h3>Contact Us!</h3>
            <ul>
                 <p>📞 - 0712356430</p>
                <p>📍- No-112, New Kandy road, Malabe.</p>
              <p>📧 - bookcart@gmail.com</p>
            </ul>
            <div class="social-icons">
                <br><br>
                <h3>Follow Us!</h3>
                
                
                <a><img src="image N/Twitter.png" alt="Twitter"></a>
                    <a><img src="image N/whats.png" alt="whatsapp"></a>
                    <a><img src="image N/insta.png" alt="Instagram"></a>
            </div>
        </div>
        
        <div class="footer-column">
            <h3>Information</h3>
            <ul>
                <li><a href="about us.php">About Us</a></li>
                <li><a href="publisher.php">Publisher</a></li>
                <li><a href="author.php">Author</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
              
               
            </ul>
        </div>
        
        <div class="footer-column">
            <h3>Customer Services</h3>
            <ul>
                <li><a href="home.php">Contact Us</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3>Account</h3>
            <ul>
                <li><a href="user.php">My Account</a></li>
                <li><a href="cart.php">cart</a></li>
                <li><a href="order.php">Order </a></li>
                <li><a href="FAQ.php">FAQ</a></li>
                
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2024 - Book Cart the shop . All rights reserved. </p>
        <div class="payment-methods">
                <img src="image N/visa.png" alt="Visa">
                <img src="image N/master.png" alt="MasterCard">
    
                <img src="image N/american.png" alt="American Express">
                
            </div>
    </div>
</footer>
    <script>// Update quantity of items
function updateQuantity(itemId, change) {
    const quantityElement = document.getElementById(`quantity-${itemId}`);
    let quantity = parseInt(quantityElement.textContent);
    quantity = Math.max(1, quantity + change); // Ensure quantity is at least 1
    quantityElement.textContent = quantity;
    updateSummary();
}

// Remove item from cart
function removeItem(itemId) {
    const item = document.getElementById(itemId);
    item.remove();
    updateSummary();
}

// Update the summary section (subtotal, discount, tax, total)
function updateSummary() {
    let subtotal = 0;
    const items = document.querySelectorAll('.cart-items .item');
    items.forEach(item => {
        const quantity = parseInt(item.querySelector('span[id^="quantity"]').textContent);
        subtotal += quantity * 500; // Assume Rs.500 per item
    });

    const discount = 0;
    const tax = subtotal * 0.1; // 10% tax
    const total = subtotal + tax - discount;

    document.getElementById('subtotal').textContent = subtotal;
    document.getElementById('discount').textContent = discount;
    document.getElementById('tax').textContent = tax.toFixed(2);
    document.getElementById('total').textContent = total.toFixed(2);
}

function proceedToCheckout() {
    // Fetch total price from the DOM
    const totalPrice = document.getElementById('total').textContent;

    // Ensure the total price is not empty or zero before proceeding
    if (totalPrice && parseFloat(totalPrice) > 0) {
        // Redirect to checkout.php with the total price as a query parameter
        window.location.href = `checkout.php?total_price=${totalPrice}`;
    } else {
        alert("Error: Total price is missing or invalid!");
    }
}
</script>
</body>
</html>