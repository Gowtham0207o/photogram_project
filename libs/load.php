<?php

function load_template($value){
    include $_SERVER['DOCUMENT_ROOT']."/app/_templates/$value.php";
}



function check_login($user,$pass){
  $servername = "mysql.selfmade.ninja";
  $username = "gowtham032";
  $password = "gowtham@@@2003";
  $dbname = "gowtham032_photogram_login";

    if($user == "gowthamravi032@gmail.com" and $pass == "password" ){
        return true;
    }else{
        return false;
    }
}
function signup($user,$email,$phone,$pass){
  
    $servername = "mysql.selfmade.ninja";
    $username = "gowtham032";
    $password = "gowtham@@@2003";
    $dbname = "gowtham032_photogram_login";
    
    // Create connection
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
      
    $sql = " INSERT INTO `authentication` (`username`, `password`, `phone`, `email`, `blocked`, `active`)
    VALUES ('$user','$pass','$phone', '$email', '0', '1');";
    $result=true;
    if ($conn->query($sql) === true) {
      $result=false;
    } else {
     $result=$conn->error;
    }
    
    $conn->close();
  return $result;
}
function login_check($user,$pass)
{
  $servername = "mysql.selfmade.ninja";
  $username = "gowtham032";
  $password = "gowtham@@@2003";
  $dbname = "gowtham032_photogram_login";

      // Create connection
    
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
  
    $sql="SELECT * FROM `authentication` WHERE `email` = '$user' AND `password` = '$pass' ";
   $quer=mysqli_query($conn,$sql);
    $num = mysqli_num_rows($quer);
    $result=false;
    if($num > 0) {
      $result=false;
    }else{
      $result="please enter the validate credential";
    }
    $conn->close();
  return $result;
}
?>
