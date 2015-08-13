<?php
/*
In PHP, we have the following looping statements:

while - loops through a block of code as long as the specified condition is true
do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
for - loops through a block of code a specified number of times
foreach - loops through a block of code for each element in an array

*/
//while loop
echo "while loop <br>";
$x = 1;

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}

//do while loop
echo "do while loop <br>";
$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

//The PHP for loop
echo "for loop <br>";
for ($x = 0; $x <=10; $x++){
    echo "The number is: $x<br>";
    if ($x > 4){
        break;  // Break the code when you want
        //additional info if you write "break 3" 3 loops breaks
    }
}

//The PHP foreach loop
echo "fereach loop <br>";
$colors = array("red", "blue", "green", "yellow");

foreach($colors as $value) {
    echo "$value <br>";
}

foreach($colors as $key => $value) {   //Burada hem key hem value değerini kullanıyoruz. ++
    echo "$key inci eleman $value <br>";
}

?>
