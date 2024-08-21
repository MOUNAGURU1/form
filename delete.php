<?php
$connect =mysqli_connect("localhost","root","","student");
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $sql ="DELETE from `details` where id=$id";
    $connect->query($sql);

}
header('location:/form/show.php');
exit;

?>