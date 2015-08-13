<!DOCTYPE html>
<html>
<body>

<?php

$cars = array(
    array ("name" => "Volvo", "stock" => "22", "sold" => "18"),
    array ("name" => array(
        "bir" => "kedi", "iki" => "at", "uc" => array(
            "kabuklu" => "karafatma", "kanatli" => "kelebek"
        ),
    ), "stock" => "15", "sold" => "13"),
    array ("name" => "Land Rover", "stock" => "5", "sold" => "2")
);

echo "<pre>";
print_r($cars);

echo $cars[0]['sold'];
echo $cars[2]["name"];
echo "<br>";
echo $cars[1]['name']['iki'];
echo $cars[1]['name']['uc']['kanatli'];

?>

</body>
</html>