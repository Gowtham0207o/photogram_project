<?php 


class user{

public static function signup($user,$email,$phone,$pass){
    database::get_connection();
    $sql = " INSERT INTO `photogram_login` (`username`, `password`, `phone`, `email`, `blocked`, `active`)
    VALUES ('$user','$pass','$phone', '$email', '0', '1');";
    $result=true;
    if (database::$conn->query($sql) == true) {
      $result=false;
    } else {
     $result=database::$conn->error;
    }
    
    database::$conn->close();
  return $result;


}
public static function login($user,$pass){
  database::get_connection();

$sql="SELECT * FROM `photogram_login` WHERE `email` = '$user' AND `password` = '$pass' ";
$quer=mysqli_query(database::$conn,$sql);
 $num = mysqli_num_rows($quer);
 $result=false;
 if($num > 0) {
   $result=false;
 }else{
   $result="please enter the valid credential";
 }
 
 database::$conn->close();
return $result;
}


}
?>