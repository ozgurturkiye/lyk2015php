<?php
/**
 * Created by PhpStorm.
 * User: m1
 * Date: 09.08.2015
 * Time: 17:22
 */
/*
 * Note 	Think SECURITY when processing PHP forms!

This page does not contain any form validation, it just shows how you can send and retrieve form data.

However, the next pages will show how to process PHP forms with security in mind! Proper validation of form data is important to protect your form from hackers and spammers!
 *
 * Developers prefer POST for sending form data.
 */


?>

<html>
<body>

<form action="" method="get">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

</body>
</html>


Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
