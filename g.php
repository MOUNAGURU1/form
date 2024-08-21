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

$connect =mysqli_connect("localhosr","root","","student");

$sql ="SELECT *from details";
$result=$connect->query($sql)

if(!result){
    echo "error";
}
while($row=$result->fetch_assoc()){
    echo"
<tr>
<td>{$row['name']}</td>



}














?>