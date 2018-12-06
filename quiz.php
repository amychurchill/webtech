<?php
include "config.php";
$sql = "CREATE DATABASE users";
mysqli_select_db($conn, 'users');

$sql = "CREATE TABLE userinfo (
username VARCHAR(30) NOT NULL,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
grade int(5)
)";

echo "<div id='shoe1'></div>";

echo"<link rel='stylesheet' type='text/css' href='stylesheet.css'>";


$start = "<h1> Find your Perfect Shoe</h1><form action='results.php' method='post'><br>";
// COLOR
$one = "Please select a color<br><input type='radio' name='color' value='Blue' required> Blue<br><input type='radio' name='color' value='Red' required>Red<br><input type='radio' name='color' value='Yellow' required>Yellow<br><br>";
// TYPE
$two = "Please select a type<br><input type='radio' name='type' value='Sport' required> Sport<br><input type='radio' name='type' value='fashsion' required>fashion<br><input type='radio' name='type' value='walking' required>Walking<br><input type='radio' name='type' value='comfort' required>Comfort<br><br>";
// TYPE OF LACE 
$three = "Please select a color<br><input type='radio' name='lace' value='thin' required> Thin<br><input type='radio' name='lace' value='flat' required>Flat<br><input type='radio' name='lace' value='thick' required>Thick<br><br>";
//MATERIAL
$four = "Please select a material<br><input type='radio' name='mat' value='leather' required> Leather<br><input type='radio' name='mat' value='glitter' required>Glitter<br><input type='radio' name='mat' value='rubber' required>Rubber<br><input type='radio' name='mat' value='cloth' required>Cloth<br><br>";
// Price range
$five = "Please select a price range<br><input type='radio' name='price' value='little' required> 10-40 dollars<br><input type='radio' name='price' value='med' required>40-100 dollars<br><input type='radio' name='price' value='lot' required>100-200 dollars<br><br>";
$end = "<br><input type='submit' value='submit'><br><br></form>";


$quizarray = array($one, $two, $three, $four, $five);
shuffle($quizarray);

echo $start . implode("",$quizarray) . $end;



?>