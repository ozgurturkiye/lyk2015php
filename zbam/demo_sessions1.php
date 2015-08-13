<?php
/**
 * Created by PhpStorm.
 * User: m1
 * Date: 10.08.2015
 * Time: 11:38
 */
//Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "Yeşil";
$_SESSION["favanimal"] = "Köpek";
$_SESSION["favfood"] = "Çorba";
echo "Session variables are set. ";
?>

</body>
</html>
