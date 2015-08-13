<!DOCTYPE html>
<?php
$uniler[] = [];
$uniler[] = "Çanakkale üni";
$uniler[] = "Balıkesi üni";
$uniler[] = "AİBU";
$uniler[] = "ODTU";

$hobiler[] = [];
$hobiler[] = "okçuluk";
$hobiler[] = "yüzme";
$hobiler[] = "rafting";

?>

<html>
<body>

<form action="kontrol.php">
    Adınız: <input type="text" name="ad"> <br>
    Soyadınız: <input type="text" name="soyad"> <br>
    Şifreniz: <input type="password" name="sifre"> <br>
    Doğum Tarihiniz: <input type="date" name="dogumtarih"> <br>
    Cinisiyet:
        <input type="radio" name="cinsiyet" value="kadin" id="kadin">
        <label for="kadin">Kadın</label>
        <input type="radio" name="cinsiyet" value="erkek" id="erkek">
        <label for="erkek">Erkek</label><br>
        <select name="okul">
            <?php
            foreach($uniler as $k => $v) {
                echo "<option value='$k'>$v</option>";
            }

            ?>
        </select>

    <select name="hobi">
        <?php
        foreach($hobiler as $k => $v) {
            echo "<input type='checkbox name='hobi[]' value='$k''" >;
        }

        ?>
    </select>

    <input type="submit">
</form>


</body>
</html>
