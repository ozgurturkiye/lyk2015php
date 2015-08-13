<!DOCTYPE html>
<html>
<body>

<?php
$integer = 6554;
var_dump($integer);
echo "<br />";
$float = 10.22;
var_dump($float);
echo "<br />";
$bolean = true;
var_dump($bolean);
echo "<br />";
$array = array("bir", "iki", "uc");
var_dump($array);
echo "<br />";
// object
class Araba {
	function Araba() {
		$this->model = "BMW";
	}
}
//create an object
$minik = new Araba();

//show object properties
echo $minik->model . "  ---  " ;
var_dump($minik);
echo "<br />";
$null = null;
var_dump($null);
?>

</body>
</html>


