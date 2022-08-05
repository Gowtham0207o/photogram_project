<?php
include_once 'includes_class/mic.class.php';
include_once 'includes_class/database_class.php';
include $_SERVER['DOCUMENT_ROOT']."/app/libs/includes_class/user_class.php";
include $_SERVER['DOCUMENT_ROOT']."/app/libs/includes_class/database.class.php";


function load_template($value){
    include $_SERVER['DOCUMENT_ROOT']."/app/_templates/$value.php";
}



function check_login($user,$pass){
user::login($user,$pass);

}
function check_signup($user,$email,$phone,$pass){
user::signup($user,$email,$phone,$pass);

}


?>
