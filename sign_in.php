
<html>
<head>
	<title>BLog</title>
	<style type="text/css">

#info{width:670px;height:450px;
background-color: lavender;
 background-size: cover;
margin:0.5px auto;
border:1px solid ;
text-align: center;
color: black;
}
</style>
	<link rel="stylesheet" type="text/css"  href="style.css">
</head>
<body>
	<div id="main">
		<div id="info">
			<h1>Welcome back.</h1>
            <h3>Sign in to access your personalized homepage, follow authors and topics you love, and clap for stories that matter to you.</h3>
			<form action="login.php" method="post">
				<label>username</label>
				<input type="text" name="uname" ><br><br>
				<label>password</label>
				<input type="text" name="password"><br><br>
				<button type="submit"><b>Login</b></button>
            </form>
            <h4>No account?<a href="register.php">Create One.</a></h4>
        </div>
    </div>
</body>
</html>