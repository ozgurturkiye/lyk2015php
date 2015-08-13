<?php
$sorular = array(
    array(
        "soru" => "Cumhuriyetin ilanı ?",
        "secenekler" => array(
            "a" => "1919",
            "b" => "1920",
            "c" => "1922",
            "d" => "1923",
        ),
        "dogrucevap" => "d",
    ),
    array(
        "soru" => "TBMM'nin açılışı ?",
        "secenekler" => array(
            "a" => "1919",
            "b" => "1920",
            "c" => "1922",
            "d" => "1923",
        ),
        "dogrucevap" => "b",
    ),
    array(
        "soru" => "İstanbul'un fethi ?",
        "secenekler" => array(
            "a" => "1453",
            "b" => "1450",
            "c" => "1552",
            "d" => "1455",
        ),
        "dogrucevap" => "a",
    ),
);

echo $sorular[0]["soru"];
echo $sorular[0]["secenekler"]["a"];
echo $sorular[0]["dogrucevap"];

echo "<pre>";
echo print_r($sorular);
//var_dump($sorular);

echo "<br/>";

?>
