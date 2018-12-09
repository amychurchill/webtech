<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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
<body>
<!--creating navigation bar, from w3schools.com-->
<div class="navbar"><div id="nav">
	<ul>
		<li><a href="home.php">Shu</a></li>
		<li><a href="login.php">Log In</a></li>
		<li><a href="register.php">Register</a></li>
		<li><a href="catalog.html">Catalog</a></li>
		<li><a href="quiz.php">Find Your Shu</a></li>
		<li><a href="order.php">Order</a></li>
	</ul></div>
</div>

<div id = "content">
	<center>
		<div id="lower">
<p style = "padding-top: 30px;">Register</p>
<form action = "created.php" method = "POST">
Name: <input type = "text" name= "name"><br><br>
Email: <input type = "email" name ="email"><br><br>
Phone: <input type = "text" name="phone"><br><br>
Username: <input type = "text" name = "username"><br><br>
Passcode: <input type = "password" name="password"><br><br>
<input type = "submit">
</form>
</div>
</center>
</div>
</body>
</html>