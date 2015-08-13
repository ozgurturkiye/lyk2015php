<?php
/**
 * Created by PhpStorm.
 * User: m1
 * Date: 09.08.2015
 * Time: 11:59
 */
//array istediğin kadar iç içe oluşturulabilir. 2,3,4,5 vb boyutlu
$oyuncular = array (
                    array("ad" => "özgür", "soyad" => "Bay", "yas" => "22"),
                    array("ad" => "Mehmet", "soyad" => "Eksen", "yas" => "28")
            );

var_dump($oyuncular);

$encode = json_encode($oyuncular);
print_r($oyuncular);
echo "<hr />";
print_r(json_decode($encode, true));  //sona eklenen true düzgün görüntülenmesi için
//echo "</pre>";
foreach($oyuncular as $k => $v){
    foreach($v as $kk => $vv) {
        echo "$vv";
    }
    echo "<hr>";
}

//Arrays
$cars = array("Volvo", "Toyota", "BMW");
echo "I would like " . $cars[0] . ", " . $cars[1] . ", " . $cars[2] , ".";

/*

Create an Array in PHP

In PHP, the array() function is used to create an array:
array();

In PHP, there are three types of arrays:

    Indexed arrays - Arrays with a numeric index
    Associative arrays - Arrays with named keys
    Multidimensional arrays - Arrays containing one or more arrays

 */

//Get the length of an array
echo count($cars);

//Associative arrays
$age = array("ozgur" => "30", "ali" => "25", "ayse" => "22");
echo $age['ozgur'];
echo $age['ali'];
echo $age['ayse'];
echo "<br>";

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

?>