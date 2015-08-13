<?php
/**
 * Created by PhpStorm.
 * User: m1
 * Date: 10.08.2015
 * Time: 21:02
 */
class BasitSınıf
{
    //Özellik bildirimi
    public $öntanımlı = "öntanımlı değer";

    // Yöntem tanımı
    public function ÖntanımlıyıGöster(){
        echo $this->öntanımlı;
    }
}

$ornek = new BasitSınıf();
echo $ornek->öntanımlı;
echo $ornek->ÖntanımlıyıGöster();
?>