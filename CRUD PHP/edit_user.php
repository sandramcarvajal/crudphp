<?php
include('connection.php');
$con = connection();

$id = $_POST['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "UPDATE usuario SET name='$name', lastname='$lastname', username='$username', password='$password', email='$email' where id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}
?>
