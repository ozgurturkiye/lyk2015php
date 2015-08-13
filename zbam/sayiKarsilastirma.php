<?php
$sayi1 = 10;
$sayi2 = 15;
$sayi3 = 20;


if ($sayi1 > $sayi2 and $sayi1 > $sayi3) {
    echo "en buyuk $sayi1";
} elseif ($sayi2 > $sayi1 and $sayi2 > $sayi3) {
    echo "En büyük $sayi2";
} else {
    echo "En büyük $sayi3";
}
?>