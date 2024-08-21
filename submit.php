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
    echo "<script>alert('All field successsfully.');</script>";
} else {
  echo "Error adding user: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="diplay.php"><button>show</button></a>
</body>
</html>