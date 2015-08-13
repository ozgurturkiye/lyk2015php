<?php
/**
 * Created by PhpStorm.
 * User: m1
 * Date: 12.08.2015
 * Time: 14:27
 */
$dir = '/home/m1';
$files1 = scandir($dir);  //Bulunduğumuz dizindeki dosya ve dizinleri listeler
$files2 = scandir($dir, 1);

echo "<pre>";
print_r($files1);
print_r($files2);

/*
foreach ($files1 as $k => $v) {
    echo $k . "=>" . $v . "<br>";
}

if (isset($_GET[$dir])) {

}
*/

?>


<!-- Veri kodlama türü, enctype, aşağıdaki gibi belirtilmek ZORUNDADIR -->
<form enctype="multipart/form-data" action="__URL__" method="POST">
    <!-- MAX_FILE_SIZE dosya giriş alanından önce bulunmak zorundadır -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- input elemanının adı $_FILES dizisinin içindeki ismi belirler -->
    Bu dosyayı gönder: <input name="kullanici_dosyasi" type="file" />
    <input type="submit" value="Dosyayı Gönder" />
</form>
