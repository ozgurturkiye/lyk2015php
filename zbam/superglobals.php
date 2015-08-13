<?php
/**
 * Created by PhpStorm.
 * User: m1
 * Date: 09.08.2015
 * Time: 16:15
 */
$x = 75;
$y = 25;

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;

echo $_SERVER['PHP_SELF']; //Returns the filename of the currently executing script
echo "<br>";

//PHP $_REQUEST
//PHP $_REQUEST is used to collect data after submitting an HTML form.

?>

<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit" value="Send">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

</body>
</html>
