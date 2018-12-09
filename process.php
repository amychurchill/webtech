<!DOCTYPE html>
<html>
<head>
	<title>Shu</title>
	<!--setting favicon-->
	<link rel="icon"
		type="image/png"
		href="logo.jpg">
	<!--connecting page to stylesheet-->
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<style>
	p {
		padding-top: 50px;
	}
	</style>
</head>
<?php
// code from config.php will be included in this file 
include "config.php";

$sql = "CREATE DATABASE shu";
if (mysqli_query($conn, $sql)) {
	// echo "Database created successfully";
} else {
	// echo "Error creating database: " . mysqli_error($conn);
}

mysqli_select_db($conn, 'shu');
// sql to create table
$sql = "CREATE TABLE accounts (
name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
phone CHAR(10) NOT NULL,
user VARCHAR(30) NOT NULL,
pass VARCHAR(30) NOT NULL,
gscore INT(2) UNSIGNED,
vscore INT(2) UNSIGNED,
uscore INT(2) UNSIGNED,
nscore INT(2) UNSIGNED
)";
mysqli_query($conn, $sql);

// inserting values into the table accounts
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$user = $_POST["user"];
$pass = $_POST["pass"];

$frequency = 0;
$sql = 'SELECT * FROM accounts';
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
	if ($row["user"] == $user) {
	   $frequency += 1;
	}
}

if ($frequency == 0) {
	$sql = "INSERT INTO accounts 
	VALUES ('$name', '$email', '$phone', '$user', '$pass', NULL, NULL, NULL, NULL)";
	mysqli_query($conn, $sql);
	echo "<p>Congratulations! You have successfully created an account.</p>";
} else {
	echo "<p>Great username, but I'm afraid it has already been snatched! Try to <a href = 'register.php'>register again</a> using a different username.</p>";
}
?>
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
</body>
</html>
