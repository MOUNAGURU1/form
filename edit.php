<?php
$connect = mysqli_connect("localhost", "root", "", "student");

$id = "";
$name = "";
$password = "";
$phone = "";
$email = "";
$status = "";

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    if (!isset($_GET['id'])) {
        header("Location: /form/edit.php"); 
        exit;
    }
    $id = $_GET['id'];
    $sql = "SELECT * FROM details WHERE id=$id";
    $result = $connect->query($sql);
   
    $row = $result->fetch_assoc();
    if (!$row) {
        header("Location: edit.php");
        exit;
    }
    
    $name = $row["name"];
    $password = $row["password"];
    $phone = $row["phone"];
    $email = $row["email"];
    $status = $row["status"];
} else {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $status = $_POST['status'];

    if (empty($name) || empty($password) || empty($phone) || empty($email) || empty($status)) {
        echo "<script>alert('All fields are required.');</script>";
    } else {
        $sql = "UPDATE details SET name='$name', password='$password', phone='$phone', email='$email', status='$status' WHERE id='$id'";
        $result = $connect->query($sql);

        if ($result) {
            echo "<script>alert('Record updated successfully');</script>";
            echo "<script>window.location.href = 'show.php';</script>";
        } else {
            echo "<script>alert('Error updating record');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Details</title>
    <link rel="stylesheet" type="text/css" href="docc.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="fevi.png">
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
        <h1>Update Student Details</h1>
        <form method="POST" class="form">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="name">NAME</label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>">
            <label for="password">PASSWORD</label>
            <input type="password" id="password" name="password" value="<?php echo $password; ?>">
            <label for="phone">PHONE</label>
            <input type="tel" id="phone" name="phone" value="<?php echo $phone; ?>">
            <label for="email">EMAIL</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>">
            <label for="status">STATUS</label>
            <input type="text" id="status" name="status" value="<?php echo $status; ?>">
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
