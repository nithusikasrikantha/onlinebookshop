<?php
// Include the database connection file
include('connect.php');

// Fetch the user details based on the ID in the URL
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    
    // SQL query to fetch the user's data
    $sql = "SELECT * FROM payment WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $cardnum = $row['cardnum'];
        $expirydate = $row['expirydate'];
        $cvv = $row['cvv'];
    } else {
        echo "User not found.";
        exit(); // Stop further execution if user not found
    }
}

// Update the user details in the database after the form submission
if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $cardnum = mysqli_real_escape_string($conn, $_POST['cardnum']);
    $expirydate = mysqli_real_escape_string($conn, $_POST['expirydate']);
    $cvv = mysqli_real_escape_string($conn, $_POST['cvv']);

    // Update SQL query
    $sql = "UPDATE payment SET cardnum='$cardnum', expirydate='$expirydate', cvv='$cvv' WHERE id='$id'";

    // Execute the update query
    if (mysqli_query($conn, $sql)) {
        echo "User updated successfully.";
        header("Location: pprocess.php"); // Redirect to main page after successful update
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input {
            margin: 10px 0;
            padding: 10px;
            font-size: 16px;
        }
        button {
            padding: 10px;
            background-color: blue;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: darkblue;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Payment Detail</h2>
        <form action="editt.php?id=<?php echo $id; ?>" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
            
            <label for="cardnum">Card Number:</label>
            <input type="text" name="cardnum" value="<?php echo htmlspecialchars($cardnum); ?>" required>
            
            <label for="expirydate">Expiry Date:</label>
            <input type="text" name="expirydate" value="<?php echo htmlspecialchars($expirydate); ?>" required>
            
            <label for="cvv">CVV:</label>
            <input type="text" name="cvv" value="<?php echo htmlspecialchars($cvv); ?>" required>
            
            <button type="submit" name="update">Update</button>
        </form>
    </div>
</body>
</html>
