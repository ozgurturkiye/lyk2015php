<?php
/**
 * Created by PhpStorm.
 * User: m1
 * Date: 10.08.2015
 * Time: 00:21
 */
if(!isset($_COOKIE["mevcut"])) {
    setcookie("mevcut", 2);
} else {
    $mevcut = $_COOKIE["mevcut"];
}
?>

<html>
<body>

<?php

if (!isset($_GET["islem"])) {
    echo "işlem henüz tanımlı değil";
} else {
    if ($_GET["islem"] == "yukari" ){
        if ($mevcut == 0) {
            setcookie("mevcut", 4);
        } else {
            setcookie("mevcut", $mevcut-1);
        }
    } elseif ($_GET["islem"] == "asagi" ) {
        if ($mevcut == 4) {
            setcookie("mevcut", 0);
        } else {
            setcookie("mevcut", $mevcut+1);
        }
    }

}

echo "<table border=1>";
for ($i = 0; $i < 5; $i++) {
    echo "<tr>";
    if ($i == $mevcut) {
        echo "<td>A</td>";
    } else {
        echo "<td></td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<form action="" method="get">
    <input type="hidden" name="sayfa">
    <input type="submit" name="islem" value="yukari">
    <input type="submit" name="islem" value="asagi">
</form>

</body>
</html>

