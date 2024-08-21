<?php
$connect =mysqli_connect("localhost","root","","ram");
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $sql ="DELETE from `users` where id=$id";
    $connect->query($sql);

}
header('location:/form/diplay.php');
exit;

?>