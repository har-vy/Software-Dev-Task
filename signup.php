<?php
include 'dbh.php';
$uname=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$sql="insert into signup(username,email,password)values('$uname','$email','$pass')";
$result=$conn->query($sql);
header("Location:index1.php");
?>