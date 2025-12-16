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
        background-color:#555;

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
.Product-item img {
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
.price {
    font-weight: bold;
    margin-top: 10px;

}
.add-cart1 {
    padding: 10px 20px;
    background-color: #333;
    color: white;
    border: none;
    cursor: pointer;
}
.add-cart1:hover {
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
.add-cart {
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
    padding: 10px 10px;
    text-decoration: none;
    font-size: 18px;
}

.shop-btn:hover {
    background-color:#28a745;
}


footer {
    background-color: #f4f4f4;
    text-align: center;
    padding: 20px;
    margin-top: 20px;
}

footer .social a {
    margin: 0 10px;
    text-decoration: none;
}
textarea {
    width: 850px;
    height: 80px;
    background-color: #fff;
    resize: none;
}
button {
    width: 100px;
    height: 30px;
    background-color: #282828;
    border: none;
    color: #fff;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 400px;
    cursor: pointer;
}
.comment-box {
    width: 815px;
    padding: 20px;
    margin-bottom: 4px;
    background-color: #fff;
    border-radius: 4px;
}
.comment-box p {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
    line-height: 16px;
    color: #282828;
    font-weight: 100;
}
.edit-btn {
    position: absolute;
    top: 0px;
    right: 0px;
}
.comment-box {
    width: 815px;
    padding: 20px;
    margin-bottom: 4px;
    background-color: #fff;
    border-radius: 4px;
    position: relative;
}
.comment-box p {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
    line-height: 16px;
    color: #282828;
    font-weight: 100;
}
.edit-form {
    position: absolute;
    top: 0px;
    right: 0px;
}
.edit-form button {
     width: 40px;
     height: 20px;
     color: #282828;
     background-color: #fff;
     opacity: 0.7;

}
.edit-form button:hover {
    opacity: 1;

}

.delete-form {
    position: absolute;
    top: 0px;
    right: 40px;
}
.delete-form button {
     width: 40px;
     height: 20px;
     color: #282828;
     background-color: #fff;
     opacity: 0.7;

}
.delete-form button:hover {
    opacity: 1;

}


.delete-form {
    position: absolute;
    top: 0px;
    right: 60px;
}
.delete-form button {
     width: 40px;
     height: 20px;
     color: #282828;
     background-color: #fff;
     opacity: 0.7;

}
.delete-form button:hover {
    opacity: 1;

}
.commentmessage {
    float: right;
    
}.commentmessage {
    float: right;
    position: absolute;
    top: 10px;
    right: 10px;
    
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
    <script>// JavaScript to fetch and display books
document.addEventListener('DOMContentLoaded', function () {
    // Fetch data from the PHP backend
    fetch('books.php') // Assuming this is the path to your PHP file
        .then(response => response.json())
        .then(data => {
            const bookList = document.getElementById('book-list');
            data.forEach(book => {
                const bookDiv = document.createElement('div');
                bookDiv.className = 'book';

                // Creating book content
                bookDiv.innerHTML = `
                    <img src="${book.img}" alt="${book.title}">
                    <div class="book-title">${book.title}</div>
                    <div class="price">${book.price}</div>
                    <div class="rating">${'★'.repeat(book.rating)}</div>
                    <button onclick="addToCart('${book.title}', '${book.price}')">Add to Cart</button>
                `;

                bookList.appendChild(bookDiv);
            });
        })
        .catch(error => console.error('Error fetching books:', error));
});

// Simulate adding to cart
function addToCart(title, price) {
    alert(`Added "${title}" to cart for ${price}`);
}</script>
        

   <br><br>   
       

  
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
              <div class="bestseller">
                  <h1>BESTSELLERBOOK</h1>
             <div class="book-items">
                 <div class="book-item">
                    <img src="images/book4.jpg" alt="Book"></div>
                <div class="book-item">
                    <img src="images/book2.jpg" alt="Book"></div>
                <div class="book-item">
                    <img src="images/book3.jpg" alt="Book"></div>
                </div>
                </div>
             <div class="shop-now">
                <a href="cart.php" class="shop-btn">Shop Now</a>
            </div>
            <hr>
            <h2>Recently bought and rated</h2>
            <h5>4+ stars and rising in past 90 days</h5>
          <div class="product-grid">
              <div class="product-item">
                  <img src="images/book1.jpg" alt="Book">
               <p>Get Free Delivery</p>
               <div class="rating">⭐⭐⭐⭐✰</div>
              <div class="price">$23,50</div>
             <br> <a href="cart.php" class="shop-btn">Add to Cart</a>
          </div>
          
              <div class="product-item">
                  <img src="images/book2.jpg" alt="Book">
               <p>Get Free Delivery,</p>
               <div class="rating">⭐⭐⭐⭐✰</div>
              <div class="price">$65,50</div>
              <br> <a href="cart.php" class="shop-btn">Add to Cart</a>
          </div>

          <div class="product-item">
              <img src="images/book3.jpg" alt="Book" >
           <p>Get Free Delivery,</p>
           <div class="rating">⭐⭐⭐⭐✰</div>
          <div class="price">$50,50</div>
          <br> <a href="cart.php" class="shop-btn">Add to Cart</a>
      </div>

      <div class="product-item">
          <img src="images/book4.jpg" alt="Book">
       <p>Get Free Delivery,</p>
       <div class="rating">⭐⭐⭐⭐✰</div>
      <div class="price">$45,50</div>
      <br> <a href="cart.php" class="shop-btn">Add to Cart</a>
  </div>
  </div>
  <h2>More results</h2>
  <div class="product-grid">
  <div class="product-item">
      <img src="images/book5.jpg" alt="Book">
   <p>Get Free Delivery,</p>
   <div class="rating">⭐⭐⭐✰✰</div>
  <div class="price">$35,50</div>
  <br> <a href="cart.php" class="shop-btn">Add to Cart</a>
</div>
<div class="product-item">
  <img src="images/book6.jpg" alt="Book">
<p>Get Free Delivery,</p>
<div class="rating">⭐⭐⭐✰✰</div>
<div class="price">$12,50</div>
<br> <a href="cart.php" class="shop-btn">Add to Cart</a>
</div>
<div class="product-item">
<img src="images/book7.jpg" alt="Book">
<p>Get Free Delivery,</p>
<div class="rating">⭐✰✰✰✰</div>
<div class="price">$10,50</div>
<br> <a href="cart.php" class="shop-btn">Add to Cart</a>
</div>
<div class="product-item">
<img src="images/book8.jpg" alt="Book">
<p>Get Free Delivery,</p>
<div class="rating">⭐✰✰✰✰</div>
<div class="price">$5,50</div>
<br> <a href="cart.php" class="shop-btn">Add to Cart</a>
       </div>
      </div> 
   <br><br>
      
      
        </main>
        </body>
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
            
    </body>
</html>