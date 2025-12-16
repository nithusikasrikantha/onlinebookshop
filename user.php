



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
    
    
    .user-section {
        display: flex;
        justify-content: space-around;
        padding: 20px;
    }
    
    .user-details, .shipment-tracking, .recently-viewed {
        width: 30%;
    }
    
    .profile {
        border: 1px solid #ccc;
        padding: 15px;
    }
    
    .edit-btn {
        background: none;
        border: none;
        cursor: pointer;
    }
    
    .shipment-progress {
        width: 100%;
    }
    
    .progress-bar {
        width: 100%;
        background-color: #e0e0e0;
        border-radius: 10px;
        overflow: hidden;
        height: 20px;
        position: relative;
    }
    
    .progress {
        height: 100%;
        width: 25%; /* Initially 25% */
        background-color: #76c7c0;
        transition: width 1s;
    }
    
    .viewed-items {
        display: flex;
        justify-content: space-between;
    }
    
    .item-box {
        width: 80px;
        height: 100px;
        background-color: #ccc;
    }
    
    .add-recent-btn {
        margin-top: 10px;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
    
    .add-recent-btn:hover {
        background-color: #45a049;
    }
    
    
    /* Basic Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: Arial, sans-serif;
    }
    
    
    
    /* User Section */
    .user-section {
        display: flex;
        justify-content: space-between;
        padding: 20px;
    }
    
    .user-details, .shipment-tracking, .recently-viewed {
        width: 30%;
    }
    
    /* Basic Button Styling */
    button {
        padding: 5px;
        margin-left: 10px;
        cursor: pointer;
    }
    
  
    
    /* Recently Viewed Items */
    #viewed-items {
        border: 1px solid #000;
        height: 100px;
        margin-top: 10px;
        padding: 10px;
    }
    
    .add-recent-btn {
        margin-top: 10px;
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
           
        <div class="user-info">
            <span>user456@gmail.com</span>
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

    <section class="user-section">
        <div class="user-details">
            <h2>Profile Details</h2>
            <p>Name: Kasun Lakmal <button class="edit-btn">Edit</button></p>
            <p>Email: user456@gmail.com <button class="edit-btn">Edit</button></p>
            <p>Address: Saranankara Mawatha, Gampaha <button class="edit-btn">Edit</button></p>
            <p>Contact: 0771234124 <button class="edit-btn">Edit</button></p>
            <p>Payment Info: **** **** **** 0000 <button class="edit-btn">Edit</button></p>
        </div>

        <div class="shipment-tracking">
            <h2>Track Your Shipment</h2>
            <div id="shipment-status">
                Left the store ➔ Delivered
            </div>
        </div>

        <div class="recently-viewed">
            <h2>Recently Viewed</h2>
            <div id="viewed-items">
                <!-- Items will be added here -->
            </div>
            <button id="add-recent" class="add-recent-btn">Add New Book</button>
        </div>
    </section>

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

    <script>// Placeholder for edit button functionality
        const editButtons = document.querySelectorAll('.edit-btn');
        
        editButtons.forEach(button => {
            button.addEventListener('click', () => {
                alert('Edit button clicked');
            });
        });
        
        // Placeholder for dynamically adding recently viewed books
        const addRecentButton = document.getElementById('add-recent');
        const viewedItems = document.getElementById('viewed-items');
        
        addRecentButton.addEventListener('click', () => {
            const newItem = document.createElement('div');
            newItem.textContent = 'New Book';
            viewedItems.appendChild(newItem);
        });
         </script>
</body>
</html>
