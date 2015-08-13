<!DOCTYPE html>
<html>
<body>

<?php
$t = date("H"); // H saati getiriyor ör: 10:23 ise 10 döner

if($t < "20") {
	echo "Darkness does not cover all land (because time is $t yet)";
}
echo "<br>";

if($t < "10") {
	echo "Have a good morning";
}	elseif($t < "20") {
		echo "Have a good day";
}  else {
		echo "have a good night";
}

?>

</body>
</html>
