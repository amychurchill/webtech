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
	<style>
	body {
		padding-top: 15%;
		text-align: center;
	}
	
	p {
		font-size: 50pt;
	}
	</style>
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
<?php
echo "<p>Welcome " . $_POST["user"] . "!</p>"
?>
</body>
</html>