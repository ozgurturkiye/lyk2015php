<?php
/**
 * Created by PhpStorm.
 * User: m1
 * Date: 10.08.2015
 * Time: 11:51
 */
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . "." . "<br>";
echo "Favorite food is " . $_SESSION["favfood"] . ".";
print_r($_SESSION);
echo "<br>";

// Modify session variable
$_SESSION["favfood"] = "Karnı yarık :)";
print_r($_SESSION);
?>

</body>
</html>