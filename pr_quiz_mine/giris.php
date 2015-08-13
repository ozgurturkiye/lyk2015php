<?php
// Start the session
session_start();
?>
    <!DOCTYPE html>
    <html>
    <body>

    <?php

    //Session açılmışmış kontrol edilecek
    if(isset($_SESSION["username"]) && $_SESSION["username"] == "ozgur" and $_SESSION["password"] == "123" ) {  //
        echo "Giriş başarılı";
        //Buraya sorular tek tek verilecek.

    } else {
        echo "Yetkisiz erişim <br/>";
        // destroy the session
        session_destroy();
        echo '<a href="index.php">Anasayfaya ulaşmak için tıklayınız</a>';
    }
    ?>

    </body>
    </html>
