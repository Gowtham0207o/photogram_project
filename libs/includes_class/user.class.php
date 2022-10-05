<?php 


class user{
public function __construct($username){

$this->conn= database::get_connection();
$this->conn->query();

}

public static function signup($user,$email,$phone,$pass){
    database::get_connection();
    $options = [
    
      'cost' => 12,
  ];
    $pass=password_hash($pass,PASSWORD_BCRYPT,$options);
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



$quer="SELECT * FROM `photogram_login` WHERE `email` = '$user'";
$conn=database::get_connection();

$result = $conn -> query($quer);
 $num = $result->num_rows;
 echo $num;

 if($num==1) {

  $row = $result -> fetch_assoc();

   if(password_verify($pass,$row["password"])){
    
    return false;
   }
 else{
   $ern="please enter the valid credential password mismatch";
   return $ern;
  
 }
}else{

  $er="please enter the valid credentials";
 return $er;

 
}

 database::$conn->close();
}
public function __destruct()
{
  $this->conn->close();
}

public static function setavatar(){

}
public static function setbio(){
  
}
}
?>