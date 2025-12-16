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
main{
    padding: 20px;
}
h5 {
    text-indent: 100px;
}

.product-grid {
    display: grid;
    grid-template-columns: repeat(4,  1fr);
    gap: 85px;
    padding: 20px;
}
.Product-item {
    background-color: wheat;
    padding: 20px;
    border: 1px solid #ddd;
    text-align: center;
}
.product-item img {
    width: 100px;
    height: 100px;
    margin-bottom: 10px;
	
	
	
	
	
}
.Product-item p {
    font-size: 30px;
    color: #555;
    margin-bottom: 10px;
}
.rating {
    font-size: 18px;
    margin-bottom: 10px;
}


.more {
    padding: 10px 20px;
    background-color: #333;
    color: white;
    border: none;
    cursor: pointer;
}
.more:hover {
    background-color: red ;
}
.author {
    display: flex;
    justify-content: space-around;
    padding: 50px;
    background-color: #fafafa;
}
.author-text {
     max-width: 50%;
}
.author-text p {
    padding: 10px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 18px;
    line-height: 1.5;
    margin-bottom: 10px;
}
.search-btn {
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #333;
    color : #fff;
    border: none;
    cursor: pointer;
}
.author-image img{
    max-width: 100%;
}

.book-card {
    display: flex;
    justify-content: space-around;
    padding: 50px;
}
.book-image img {
    max-width: 100%;
}
.book-info {
    width: 50%;
}

.book-info {
    flex: 2;
}
.book-info h2 {
    margin: 0;
    margin-left: 20px;
    font-size: 1.5em;
    color:#333;
}
.book-info h4 {
    margin-top: 5px;
    margin-left: 20px;
    font-size: 1.1em;
    color: #777;

}
.book-info p {
    font-size: 0.9em;
    color: #555;
    margin-left: 20px;
}
.read-more {
    display: inline-block;
    margin-top: 10px;
    color: #007BFF;
    padding: 10px 15px;
    text-decoration: none;

}
.read-more:hover {
    text-decoration: underline;
}
.more {
    margin-left: 60px;
    margin-top: 10px;
    padding: 10px 20px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 0.9em;
    
    
}
.add-cart:hover {
     background-color: #218838;
}

.bestseller {
    text-align: center;
    letter-spacing: 10px;
    line-height: 50px;
    margin: 20px 0;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
.book-items {
    display: flex;
    justify-content: space-around;
    margin: 20px 0;
}
.book-item {
    width: 150px;
    height: 200px;
    background-color: #ddd;
}
.shop-now {
    text-align: center;
    margin: 20px 0;
    padding: 30px 15px;
}
.shop-btn {
    background-color: #218838;
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    font-size: 18px;
}
.shop-btn:hover {
    background-color:#28a745;
}

.book-products {
    display: flex;
    justify-content: center;
    gap: 20px;
}
.book-product {
    background-color: white;
    padding: 20px;
    text-align: center;
    border: 1px solid #ccc;
    width: 200px;
}
.book-product img {
    width: 150px;
    height: 200px;
    margin-bottom: 10px;
}
.book-product p {
    margin: 10px 0;
}
.price {
    font-size: 1.2em;
    color: green;
}
.add-cart1 {
    padding: 10px 20px;
    background-color: #28a745;
    color: white;
    border: none;
    cursor: pointer;
}
.add-cart1:hover {
    background-color:red;
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
    
</div>
        </div>
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
            
              <h2>Recently bought and rated</h2>
                  <h5>4+ stars and rising in past 90 days</h5>
                <div class="product-grid">
                    <div class="product-item">
                        <img src="images C/publisher1.png" alt="Publisher">
					<p>LONGHORN</p>
                     <div class="rating">⭐⭐⭐⭐✰</div>
                    <button class="more">More Details</button>
                </div>
                
                <div class="product-grid">
                    <div class="product-item">
                        <img src="images C/publisher2.png" alt="Publisher">
					<p>MORAN</p>
                     <div class="rating">⭐⭐⭐⭐✰</div>
                    <button class="more">More Details</button>
                </div>

                <div class="product-grid">
                    <div class="product-item">
                        <img src="images C/publisher3.png" alt="Publisher">
					<p>IPG</p>
                     <div class="rating">⭐⭐⭐⭐✰</div>
                    <button class="more">More Details</button>
                </div>

				<div class="product-grid">
                    <div class="product-item">
                        <img src="images C/publisher4.png" alt="Publisher">
					<p>LION</p>
                     <div class="rating">⭐⭐⭐⭐✰</div>
                    <button class="more">More Details</button>
                </div>
       
				<div class="product-grid">
                    <div class="product-item">
                        <img src="images C/publisher5.png" alt="Publisher">
					<p>NEW HOLLAND</p>
                     <div class="rating">⭐⭐⭐⭐✰</div>
                    <button class="more">More Details</button>
                </div>
				
				
    
</div>         
            
            
            
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
    <script src="script.js"></script>
</body>
</html>