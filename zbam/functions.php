<?php
/**
 * Created by PhpStorm.
 * User: m1
 * Date: 09.08.2015
 * Time: 11:44
 */
//The real power of PHP comes from its functions; it has more than 1000 built-in functions.
//Note 	Function names are NOT case-sensitive.
function writeMsg() {
    echo "Hello world! <br>";
}

writeMsg(); // Call the function

//function with argument
function familyName($fname, $year){
    echo "$fname isimli kişi $year yılında doğdu <br>";
}

familyName("özgür","1900");
familyName("ali","1800");
familyName("ayşe","2000");

//Default argument value
function setHeight($minheight = 30){
    echo "The height is: $minheight <br>";
}

setHeight(350);
setHeight(); //will use the default value of 30
setHeight("Patates");
setHeight("350");

//Returning value
function sum($x, $y){
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = ". sum(5, 10) . "<br>";

?>