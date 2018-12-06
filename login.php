<!DOCTYPE html>
<html>
<head>
	<title>Shu | Login</title>
	<!--setting favicon-->
	<link rel="icon"
		type="image/png"
		href="logo.jpg">
		</head>
	<!--connecting page to stylesheet-->
	<link rel="stylesheet" type="text/css" href="Q1Proj.css">
<body>
<!--creating navigation bar, from w3schools.com-->
<div class="navbar">
	<ul>
		<li><a href="login.php">Log In</a></li>
		<li><a href="register.php">Register</a></li>
		<li><a href="catalog.html">Catalog</a></li>
		<li><a href="quiz.php">Find Your Shu</a></li>
		<li><a href="order.php">Order</a></li>
	</ul>
</div>

<div id = "content">
<h2 style = "padding-top: 30px;">Log In</h2>
<form action = "http://localhost/Q2Project/welcome.php" method = "POST">
User: <input type = "text" name = "user"><br>
Passcode: <input type = "text"><br>
<input type = "submit">
<a href="register.php">Don't have an account? Sign up!</a>
</form>
</div>
</body>
</html>
