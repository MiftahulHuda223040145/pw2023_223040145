<?php 

session_start();
$_SESSION = array();
session_unset();
session_destroy();

setcookie('id', '');
setcookie('key');

header ("Location: ../index.php");


?>