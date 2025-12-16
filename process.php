<?php
include('connect.php');

// Create Operation - Register a New User
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($conn, $_POST['confirm-password']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);

    // Password validation (for security)
    if ($password !== $confirmpassword) {
        die("Passwords do not match.");
    }

    // Password Hashing
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert the user into the database
    $sql = "INSERT INTO register (name, email, password, role) 
            VALUES ('$name', '$email', '$hashed_password', '$role')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>location.replace("process.php")</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Read Operation - Fetch All Users
if (isset($_GET['view'])) {
    $sql = "SELECT * FROM register";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. " - Role: " . $row["role"]. "<br>";
        }
    } else {
        echo "0 results";
    }
}

// Update Operation - Edit User
/*if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);

    // Optionally handle password update
    if (!empty($_POST['password'])) {
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE users SET name='$name', email='$email', password='$hashed_password', role='$role' WHERE id='$id'";
    } else {
        $sql = "UPDATE users SET name='$name', email='$email', role='$role' WHERE id='$id'";
    }

    if ($conn->query($sql) === TRUE) {
        echo "User updated successfully.";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}*/

// Delete Operation - Remove User
if (isset($_POST['delete'])) {
  $id = mysqli_real_escape_string($conn, $_POST['id']);

  // SQL Query to delete the user based on the ID
  $sql = "DELETE FROM register WHERE id='$id'";

  if ($conn->query($sql) === TRUE) {
      echo "User deleted successfully.";
      header("Location: process.php"); // Redirect back to the display page after deletion
      exit();
  } else {
      echo "Error deleting record: " . $conn->error;
  }
}


$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>register crud details </title>

  <!-- Internal CSS -->
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
      width: 80%;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: center;
    }

    th {
      background-color: #f2f2f2;
      color: #333;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #f1f1f1;
      cursor: pointer;

    
    }
    a{
        background-color:black;

        color:white;
    }
    a:hover{
        text-decoration:underline;
        background-color:blue
    }
    .action-links {
        text-align:center;
    }
    .text-light{
        display:inline-block;
        margin:10px o;
        padding:10px 20px;
        background-color:blue;
        color:white;
        border-redius:5px;

    }
    .btn-info {
        background-color: blue;
        display:inline-block;
        margin:10px o;
        padding:10px 20px;
        color:white;
        border-redius:5px;
        border color: #000;

    }

    .btn-primary {
        background-color: green;
        display:inline-block;
        margin:10px o;
        padding:10px 20px;
        color:white;
        border-redius:5px;
        border color: #000;

    }

    .btn-danger {
        background-color: red;
        display:inline-block;
        margin:10px 0;
        padding:10px 20px;
        color:white;
        border-redius:5px;
        border color: #000;

    }

    /* Optional: Add hover effect for better user experience */
    .btn:hover {
        opacity: 0.8;
    }
    .AddNew-button {
      display: block;
      width: 100px;
      margin: 20px auto;
      padding: 10px;
      text-align:center ;
      background-color: blue;
      color: white;
      text-decoration: none;
      border-radius: 5px;
    }

    .AddNew-button:hover {
      background-color: darkblue;
      align:left;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="card-header">

     <h2>register details</h2>
    </div>
    <div class="card-body">
    
        <a href="register.php" class="AddNew-button" >Add New</a>
        
   
    <br><br>
</div>
        <br><br>
    <table class="myTable">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Password</th>
          <th>Role</th>
          <th class="action-links">Action</th>
        </tr>
      </thead>
      
      <tbody>
      <?php
  // Including the database connection file
  include("connect.php");

  // Fetch data from the database
  $sql = "SELECT * FROM register";
  $result = mysqli_query($conn, $sql);

  // Check if there are records to display
  if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['email'] . "</td>";
          echo "<td>" . $row['password'] . "</td>";
          echo "<td>" . $row['role'] . "</td>";
          
          // Action Buttons: View, Edit, Delete
          echo "<td class='action-links'>
              <button>  
                <a href='view.php?id=" . $row['id'] . "' class='btn btn-info'>View</a>  
                 </button>
                    <button>  
                <a href='edit.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a>  
                </button>
                <form action='process.php' method='POST' style='display:inline-block;' onsubmit=\"return confirm('Are you sure you want to delete this record?');\">
                    <input type='hidden' name='id' value='" . $row['id'] . "' />
                    <button type='submit' name='delete' class='btn btn-danger'>Delete</button>
                </form>
              </td>";
          echo "</tr>";
      }
  } else {
      echo "<tr><td colspan='4'>No records found</td></tr>";
  }
?>

    </tbody>

      
    </table>
  </div>

  <!-- Internal JavaScript -->
  <script>
    document.getElementById('myTable').addEventListener('click', function() {
      alert('You clicked on the table!');
    });
  </script>
  
</body>
</html>

