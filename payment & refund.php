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

/* start */

.container {
    max-width: 800px;
    margin: 0 auto;
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
}

.breadcrumb{
    margin-bottom: 10px;
    text-align: center;
}

.breadcrumb a{
    color:#007bff ;
    text-decoration: none;
}
.title {
    background-color: #d9e8f5;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 10px;
}

.page-title {
    font-size: 24px;
    margin-bottom: 20px;
    text-align: center;
}

.refund-policy h2 {
    font-size: 20px;
    margin-bottom: 10px;
    text-decoration: underline;
}

.refund-policy p {
    margin-bottom: 15px;
    line-height: 1.5;
}

.flex-container{
    display: flex;
    gap: 10px;
    margin: 0 10px;
}

.eligibility {
    background-color: #f1f1f1;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 20px;
}

.eligibility h3 {
    font-size: 18px;
    margin-bottom: 10px;
}

.eligibility ul {
    list-style-type: none;
    padding-left: 0;
}

.eligibility ul li {
    margin-bottom: 10px;
    color: red;
}

.faq h3 {
    font-size: 18px;
    margin-bottom: 10px;
}

.accordion {
    margin-top: 20px;
}

.accordion-item {
    margin-bottom: 10px;
}

.accordion-header {
    background-color: #eee;
    border: none;
    cursor: pointer;
    width: 100%;
    text-align: left;
    padding: 10px;
    font-size: 16px;
    font-weight: bold;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.accordion-header:hover {
    background-color: #ddd;
}

.accordion-content {
    background-color: white;
    padding: 15px;
    display: none;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-top: 5px;
}

.accordion-content p {
    line-height: 1.5;
}
/* End */


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
<!-- start -->
    <div class="container">
        <!-- Breadcrumb Navigation -->
    <div class="title">
        <div class="breadcrumb">
            <a href="#">Home</a> > <a href="#">Payment & Refund</a>
        </div>
        <br>
        <!-- Page Title -->
        <h1 class="page-title">Payment & Refund</h1>
    </div>
        <!-- Refund Policy Section -->
        <section class="refund-policy">
            <h2>Refund Policy</h2>
            <p>
                Here you’ll find answers to the most commonly asked questions about creating and implementing a return policy for your eCommerce store.
            </p>
            <p>
                Need some help building the perfect return policy for your store? In our Ultimate Guide to Writing a Return Policy, you can find all the information you need for determining your return window, outlining acceptable reasons for returns, and step-by-step instructions for implementing your return and refund policy.
            </p>
        </section>
        <br>


        <div class="flex-container">
        <!-- Eligibility for Refund Section -->
        <div class="eligibility">
            <h3>Eligibility for Refund</h3>
            <ul>
                <li>Returns must be made within 30 days of purchase.</li>
                <li>Item must be unused and in the same condition as received.</li>
                <li>Include receipt or proof of purchase.</li>
                <li>Non-refundable items (e.g., digital downloads, gift cards).</li>
            </ul>
        </div>

        <!-- Accordion FAQ Section -->
        <div class="faq">
            <h3>Frequently Asked Questions</h3>
            <div class="accordion">
                <div class="accordion-item">
                    <button class="accordion-header">What should my return and refund policy say?</button>
                    <div class="accordion-content">
                        <p>Your return and refund policy should state how long customers have to return an item, what condition it should be in, and if there are any non-refundable items.</p>
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-header">Should I have an order cancellation policy?</button>
                    <div class="accordion-content">
                        <p>Yes, an order cancellation policy informs customers about the process of canceling an order and the timeframe in which they can do so.</p>
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-header">What is a return and refund policy?</button>
                    <div class="accordion-content">
                        <p>A return and refund policy outlines the conditions under which a customer can return an item and receive a refund.</p>
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-header">What are your delivery times?</button>
                    <div class="accordion-content">
                        <p>Delivery times vary based on location and shipping options chosen at checkout. Please check our shipping policy for more details.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
 <!-- End -->

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
        const accordionHeaders = document.querySelectorAll('.accordion-header');

accordionHeaders.forEach(header => {
    header.addEventListener('click', () => {
        const content = header.nextElementSibling;

        // Toggle the display of the current accordion content
        if (content.style.display === 'block') {
            content.style.display = 'none';
        } else {
            content.style.display = 'block';
        }

        // Close other accordion contents
        accordionHeaders.forEach(otherHeader => {
            if (otherHeader !== header) {
                const otherContent = otherHeader.nextElementSibling;
                otherContent.style.display = 'none';
            }
        });
    });
});
    </script>
</body>
</html>