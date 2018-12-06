<!DOCTYPE html>
<html>
<head>
	<title>Shu | Register</title>
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
<h2 style = "padding-top: 30px;">Register</h2>
<form action = "http://localhost/Q2Project/welcome.php" method = "POST">
Name: <input type = "text"><br>
Email: <input type = "text"><br>
Phone: <input type = "text"><br>
User: <input type = "text" name = "user"><br>
Passcode: <input type = "text"><br>
<input type = "submit">
</form>
</div>
</body>
</html>