<?php
// Include the database connection file
include("connect.php");

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    // Get the user ID from the URL
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Fetch user data from the database based on the ID
    $sql = "SELECT * FROM register WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    // Check if a user record exists
    if (mysqli_num_rows($result) > 0) {
        // Fetch the user data
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "No user found with the given ID.";
        exit;
    }
} else {
    echo "No user ID provided.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View User Details</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    .container {
      width: 60%;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .user-details {
      list-style-type: none;
    }

    .user-details li {
      padding: 10px 0;
      font-size: 18px;
    }

    .user-details li span {
      font-weight: bold;
    }

    .back-button {
      display: block;
      width: 100px;
      margin: 20px auto;
      padding: 10px;
      text-align: center;
      background-color: blue;
      color: white;
      text-decoration: none;
      border-radius: 5px;
    }

    .back-button:hover {
      background-color: darkblue;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>User Account Details</h2>

    <ul class="user-details">
      <li><span>ID:</span> <?php echo $row['id']; ?></li>
      <li><span>Name:</span> <?php echo $row['name']; ?></li>
      <li><span>Email:</span> <?php echo $row['email']; ?></li>
      <li><span>Role:</span> <?php echo $row['role']; ?></li>
    </ul>

    <a href="process.php" class="back-button">Back</a>
  </div>

</body>
</html>

<?php
// Close the database connection
mysqli_close($conn);
?>
