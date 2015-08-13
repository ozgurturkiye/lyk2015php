<!DOCTYPE html>
<html>
<body>

<?php
class Sınıfım
{
    const SABİT_DEĞER = 'Bir sabit değer';
}

echo Sınıfım::SABİT_DEĞER;

class BaşkaSınıf extends Sınıfım
{
    public static $duruk = "Bir duruk değişken";

    public static function ikiNoktaÇifti() {
        echo parent::SABİT_DEĞER . "\n";
        echo self::$duruk . "\n";
    }
}

$sınıfadı = "BaşkaSınıf";
echo $sınıfadı::ikiNoktaÇifti();

BaşkaSınıf::ikiNoktaÇifti();
?>
</body>
</html>