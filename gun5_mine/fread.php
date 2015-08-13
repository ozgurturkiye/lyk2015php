<!DOCTYPE html>
<html>
<body>

<?php


$dosya = "ozgur.txt";

if (file_exists($dosya)) {
    //işlemler
    $open = fopen($dosya, "r");
    $oku = fread($open, filesize($dosya));
    fclose($open);
    $dizi = json_decode($oku);
    var_dump($dizi);
} else {
   echo "Dosya yok önce oluşturmak lazım";

}
?>

</body>
</html>