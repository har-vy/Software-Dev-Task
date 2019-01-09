<?php
session_start();
include 'dbh.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>blog</title>
<style type="text/css">

#d0{width:1600px;height:100px;
background-color:grey;
margin:0px auto;
border:1px solid ;
text-align: center;
}
</style>
</head>
<body bgcolor="LightGray">
	<div id="d0">
		<h1 font-weight: bold><?php echo $_SESSION['name']?> </h1>
		</div>
		<br>
		<li><a href="myblogs.php">MY BLOGS</a> </li>
       <li><a href="Home.php">HOME</a></li>		
	<div style="position:relative; top:5x;">
		<form method="post" action="send.php">
		<textarea rows="20" cols="70" name="msg" placeholders="Type to send message...." class="form-control" placeholder="write your blog here"></textarea><br>
		<input type="submit" value="post">
		</form>
		<br>
		<form action="logout.php">
		<input type="submit" value="logout">
		</form>		
	</div>
</body>
</html>

