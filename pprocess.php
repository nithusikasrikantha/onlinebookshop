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



// Handle form submission - Insert into database
if (isset($_POST['next'])) {
    $cardnum = mysqli_real_escape_string($conn, $_POST['cardnum']);
    $expirydate = mysqli_real_escape_string($conn, $_POST['expirydate']);
    $cvv = mysqli_real_escape_string($conn, $_POST['cvv']);

    // Insert the user into the database
    $sql = "INSERT INTO payment (cardnum, expirydate, cvv) 
            VALUES ('$cardnum', '$expirydate', '$cvv')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fetch all records from the 'payment' table
$sql = "SELECT * FROM payment";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register CRUD Details</title>
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
    <h2>Payment Details</h2>

    <a href="registerr.php" class="AddNew-button">New payment</a>
    <br><br>

    <table class="myTable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Card Number</th>
                <th>Expiry Date</th>
                <th>CVV</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Check if there are records to display
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['cardnum'] . "</td>";
                    echo "<td>" . $row['expirydate'] . "</td>";
                    echo "<td>" . $row['cvv'] . "</td>";
                    // Action Buttons: Edit/Delete
                    echo "<td class='action-links'>
                            <a href='editt.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a>  
                            <form action='pprocess.php' method='POST' style='display:inline-block;' onsubmit=\"return confirm('Are you sure you want to delete this record?');\">
                                <input type='hidden' name='id' value='" . $row['id'] . "' />
                                <button type='submit' name='delete' class='btn btn-danger'>Delete</button>
                            </form>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No records found</td></tr>"; // 'colspan' should cover all table columns
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>

<?php
// Delete Operation - Remove a record
if (isset($_POST['delete'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    
    // SQL query to delete the record
    $sql = "DELETE FROM payment WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully.";
        echo '<script>location.replace("pprocess.php")</script>'; // Refresh the page
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
