<!DOCTYPE html>
<html>
<body>

<?php
echo strlen("Hello world!"); //Karakter sayısı 12
echo "<br>".strlen("12345"); // 5
echo "<br>". strrev("Merhaba"); //outputs abahreM
// Replace Text within a String
echo "<br>";
$ad1 = "Ozgur";
echo str_replace("isim", "$ad1", "Merhaba isim"); //

?>
 
</body>
</html>
