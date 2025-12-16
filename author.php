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
.container {
    left:50%;
    margin-top: 150px;
    transform: translate(-50%,-50%);
    position:absolute;
    width:50%;
    padding: 10px;
}
.card {
    
    width: max-content;
    text-align: center;
    display: inline-block;
    margin: 3px;
    border: 1px solid #333;

}

.card2 {
    
    width: 205px;
    text-align: center;
    display: inline-block;
    margin: 5px;
    border: 1px solid #333;

}
.card img {
    width: 100px;
    padding: 2px;
    
}
.card2 img {
    width: 120px;
    padding: 2px;
    
}
.title {
    font-weight: bold;
    margin: 10px;
}
button {
    border: 2px solid #e1701a;
    background: #f7a440;
    color: white;
    font-weight: bold;
    margin: 10px;
    padding: 5px 10px;
}
button:hover {
    box-shadow: 0 0 5px 5px #e1701a inset;
}

.cart {
    margin-top:-150px;
    height: 450px;
    width: 250px;
    float :right;
    padding: 10px 20px;
    text-align: center;
    border: 1px solid black;
    overflow-y: scroll;
  
}
.cartImg {
    width :150px;
}
.cartImg > Img {
    width:150px;

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
<script>
    var addItemId = 0;
function addToCart(item) {
    addItemId += 1;
    var selectedItem = document.createElement('div');
    selectedItem.classList.add('cartImg');
    selectedItem.setAttribute('id', 'item-' + addItemId);

    // Assuming item.children[0] is the image, try using 'src' directly
    var img = document.createElement('img');
    img.setAttribute('src', item.children[0].getAttribute('src'));

    var title = document.createElement('div');
    title.innerText = item.children[1].innerText;

    var label = document.createElement('span');
    var select = document.createElement('span');
    select.innerText = item.children[2].children[1].value; // Quantity value

    label.append(select);

    var delBtn = document.createElement('button');
    delBtn.innerText = "Delete";
    delBtn.setAttribute('onclick', 'del(' + addItemId + ')'); // Delete function with item ID

    // Appending items to selectedItem div
    selectedItem.append(img);
    selectedItem.append(title);
    selectedItem.append(label);
    selectedItem.append(delBtn);

    var cartItem = document.getElementById('cart'); // Assuming you have a cart div
    cartItem.append(selectedItem);
}
    </script>
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
           <hr>
         <div class="author">
                <div class="author-text">
                   <p>“Born in california.Ta-Nehisi Coates is the author of the #1 New York Times bestseller  <em>Between the World and Me</em>,winner of the 2005 National Book Award for Nonficion”</p>
            <button class="search-btn">Search More</button>
            </div>
            <div class="author-image">
                <img src="images/Author.jpg" alt="Author Image"></div>
                
            </div>
            </div>
            <div class="author">
                <div class="author-text">
                   <p>“Eric Carle invented writing, the airplane, and the internet. He was also the first person to reach the North Pole. He has flown to Mars and back in one day, and was enthusiastically greeted by the Martians. ‘Very strange beings,’ he reported on his return”. </p>
            <button class="search-btn">Search More</button>
            </div>
            <div class="author-image">
                <img src="images/Author1.jpg" alt="Author Image"></div>
                
            </div>
            </div>
            <div class="author">
                <div class="author-text">
                   <p>“Tiffany D. Jackson is the NYT Bestselling author of YA novels including the Coretta Scott King — John Steptoe New Talent Award-winning Monday’s Not Coming, the NAACP Image Award-nominated Allegedly, Let Me Hear A Rhyme, GROWN, and her forthcoming 2021 titles BLACKOUT, WHITE SMOKE, and SANTA IN THE CITY”.</p>
            <button class="search-btn">Search More</button>
            </div>
            <div class="author-image">
                <img src="images/Author2.jpg" alt="Author Image"></div>
                
            </div>
            </div>
            <div class="author">
                <div class="author-text">
                   <p><em>“Min Jin Lee’s debut novel,<em> Free Food for Millionaires, was one of the “Top 10 Novels of the Year” for The Times (London), NPR’s Fresh Air, and USA Today. Her short fiction has been featured on NPR’s Selected Shorts”.</p>
            <button class="search-btn">Search More</button>
            </div>
            <div class="author-image">
                <img src="images/Author3.jpg" alt="Author Image"></div>
                
            </div>
            </div>
            <div class="author">
                <div class="author-text">
                   <p>“Glynnis Campbell is a USA Today bestselling author of swashbuckling action-adventure romance. She’s the wife of a rock star, and the mother of two young adults, but she’s also been a ballerina, a typographer, a film composer, a piano player, a singer in an all-girl rock band, and a voice in those violent video games you won’t let your kids play”.</p>
            <button class="search-btn">Search More</button>
            </div>
            <div class="author-image">
                <img src="images/Author4.jpg" alt="Author Image"></div>
                
            </div>
            </div>
            
            <hr>
           <div class="book-card">
               <div class="book-image">
                <img src="images/book5.jpg" alt="book" width="150" height="200">
                </div>
                <div class="book-info">
                <h2>Rushin Boud</h2>
                <h4>A Novel</h4>
                <hr>
               <p>Explore literature and fictional books across a range of geners and boundaries, Expore the depths of imagination with our compelling literature and fiction books.</p>           
            <p><strong>Types:</strong>Books</p>
            <a href="#" class="read-more">Read More</a>
            <button class="add-to-cart" data-id="book1">Add Cart</button>
            </div>
            </div>
          
            <div class="container">
                 <div class="card" id="item1">
                    <img src="images/book3.jpg">
                    <div class="title">The Sound of the Hours</div>
                    <div>
                    <lebel>QTY :</lebel>
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>

                    </div>
                    <button onclick="addToCart(item1)">Add To Cart</button>
                 </div>

                    <div class="card2" id="item2">
                    <img src="images/book4.jpg">
                    <div class="title">Golden Age</div>
                    <div>
                    <lebel>QTY :</lebel>
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>

                    </div>
                    <button onclick="addToCart(item2)">Add To Cart</button>
                 </div>
              </div>
                 <div class="cart" id="cart">
                    <div class="title">CART</div><hr/>
                    <div id="title"></div> 
                 </div>
                 </div>
                    </div>
            
                
                   
           
            </main>
            <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br>
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