<!DOCTYPE html>
<html>
<body>
<?php
// case-sensitive constant name 
define("GREETING", "Welcome to homepage!");
echo GREETING;
echo "<br>";
// Constans are Global

function myTest() {
	echo GREETING;
}

myTest();
?>

</body>
</html>
