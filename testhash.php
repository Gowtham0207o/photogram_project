<?php
// $pass=isset($_GET['pass'])? $_GET['pass']:"gowtham the mass";
// echo(password_hash($pass,PASSWORD_BCRYPT)."\n");
// echo(md5("gow tham"));
$pas=isset($_GET['pass']);
echo $_GET['pass'];
$options = [
    'cost' => 12,
];
if($pas){
    $s=password_hash($_GET['pass'],PASSWORD_BCRYPT,$options);
    echo ("$s\n");
    ?>
    <break>
    <?
    $f=password_verify($_GET['pass'],$s);
    echo ("\r\n ").$f;
}
?>