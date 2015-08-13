<!DOCTYPE html>
<html>
<body>

<?php


$isimler = [
    "ahmet",
    "ali",
    "veli",
    "ömer",
];

$json = json_encode($isimler);

$dosya = "ozgur.txt";

if (file_exists($dosya)) {
    //işlemler
    $open = fopen($dosya, "w");
    fwrite($open, $json);   //Buraya dosya adı değil resource yazılır.
    fclose($open);
} else {
    echo "Bu işte bir terslik var";
    touch($dosya);
}
?>

</body>
</html>