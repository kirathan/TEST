<?php
include '../connect.php';
session_start();
$id=$_GET['id'];
$sql="delete from comment where cid='$id'";
mysqli_query($con,$sql);
echo '<script>alert("Succesfully Removed");window.location="addcomment.php";</script>';
?>