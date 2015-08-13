<?php
/**
 * Created by PhpStorm.
 * User: m1
 * Date: 11.08.2015
 * Time: 00:11
 */
//
class oyuncular
{

    public $yaş = "22";
    public $fiyat = "50 milyon €";
    public $boy ="1,75";
    public $kilo = "68";

    function tanıtım() {
        echo "Ben $this->yaş yaşında ve $this->boy boyundayım";

    }
}

$messi = new oyuncular();
echo $messi->yaş;
$messi->tanıtım();

?>