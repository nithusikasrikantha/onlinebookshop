<?php
include('connect.php'); // Include your database connection

// Check if 'total_price' is set in the GET request and ensure it's a valid number
if (isset($_GET['total_price']) && is_numeric($_GET['total_price'])) {
    $total_price = $_GET['total_price'];

    // Example of user ID (you can retrieve this from the session or login)
    $user_id = 1; // Assuming a logged-in user

    // Insert the total price into the database
    $query = "INSERT INTO orders (user_id, total_price) VALUES ('$user_id', '$total_price')";
    
    if (mysqli_query($conn, $query)) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Handle the case where total_price is not provided or invalid
    echo "Error: Total price not provided or invalid!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<style>
    .add-cart {
    margin-left: 60px;
    margin-top: 10px;
    padding: 10px 20px;
    background-color:green;
    color: black;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 0.9em;
    
    
}
.add-cart:hover {
     background-color:white;
}

    </style>
<body>
   
       
        <button class="add-cart"> <a href="registerr.php" type="submit">Confirm order</a></button>
    
</body>
</html>
