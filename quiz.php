<?php
include "config.php";

echo"<link rel='stylesheet' type='text/css' href='stylesheet.css'>";

echo"

	<style>
	body {
		padding-top: 15%;
		text-align: center;
	}
	
	p {
		font-size: 50pt;
	}
	</style>
<div class='navbar'>
	<ul>
		<li><a href='home.php'>Shu</a></li>
		<li><a href='login.php'>Log In</a></li>
		<li><a href='register.php'>Register</a></li>
		<li><a href='catalog.html'>Catalog</a></li>
		<li><a href='quiz.php'>Find Your Shu</a></li>
		<li><a href='order.php'>Order</a></li>
	</ul>
</div>";

echo "<div id='shoe1'></div>";



$start = "<div id='pos'><p id='up'> Find your Perfect Shoe</p><form action='results.php' method='post'><br>";
// COLOR
$one = "Please select a color<br><input type='radio' name='color' value='Blue' required> Blue<br><input type='radio' name='color' value='Red' required>Red<br><input type='radio' name='color' value='Yellow' required>Yellow<br><br>";
// TYPE
$two = "Please select a type<br><input type='radio' name='type' value='Sport' required> Sport<br><input type='radio' name='type' value='fashsion' required>fashion<br><input type='radio' name='type' value='walking' required>Walking<br><input type='radio' name='type' value='comfort' required>Comfort<br><br>";
//MATERIAL
$four = "Please select a material<br><input type='radio' name='mat' value='leather' required> Leather<br><input type='radio' name='mat' value='glitter' required>Glitter<br><input type='radio' name='mat' value='rubber' required>Rubber<br><input type='radio' name='mat' value='cloth' required>Cloth<br><br>";
// Price range
$five = "Please select a price range<br><input type='radio' name='price' value='little' required> 10-40 dollars<br><input type='radio' name='price' value='med' required>40-100 dollars<br><input type='radio' name='price' value='lot' required>100-200 dollars<br><input type='radio' name='price' value='ton' required>1000-2000 dollars<br><br>";
$end = "<br><input type='submit' value='submit'><br><br></form>";


$quizarray = array($one, $two, $four, $five);
shuffle($quizarray);

echo $start . implode("",$quizarray) . $end;



?>