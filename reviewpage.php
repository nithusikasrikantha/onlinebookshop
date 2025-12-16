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
        /*start*/
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



nav ul {
    display: flex;
    list-style:none;
    background-color: #333;
   align-items: center;
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
/*End*/

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    
}
.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    display: flex;
}

.review-container {
    margin: 0 auto;
    background-color: #d9e8f5;
    padding: 20px;
    border-radius: 8px;
    width: 300px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    color: black;

}

#reviewForm{
    display: flex;
    flex-direction: column;
}

#reviewForm label{
    padding: 12px 0;
}
#reviewForm input{
    outline: none;
    padding: 12px 10px;
    border: none;

}

.stars {
    display: flex;
    gap: 5px;
}

.star {
    font-size: 60px;
    cursor: pointer;
}

textarea {
    width: 100%;
    margin: 10px 0;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.sbbtn {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #555;
}

.review-list {
    background-color: #d9e8f5;
    padding: 20px;
    border-radius: 8px;
    width: 300px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    height: fit-content;
    min-height: 100px;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    margin: 10px 0;
}

.review-item {
    background-color: #f9f9f9;
    padding: 10px;
    border-radius: 4px;
    position: relative;
}

.actions {
    position: absolute;
    right: 10px;
    top: 10px;
}

button.edit, button.delete {
    background-color: transparent;
    border: none;
    cursor: pointer;
    font-size: 12px;
    margin-left: 5px;
}

button.edit:hover, button.delete:hover {
    text-decoration: underline;
}

/*start*/
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
/*End*/
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
    <!--start main page-->
<div class="container">
    <div class="review-container">
    <form id="reviewForm" method="POST" action="processr.php">
            <label for="name">Name:</label>
            <input type="text" name="reviewName" id="reviewName">
            <label for="rating">Make A Review:</label>
            <div class="stars" name="star" id="stars">
                <span class="star" data-value="1">&#9734;</span>
                <span class="star" data-value="2">&#9734;</span>
                <span class="star" data-value="3">&#9734;</span>
                <span class="star" data-value="4">&#9734;</span>
                <span class="star" data-value="5">&#9734;</span>
            </div>
    
            <label for="reviewText">Type Something:</label>
            <textarea id="reviewText" name="reviewText" rows="4" cols="50"></textarea>
    
            <button class="sbbtn" name="submit" type="submit">Submit</button>
        </form>
    </div>
    
    <div class="review-list">
        <h3>Reviews:</h3>
        <ul id="reviewList"></ul>
    </div>
</div>
    <!--End main page-->
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
                <li><a href="view.php">My Account</a></li>
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
   <script>let reviews = [];
    let selectedRating = 0;
    let editIndex = null;
    
    function fetchData(){
        console.log("fetching");
        
        reviews = [];
        fetch("processr.php?view=1")
        .then((response)=>{
            return response.json();
        })
        .then(data=>{
            reviews = data;          
            renderReviews();
            
        }).catch((err)=>{
            console.err(err)
        })
    }
    
    fetchData();
    
    // Handle star rating
    const stars = document.querySelectorAll('.star');
    stars.forEach((star, index) => {
        star.addEventListener('click', () => {
            selectedRating = index + 1;
            highlightStars(selectedRating);
        });
    });
    
    function highlightStars(rating) {
        stars.forEach((star, index) => {
            if (index < rating) {
                star.innerHTML = '&#9733;'; // filled star
            } else {
                star.innerHTML = '&#9734;'; // empty star
            }
        });
    }
    
    // Handle form submission
    document.getElementById('reviewForm').addEventListener('submit', (e) => {
        e.preventDefault();
        const reviewName = document.getElementById('reviewName').value;
        const reviewText = document.getElementById('reviewText').value.trim();
    
        if (selectedRating > 0 && reviewText && reviewName) {
            if (editIndex !== null) {
                // Update an existing review
                id = reviews[editIndex].id;
                reviews[editIndex] = {name:reviewName, review: selectedRating, comments: reviewText };
                
                fetch("processr.php",{
                    method: "POST",
                    headers: {
                        "Content-Type" : "application/x-www-form-urlencoded",
                    },
                    body : `update=1&&reviewName=${encodeURIComponent(reviewName)}&&star=${encodeURIComponent(selectedRating)}&&reviewText=${encodeURIComponent(reviewText)}&&id=${encodeURIComponent(id)}`,
                }).then((response)=>{
                    console.log("Updated successfully.");
                }).catch((err)=>{
                    console.err(err)
                })
                editIndex = null;
    
            } else {
                // Create a new review
                reviews.push({name:reviewName, review: selectedRating, comments: reviewText });
                fetch("processr.php",{
                    method: "POST",
                    headers: {
                        "Content-Type" : "application/x-www-form-urlencoded",
                    },
                    body : `submit=1&&reviewName=${encodeURIComponent(reviewName)}&&star=${encodeURIComponent(selectedRating)}&&reviewText=${encodeURIComponent(reviewText)}`,
                }).then((response)=>{
                    console.log(response);
                }).catch((err)=>{
                    console.err(err)
                })
    
                
            }
            // fetchData()
            renderReviews()
            resetForm();
        } else {
            alert('Please provide a rating and a review.');
        }
    });
    
    // Reset the form after submission or edit
    function resetForm() {
        document.getElementById('reviewName').value = '';
        document.getElementById('reviewText').value = '';
        selectedRating = 0;
        highlightStars(0);
    }
    
    // Render all reviews
    function renderReviews() {
        console.log("rendereing");
        
        const reviewList = document.getElementById('reviewList');
        reviewList.innerHTML = '';
    
        reviews.forEach((review) => {
            const li = document.createElement('li');
            li.classList.add('review-item');
    
            const nameSpan = document.createElement("div");
            nameSpan.innerHTML = `${review.name}`;
    
            const starsSpan = document.createElement('span');
            starsSpan.innerHTML = '★'.repeat(review.review) + '☆'.repeat(5 - review.review);
            
            const textSpan = document.createElement('span');
            textSpan.textContent = ` - ${review.comments}`;
    
            const actionsDiv = document.createElement('div');
            actionsDiv.classList.add('actions');
    
            const editBtn = document.createElement('button');
            editBtn.textContent = 'Edit';
            editBtn.classList.add('edit');
            editBtn.addEventListener('click', () => editReview(review.id));
    
            const deleteBtn = document.createElement('button');
            deleteBtn.textContent = 'Delete';
            deleteBtn.classList.add('delete');
            deleteBtn.addEventListener('click', () => deleteReview(review.id));
    
            actionsDiv.appendChild(editBtn);
            actionsDiv.appendChild(deleteBtn);
    
            li.appendChild(nameSpan);
            li.appendChild(starsSpan);
            li.appendChild(textSpan);
            li.appendChild(actionsDiv);
            reviewList.appendChild(li);
        });
    }
    
    // Edit a review
    function editReview(id) {
        let index;
        for(i=0; i<reviews.length; i++){
            if(reviews[i].id === id){
                index = i;
            }
        }
    
        const review = reviews[index];
        document.getElementById('reviewName').value = review.name;
        document.getElementById('reviewText').value = review.comments;
        selectedRating = review.review;
        highlightStars(selectedRating);
        editIndex = index;
    }
    
    // Delete a review
    function deleteReview(index) {
    
        let filtered_reviews = [];
        for(i=0; i<reviews.length; i++){
            if(reviews[i].id != index){
                filtered_reviews.push(reviews[i]);
            }
        }
        reviews = filtered_reviews;
    
        fetch("processr.php",{
            method: "POST",
            headers: {
                "Content-Type" : "application/x-www-form-urlencoded",
            },
            body : `delete=1&&id=${encodeURIComponent(index)}`,
        }).then((response)=>{
            console.log("Deleted successfully.");
        }).catch((err)=>{
            console.err(err)
        })
    
        renderReviews();
    }</script>
</body>
</html>