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
    justify-content: center;
    padding: 40px;
    gap: 20px;
}

.image-container img {
    max-width: 500px;
    border: 3px solid #070707;
    margin-right:70px;
    margin-top: 40px;
   
}

.register-container {
    max-width: 400px;
    padding: 20px;
    border: 1px solid #0c0b0b8f;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    text-align: center;
    background-color:burlywood;
}

.register-container h2 {
    margin-bottom: 20px;
}

.register-container input,
.register-container select {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #0d0d0d;
    border-radius: 5px;
}

.password-container {
    position: relative;
}

.password-container .toggle-password {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
}

.terms {
    display: flex;
    align-items:center;
    justify-content: flex-start;
    margin: 10px 0;
}

.terms input {
    margin-right: 0px;
}

.register-btn {
    padding: 10px 20px;
    background-color: black;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    margin-top: 10px;
}

.register-btn:hover {
    background-color: #333;
}

.login-link {
    color: #007BFF;
    text-decoration: none;
}

.login-link:hover {
    text-decoration: underline;
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
        <div class="image-container">
            <img src="image N/image.avif" alt="Placeholder Image">
        </div>
        <div class="register-container">
            <h2>Register Now</h2>
            <form action="process.php" method="post">
                <div class="from group">
                    
                    <input type="text" name="name"  placeholder="Enter your name" required>

                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="password-container">
                    <input type="password" name="password" placeholder="Enter your password" required>
                    <span class="toggle-password">👁</span>
                </div>
                <div class="password-container">
                    <input type="password" name="confirm-password" placeholder="Confirm your password" required>
                    <span class="toggle-password">👁</span>
                </div>
                <div class="role-container">
                    <select name="role" required>
                        <option value="user">User</option>
                        <option value="admin">admin</option>
                        <!-- Add more roles if needed -->
                    </select>
                </div>
                
                <div class="terms">
                    <input type="checkbox" id="terms" required>
                    <label for="terms">Terms & conditions</label>
                </div>
                <button type="submit" name="submit" class="register-btn">Register Now</button>
            </form>
            <p>Already have an account? <a href="log in.php" class="login-link">Login Now</a></p>
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
    <!-- Internal JavaScript -->
  <script>
   // Toggle password visibility
const togglePassword = document.querySelectorAll('.toggle-password');
const passwordFields = document.querySelectorAll('input[type="password"]');

togglePassword.forEach((icon, index) => {
    icon.addEventListener('click', function () {
        const type = passwordFields[index].getAttribute('type') === 'password' ? 'text' : 'password';
        passwordFields[index].setAttribute('type', type);
        this.textContent = this.textContent === '👁' ? '👁‍🗨' : '👁';
    });
});

  </script>
</body>
</html>