<?php
include 'dbcon.php';
 session_start();
$id=$_SESSION['login_id'];
$sql="UPDATE `login` SET `status`='0' WHERE `login_id`= '$id'";
$result=mysqli_query($con,$sql);
//UPDATE `login` SET `status`='0' WHERE `login_id=$_SESSION['id'];
session_destroy();
header('location:login.php');
?>
