<?php
$servername = "localhost";
$username = "root";
$password = "";  // Change this based on your setup
$dbname = "book_cartt";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Method</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    display: flex;
    justify-content: center;
    width: 80%;
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ddd;
    box-shadow: 0 0 10px;
}

.payment-method {
    width: 100%;
}

h2 {
    margin-bottom: 15px;
    font-size: 20px;
}

.payment-method label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.card-details {
    display: flex;
    justify-content: space-between;
}

.card-details input {
    width: 48%;
}

button {
    padding: 10px 10px;
    background-color: black;
    color: white;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #444;
}

input[type="radio"], input[type="checkbox"] {
    margin-right: 10px;
}

    </style>
</head>
<body>

    <div class="container">
        <div class="payment-method">
            <h2>Payment Method</h2>
            <form action="pprocess.php" method="POST"> <!-- Change method to POST -->
                <label>
                    <input type="radio" name="payment" checked>
                    Online payment
                </label>
                <div class="card-info">
                    <label>Card Information</label>
                    <input type="text" name="cardnum" placeholder="0000 0000 0000 0000" maxlength="19" required>
                    <div class="card-details">
                        <input type="text" name="expirydate" placeholder="MM / YY" maxlength="5" required>
                        <input type="text" name="cvv" placeholder="CVV" maxlength="3" required>
                    </div>

                    <label>
                        <input type="checkbox" name="save_card">
                        Save card for the next purchase
                    </label>
                </div>
                <label>
                    <input type="radio" name="payment">
                    Cash On Delivery
                </label>
                <label>
                    <input type="radio" name="payment">
                    mintpay / KoKo
                </label>
                <button type="submit" name="next" class="register-btn">Next</button>
            </form>
        </div>
    </div>

</body>
</html>
