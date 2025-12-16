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
/* Main content */
.hero-image {
    background-color: #e9ecef;
    height: 300px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.hero-image h1 {
    font-size: 3em;
    color: #333;
}

.latest-books, .great-authors {
    padding: 50px;
    text-align: center;
}

h2 {
    margin-bottom: 20px;
    font-size: 2em;
    color: #333;
}

.book-grid, .author-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

.book-item, .author-item {
    background-color: #f1f1f1;
    padding: 30px;
    border: 1px solid #ddd;
    display: flex;
    justify-content: center;
    align-items: center;
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
code
/* General styles for the page */
body {
    font-family: Arial, sans-serif;
}

/* Online Help Button */
#online-help-btn {
    background-color: #4CAF50;
    color: white;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    position: fixed;
    bottom: 20px;
    right: 20px;
    font-size: 16px;
}

#online-help-btn:hover {
    background-color: #45a049;
}

/* Modal Background */
.modal {
    display: none; /* Hidden by default */
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4); /* Black background with opacity */
    padding-top: 60px;
}

/* Modal Content Box */
.modal-content {
    background-color: white;
    margin: 5% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 500px;
    border-radius: 10px;
}

/* Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

/* Help Form Styles */
form label {
    display: block;
    margin-bottom: 8px;
}

form input[type="text"],
form input[type="email"],
form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.submit-btn {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.submit-btn:hover {
    background-color: #45a049;
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
        <!-- Hero Section -->
        <div class="hero-image">
            <h1>Welcome to Book Cart <br>The shop</h1>
            
                   
            
        </div>
        
        <!-- Latest Books Section -->
        <section class="latest-books">
            <h2>Latest Books</h2>
            <div class="book-grid">
                <div class="book-item">
                    <img src="images/book1.jpg" alt="Book Title 1">
                   
                </div>
                <div class="book-item">
                    <img src="images/book2.jpg" alt="Book Title 2">
                 
                </div>
                <div class="book-item">
                    <img src="images/book7.jpg" alt="Book Title 3">
                   
                </div>
                <div class="book-item">
                    <img src="images/book8.jpg" alt="Book Title 4">
                 
                </div>
                <div class="book-item">
                    <img src="images/book4.jpg" alt="Book Title 5">
                  
                </div>
                <div class="book-item">
                    <img src="images/book3.jpg" alt="Book Title 6">
                    
                </div>
                <div class="book-item">
                    <img src="images/book5.jpg" alt="Book Title 7">
                  
                </div>
                <div class="book-item">
                    <img src="images/book6.jpg" alt="Book Title 8">
                   
                </div>
            </div>
        </section>
    
        <!-- Great Authors Section -->
        <section class="great-authors">
            <h2>Great Authors</h2>
            <div class="author-grid">
                <div class="author-item">
                    <img src="images/Author1.jpg" alt="Author Name 1">
                   
                </div>
                <div class="author-item">
                    <img src="images/Author2.jpg" alt="Author Name 2">
                    
                </div>
                <div class="author-item">
                    <img src="images/Author3.jpg" alt="Author Name 3">
                 
                </div>
                <div class="author-item">
                    <img src="images/Author4.jpg" alt="Author Name 4">
                    
                </div>
                
            </div>
        </section>
    </main>
    
    
    <button id="online-help-btn" class="online-help">Online Help</button>

    <!-- Help Modal (Hidden by default) -->
    <div id="help-modal" class="modal">
        <div class="modal-content">
            <span id="close-modal" class="close">&times;</span>
            <h2>Online Help</h2>
            <p>How can we assist you?</p>
            <form id="help-form">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Your Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit" class="submit-btn">Send</button>
            </form>
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
<script>
    // Get the modal, button, and close elements
    const modal = document.getElementById('help-modal');
    const helpBtn = document.getElementById('online-help-btn');
    const closeBtn = document.getElementById('close-modal');
    
    // When the user clicks the help button, open the modal
    helpBtn.onclick = function() {
        modal.style.display = 'block';
    }
    
    // When the user clicks the close button, close the modal
    closeBtn.onclick = function() {
        modal.style.display = 'none';
    }
    
    // When the user clicks outside the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
    
    // Handle form submission (just logs the input to console for now)
    const helpForm = document.getElementById('help-form');
    helpForm.onsubmit = function(event) {
        event.preventDefault(); // Prevent form from submitting the traditional way
        
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;
    
        // Corrected the template literal syntax with backticks
        console.log(`Name: ${name}, Email: ${email}, Message: ${message}`);
        
        // Close modal after submission
        modal.style.display = 'none';
    
        // You can add an actual email or chat function here
        alert('Your message has been sent. We will contact you soon.');
    }</script>
</body>
</html>


