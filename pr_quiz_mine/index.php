<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
if (isset($_POST["username"])) {
    if ($_POST["username"] == "ozgur" and $_POST["password"] == "123") {
        $_SESSION["username"] = "ozgur";
        $_SESSION["password"] = "123";
        echo "Hoş geldiniz " . $_SESSION['username'] . " ";
        echo '<a href="giris.php">Sorulara ulaşmak için tıklayınız</a>';
    } else {
        echo "Yanlış kullanıcı adı parola";
        unset ($_POST["username"]);
        session_destroy();
    }
}

if (!isset($_POST["username"])) {
?>
    <?php require_once 'form.php';?>
<?php
}
?>

</body>
</html>
