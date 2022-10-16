<?php
include 'libs/load.php';

$obj = new user('gopi');
$obj->user::setfirstname("gopal");
print($obj->user::getfirstname());
?>