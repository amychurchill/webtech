<?php
include "config.php";

$gscore = 0;
$vscore = 0;
$uscore = 0;
$nscore = 0;
if ($_POST["use"] == "gucci") {
	$gscore += 1;
} 
elseif ($_POST["use"] == "vans"){
	$vscore += 1;
}
elseif ($_POST["use"] == "ugg"){
	$uscore += 1;
}
elseif ($_POST["use"] == "nike"){
	$nscore += 1;
}

if ($_POST["mat"] == "gucci") {
	$gscore += 1;
} 
elseif ($_POST["mat"] == "vans"){
	$vscore += 1;
}
elseif ($_POST["mat"] == "ugg"){
	$uscore += 1;
}
elseif ($_POST["mat"] == "nike"){
	$nscore += 1;
}

if ($_POST["price"] == "gucci") {
	$gscore += 1;
} 
elseif ($_POST["price"] == "vans"){
	$vscore += 1;
}
elseif ($_POST["price"] == "ugg"){
	$uscore += 1;
}
elseif ($_POST["price"] == "nike"){
	$nscore += 1;
}

if ($_POST["type"] == "gucci") {
	$gscore += 1;
} 
elseif ($_POST["type"] == "vans"){
	$vscore += 1;
}
elseif ($_POST["type"] == "ugg"){
	$uscore += 1;
}
elseif ($_POST["type"] == "nike"){
	$nscore += 1;
}

if ($_POST["season"] == "gucci") {
	$gscore += 1;
} 
elseif ($_POST["season"] == "vans"){
	$vscore += 1;
}
elseif ($_POST["season"] == "ugg"){
	$uscore += 1;
}
elseif ($_POST["season"] == "nike"){
	$nscore += 1;
}

if ($_POST["in"] == "gucci") {
	$gscore += 1;
} 
elseif ($_POST["in"] == "vans"){
	$vscore += 1;
}
elseif ($_POST["in"] == "ugg"){
	$uscore += 1;
}
elseif ($_POST["in"] == "nike"){
	$nscore += 1;
}

if ($_POST["char"] == "gucci") {
	$gscore += 1;
} 
elseif ($_POST["char"] == "vans"){
	$vscore += 1;
}
elseif ($_POST["char"] == "ugg"){
	$uscore += 1;
}
elseif ($_POST["char"] == "nike"){
	$nscore += 1;
}

if ($_POST["strength"] == "gucci") {
	$gscore += 1;
} 
elseif ($_POST["strength"] == "vans"){
	$vscore += 1;
}
elseif ($_POST["strength"] == "ugg"){
	$uscore += 1;
}
elseif ($_POST["strength"] == "nike"){
	$nscore += 1;
}

if ($_POST["weight"] == "gucci") {
	$gscore += 1;
} 
elseif ($_POST["weight"] == "vans"){
	$vscore += 1;
}
elseif ($_POST["weight"] == "ugg"){
	$uscore += 1;
}
elseif ($_POST["weight"] == "nike"){
	$nscore += 1;
}

if ($_POST["sole"] == "gucci") {
	$gscore += 1;
} 
elseif ($_POST["sole"] == "vans"){
	$vscore += 1;
}
elseif ($_POST["sole"] == "ugg"){
	$uscore += 1;
}
elseif ($_POST["sole"] == "nike"){
	$nscore += 1;
}

$gscore =($gscore / 10) * 100;
$vscore =($vscore / 10) * 100;
$uscore =($uscore / 10) * 100;
$nscore =($nscore / 10) * 100;

echo "Here are your scores for each shoe brand. The brand with the highest score is the brand which is best fit for you!<br>
Gucci: $gscore%<br>
Vans: $vscore%<br>
UGG: $uscore%<br>
Nike: $nscore%";

mysqli_select_db($conn, 'shu');
$sql = "UPDATE accounts
SET gscore = '$gscore', vscore ='$vscore', uscore = '$uscore', nscore = '$nscore'
WHERE user = $_SESSION['username']";
?>
