<?php
//include_once 'includes_class/mic.class.php';
include $_SERVER['DOCUMENT_ROOT']."/app/libs/includes_class/user.class.php";
include $_SERVER['DOCUMENT_ROOT']."/app/libs/includes_class/logincheck.class.php";
include $_SERVER['DOCUMENT_ROOT']."/app/libs/includes_class/database.class.php";
include $_SERVER['DOCUMENT_ROOT']."/app/libs/includes_class/session.class.php";
session_start();


function load_template($value){
    include $_SERVER['DOCUMENT_ROOT']."/app/_templates/$value.php";
}



function check_login($user,$pass){
$result=user::login($user,$pass);
return $result;
}


function check_signup($user,$email,$phone,$pass){
user::signup($user,$email,$phone,$pass);

}


?>
