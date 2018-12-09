<!DOCTYPE html>
<html>
<head>
	<title>Shu</title>
	<!--setting favicon-->
	<link rel="icon"
		type="image/png"
		href="logo.jpg">
	<link rel = "stylesheet" type = "text/css" href = "stylesheet.css">
</head>
<?php
include "config.php";
$sql = "CREATE DATABASE shu";
mysqli_select_db($conn, 'users');

$sql = "CREATE TABLE userinfo (
username VARCHAR(30) NOT NULL,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
grade int(5)
)";

echo "<div id='shoe1'></div>";


$start = "<h1> Find your Perfect Shoe</h1><form action='results.php' method='post'><br>";
// usage
$one = "What will you be using this pair of shoes for?<br>
<input type='radio' name='use' value='nike' required>Athletics<br>
<input type='radio' name='use' value='vans'>Every-day situations<br>
<input type='radio' name='use' value='gucci'>Special occassions<br>
<input type='radio' name='use' value='ugg'>Warmth and comfort<br><br>";
// material
$two = "What material will your shoe be made of?<br>
<input type='radio' name='mat' value='gucci' required>Leather<br>
<input type='radio' name='mat' value='nike'>Mesh<br>
<input type='radio' name='mat' value='vans'>Canvas<br>
<input type='radio' name='mat' value='ugg'>Sheepskin<br><br>";
// price range
$three = "What's your price range?<br>
<input type='radio' name='price' value='vans'>$50 - $80<br>
<input type='radio' name='price' value='nike'>$80 - $150<br>
<input type='radio' name='price' value='ugg'>$150 - $200<br>
<input type='radio' name='price' value='gucci'>$1000 - $2000<br><br>";
// type
$four = "What kind of shoe are you looking for?<br>
<input type='radio' name='type' value='nike' required>Gym<br>
<input type='radio' name='type' value='vans'>Sneakers<br>
<input type='radio' name='type' value='gucci'>Heels<br>
<input type='radio' name='type' value='ugg'>Boots<br><br>";
// season
$five = "In which season will you mostly be wearing these shoes?<br>
<input type='radio' name='season' value='nike' required>Spring<br>
<input type='radio' name='season' value='gucci'>Summer<br>
<input type='radio' name='season' value='vans'>Fall<br>
<input type='radio' name='season' value='ugg'>Winter<br><br>";
// inner shoe
$six = "Which material do you envision surrounding the inside of your perfect shoe?<br>
<input type='radio' name='in' value='vans' required>Suede<br>
<input type='radio' name='in' value='nike'>Foam<br>
<input type='radio' name='in' value='ugg'>Wool<br>
<input type='radio' name='in' value='gucci'>Fabric<br><br>";
// characteristic
$seven = "Which characteristic do you see your shoes radiating?<br>
<input type='radio' name='char' value='nike' required>Sporty<br>
<input type='radio' name='char' value='gucci'>Laid-back<br>
<input type='radio' name='char' value='vans'>Snug, soft<br>
<input type='radio' name='char' value='ugg'>Fashionable<br><br>";
// durability
$eight = "What should the shoe's durability be?<br>
<input type='radio' name='strength' value='gucci' required>It only needs to be slightly durable. I'll only be using it occassionally.<br>
<input type='radio' name='strength' value='ugg'>I'll be using it for certain seasons, so it should be durable, but not excessively.<br>
<input type='radio' name='strength' value='vans'>I'll be using these shoes simply for walking. As long as they don't fall apart as I walk, they should be fine.<br>
<input type='radio' name='strength' value='nike'>I'm using these shoes for running, hiking, mountain climbing, and all that demanding jazz! I need heavy-duty shoes.<br><br>";
// weight
$nine = "What should the shoe's weight be?<br>
<input type='radio' name='weight' value='gucci' required>Ultralight (390-400g)<br>
<input type='radio' name='weight' value='nike'>Light (450-460g)<br>
<input type='radio' name='weight' value='ugg'>Normal (670-690g)<br>
<input type='radio' name='weight' value='vans'>Heavy (1130-1150g)<br><br>";
// sole thickness
$ten = "How thick should the sole of the shoe be?<br>
<input type='radio' name='sole' value='gucci' required>Almost invisible!<br>
<input type='radio' name='sole' value='nike'>Thin<br>
<input type='radio' name='sole' value='ugg'>Normal<br>
<input type='radio' name='sole' value='vans'>Thick<br><br>";
$end = "<input type='submit' value='submit'><br><br></form>";

$quizarray = array($one, $two, $three, $four, $five, $six, $seven, $eight, $nine, $ten);
shuffle($quizarray);

echo $start . implode("",$quizarray) . $end;
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
