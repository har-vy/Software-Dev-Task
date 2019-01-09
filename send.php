<?php
session_start();
include 'dbh.php';
$post=$_POST['msg'];
$name=$_SESSION['name'];
$sql="insert into blog(username,blg) values('$name','$post')";
$result=$conn->query($sql);
header("Location:myprofile.php");
?>