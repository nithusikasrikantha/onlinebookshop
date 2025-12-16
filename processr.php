<?php
include('connect.php');

// Create Operation - Register a New Review
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['reviewName']);
    $star = mysqli_real_escape_string($conn, $_POST['star']);
    $reviewText = mysqli_real_escape_string($conn, $_POST['reviewText']);

    // Check if all fields are provided
    if(!empty($name) && !empty($star) && !empty($reviewText)){
        // Insert the review into the database
        $sql = "INSERT INTO user (name, review, comments) 
                VALUES ('$name', '$star', '$reviewText')";

        if ($conn->query($sql) === TRUE) {
            // Redirect or display a success message
            echo '<script>alert("Review added successfully!"); location.replace("reviewpage.php");</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Please fill in all fields!";
    }
}

// Read Operation - Fetch All reviews
if (isset($_GET['view'])) {
    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);

    if ($result) {
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    } else {
        echo json_encode(['no data', $conn->error]);
    }
}

// Update Operation - Edit Review
if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['reviewName']);
    $star = mysqli_real_escape_string($conn, $_POST['star']);
    $reviewText = mysqli_real_escape_string($conn, $_POST['reviewText']);

    $sql = "UPDATE user SET name='$name', review='$star', comments='$reviewText' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Review updated successfully.";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Delete Operation - Remove Review
if (isset($_POST['delete'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    // SQL Query to delete the review based on the ID
    $sql = "DELETE FROM user WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Review deleted successfully.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
