<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
        <style type="text/css">

#main{width:670px;height:450px;
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
 <h2>JOIN US.</h2>
 <h3>Create an account to personalize your homepage, follow your favorite authors and publications, applaud blogs you love, and more.</h3>
 <form method="post" action="signup.php">
    <fieldset>
        <legend>Personal Info:</legend>
            <label>Username</label><br>
            <input type="text" name="name"><br><br>
            <label>Email</label><br>
            <input type="text" name="email"><br><br>
            <label>Password</label><br>
            <input type="password" name="password"><br><br>
            <button type="submit" name="Register" class="btn">Register</button>
            <br>
            <h3>Already registered?<a href="sign_in.php">Click here</a></h3>
       </fieldset>
     </form>

 </div>
</body>
</html>