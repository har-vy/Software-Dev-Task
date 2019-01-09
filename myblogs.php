<html>
<head>
<title></title>
<style type="text/css">
#d0{width:900px;
background-color:white;
margin:0px auto;
border:1px solid ;
text-align: center;
}
</style>
</head>
<body>
<?php
session_start();
include 'dbh.php';
$uname=$_SESSION['name'];
$sql="SELECT * FROM blog where username='$uname'";
$result=$conn->query($sql);
if($result->num_rows > 0)
{
	while($row=$result->fetch_assoc()){
	echo  $row["blg"] . "<hr>"."<hr>";
}
}
else
{
	echo "No posts";
}
?>
</body>
</html>
