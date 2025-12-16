<?php
// Include the database connection file
include('connect.php');

// Fetch the user details based on the ID in the URL
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    
    // SQL query to fetch the user's data
    $sql = "SELECT * FROM register WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $email = $row['email'];
        $role = $row['role'];
    } else {
        echo "User not found.";
    }
}

// Update the user details in the database after the form submission
if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    
    // Check if the password field is filled (optionally update the password)
    if (!empty($_POST['password'])) {
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE register SET name='$name', email='$email', password='$hashed_password', role='$role' WHERE id='$id'";
    } else {
        // Update without changing the password
        $sql = "UPDATE register SET name='$name', email='$email', role='$role' WHERE id='$id'";
    }

    if (mysqli_query($conn, $sql)) {
        echo "User updated successfully.";
        header("Location: process.php"); // Redirect to main page after successful update
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
        input, select {
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
        <h2>Edit User</h2>
        <form action="edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $name; ?>" required>
            
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $email; ?>" required>
            
            <label for="role">Role:</label>
            <select name="role" required>
                <option value="user" <?php echo ($role == 'user') ? 'selected' : ''; ?>>User</option>
                <option value="admin" <?php echo ($role == 'admin') ? 'selected' : ''; ?>>Admin</option>
            </select>

            <label for="password">Password (Leave blank if you don't want to change):</label>
            <input type="password" name="password" placeholder="Enter new password">

            <button type="submit" name="update">Update</button>
        </form>
    </div>
</body>
</html>
