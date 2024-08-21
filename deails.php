<?php
$connect = mysqli_connect("localhost", "root", "", "student");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    if (empty($name) || empty($password) || empty($phone) || empty($email)) {
        echo "<script>alert('All fields are required.');</script>";
    }
    
     else {
        $con = "INSERT INTO `details` (`name`, `password`, `phone`, `email`) VALUES ('$name', '$password', '$phone', '$email')";
        $query = mysqli_query($connect, $con);
        if ($query) {
            echo "<script>alert('Booking appointment successfully');</script>";
            echo "<script>window.location.href='show.php';</script>";
        } else {
            echo "<script>alert('Error in booking appointment');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Detail</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            max-width: 800px;
            margin: auto;
            background-color: pink;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .form-container {
            margin: 50px auto;
            max-width: 500px;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        label {
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
        @media (max-width: 600px) {
            .form-container {
                margin: 20px;
                padding: 10px;
            }
            button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>STUDENT DETAILS</h1>
        <form method="POST" class="form">
            <label for="name">NAME</label>
            <input type="text" id="name" name="name" >
            <label for="password">PASSWORD</label>
            <input type="password" id="password" name="password" >
            <label for="phone">PHONE</label>
            <input type="tel" id="phone" name="phone" >
            <label for="email">EMAIL</label>
            <input type="email" id="email" name="email" >
           <a href="show.php" ><button type="submit" name="submit">LOGIN</button></a>
        </form>
    </div>
</body>
</html>
