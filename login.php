<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!--setting favicon-->
	<link rel="icon"
		type="image/png"
		href="logo.jpg">

			<style>
	body {
		padding-top: 15%;
		text-align: center;
	}
	
	p {
		font-size: 50pt;
	}
	</style>
		</head>

	<!--connecting page to stylesheet-->
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
<!--creating navigation bar, from w3schools.com-->
<div class="navbar">
	<ul style="display: inline-block;">
		<li><a href="home.php">Shu</a></li>
		<li><a href="login.php">Log In</a></li>
		<li><a href="register.php">Register</a></li>
		<li><a href="catalog.html">Catalog</a></li>
		<li><a href="quiz.php">Find Your Shu</a></li>
		<li><a href="order.php">Order</a></li>
	</ul>
</div>
<body>
<div id = "content">
<center>
<p id="upp" style = "padding-top: 30px;">Log In</p>

<form action = "loggedin.php" method = "POST">
User: <input type = "text" name = "user"><br><br>
Passcode: <input type = "password" name ="pass"><br><br>
<input type = "submit">
</form><br><a href="register.php">Don't have an account? Sign up!</a>
</center>


</div>
</body>
</html>