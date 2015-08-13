<!DOCTYPE html>
<html>
<body>

<?php
class Sınıfım
{
    protected function işlevim() {
        echo "Sınıfım::işlevim() <br>";
    }
}

class BaşkaSınıf extends Sınıfım
{
    //Ebeveynin tanımını geçersiz kılalım
    public function işlevim() {
        //Ama hala ebeveynin işlevini çağırabiliriz
        parent::işlevim();
        echo "BaşkaSınıf::işlevim()<br>";
    }
}

$class = new BaşkaSınıf();
$class->işlevim();
?>
</body>
</html>