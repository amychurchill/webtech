<?php

include "config.php";

$num = rand(1,3);
echo"<h1>Your result is: </h1>";
switch($num){
	case 1:
		echo"Nike Brand";
		break;
	case 2:
		echo"Vans Brand";
		break;
	case 3:
		echo"Gucci Brand";
		break;
	case 4:
		echo"Converse Brand";
		break;
	case 5:
		echo"Adidas Brand";
		break;
	case 6:
		echo"Uggs Brand";
		break;
}


?>