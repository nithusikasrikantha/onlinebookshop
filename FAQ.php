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
/*main page start*/
.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
}
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
}

.faq-class {
    
    padding: 20px;
    background-color: #d9e8f5;
    text-align: center;
}

.breadcrumb {
    margin-bottom: 20px;
    text-align: center;
}
.breadcrumb a{
    color: #007bff;
}


main {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.search-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
}

.search-bar input {
    width: 400px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.logo img, .photo img {
    width: 200px;
}

.flex{
    display: flex;
    gap: 10px;
}

.faq-section {
    width: 100%;
}

.faq-section h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

.faq {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.faq-question {
    background-color: #f0f0f0;
    border: none;
    padding: 15px;
    text-align: left;
    cursor: pointer;
    font-size: 18px;
}

.faq-answer {
    display: none;
    background-color: #e8e8e8;
    padding: 15px;
    margin-top: -10px;
    font-size: 16px;
}
/*main page End*/


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
<!--main page start-->
<div class="container">
    <header class="faq-class">
        <div class="breadcrumb">
            <a href="#">Home</a> &gt; <a href="#">FAQ</a>
            <br><br>
            <h1>FAQ</h1>
        </div>
    </header>

    <main>
        <section class="search-section">
            <div class="logo">
                <img src="image N/IMG2.png" alt="Logo">
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Describe your issue">
            </div>
        </section>

        <section class="faq-section">
            <h2>Products & Services</h2>
        <div class="flex">
            <div class="faq">
                <button class="faq-question" onclick="toggleAnswer('answer1')">+ What are your delivery time?</button>
                <p id="answer1" class="faq-answer">Our delivery time is between 3-5 business days.</p>

                <button class="faq-question" onclick="toggleAnswer('answer2')">+ How do I locate a book?</button>
                <p id="answer2" class="faq-answer">You can use our search function to locate books by title, author, or ISBN.</p>

                <button class="faq-question" onclick="toggleAnswer('answer3')">+ What should I do if the book I received is incorrect or damaged?</button>
                <p id="answer3" class="faq-answer">Please contact our support team with your order details, and we will assist you.</p>

                <button class="faq-question" onclick="toggleAnswer('answer4')">+ Is it safe to pay by credit card?</button>
                <p id="answer4" class="faq-answer">Yes, our payment system is fully secure and encrypted.</p>
            </div>
            <div class="photo">
                <img src="image N/homepage3photo.jpg" alt="Photo">
            </div>
            <div class="photo">
                <img src="image N/homepage3photo1.jpg" alt="Photo">
            </div>
        </div>
        </section>
    </main>
</div>
<!--main page End-->

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
    <script>function toggleAnswer(answerId) {
        const answer = document.getElementById(answerId);
        if (answer.style.display === "block") {
            answer.style.display = "none";
        } else {
            answer.style.display = "block";
        }
    }</script>
</body>
</html>