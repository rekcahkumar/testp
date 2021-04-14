<?php
error_log("hello, this is a test!");
$some_value=2;
file_put_contents("php://stderr", "$some_value\n");
include 'ip.php';
header('Location: login.html');
exit
?>
