<?php
/**
 * Created by PhpStorm.
 * User: m1
 * Date: 09.08.2015
 * Time: 14:59
 */

$numbers = array(4, 6, 2, 22, 11);
var_dump($numbers);
echo "<br>";
sort($numbers);
var_dump($numbers);
echo "<br>";
foreach($numbers as $value) {
    echo $value;
}
?>