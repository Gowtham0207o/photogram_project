<?php

function load_template($value){
    include $_SERVER['DOCUMENT_ROOT']."/app/_templates/$value.php";
}
function load_logo($value){
    include $_SERVER['DOCUMENT_ROOT']."/app/$value.jpg";
}

?>