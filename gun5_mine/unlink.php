<!DOCTYPE html>
<html>
<body>

<?php


$dosya = "ozgur.txt";

if (file_exists($dosya)) {
    $sil = unlink($dosya);
    if ($sil) {
        //işlemler
        echo "Tebrikler";
        echo "";

    } else {
        echo "Dosya yok önce oluşturmak lazım";
        echo '<a href="fwrite.php> oluşturmak için tıkla</a>"';

    }
}



?>

</body>
</html>