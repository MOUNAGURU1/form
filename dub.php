



<?php
error_reporting(0);
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "ram");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insert data into database
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
if (mysqli_query($conn, $sql)) {
  echo "User added successfully!";
} else {
  echo "Error adding user: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>


Note: This code is just an example and should not be used in production without proper security measures, such as password hashing and validation