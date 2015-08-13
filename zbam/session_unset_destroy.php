<?php
/**
 * Created by PhpStorm.
 * User: m1
 * Date: 10.08.2015
 * Time: 12:05
 */
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
//Remove all session variables
session_unset();

//Destroy all session
session_destroy();

echo "All session variables removed and sessions Destroyed"
?>

</body>
</html>
