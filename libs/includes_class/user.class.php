<?php 


class user{
  public static $id=null;
public function __construct($username){

$this->conn= database::get_connection();
$this->username=$username;
$sql="SELECT * FROM `photogram_login` WHERE `username` = '$username' LIMIT 1";
$result=$this->conn->query($sql);
if($result->num_rows){
  $rows=$result-> fetch_assoc();
  $this->is=$rows['id'];
  $id=$is;

}



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
private static function getdata($var){
  if(!$this->conn){
    $this->conn=database::get_connection();
  }
  $quer="SELECT `$var` FROM `user_credentials` WHERE `id` = '$this->id' LIMIT 1";
  $result=$this->conn->query($quer);

  if($result->num_rows){
    return $result->fetchassoc()[$var];
  }else{
    return null;
  }
  

}
private static function setdata($var,$value){
  if(!$this->conn){
    $this->conn=database::get_connection();
  }
  $sql = "UPDATE `users` SET `$var`='$data' WHERE `id`='$this->id'";
  if($this->conn->query($sql)){
    return true;
  }else{
    return false;
  }
}
public function getavatar(){
return $this->getdata('avatar');
}
public function setavatar($value){
 return $this->setdata('avatar',$value);
}
public function setbio($value){
  return $this->setdata('bio',$value);
}
public function getbio(){
  return $this->getdata('bio');
}
public function setfirstname($value){
  return $this->setdata('firstname',$value);
}
public function getfirstname(){
  return $this->getdata('firstnmae');
}
public function getlastname(){
  return $this->getdata('lastname');
}
public function setlastname($value){
  return $this->setdata('lastname',$value);
}
public function getdob(){
  return $this->getdata('dob');
}
public static function setdob($value){
  return $this->setdata('dob',$value);
}
public static function getinstaid(){
  return $this->getdata('instagram');
}
public static function setinstaid($value){
  return $this->setdata('instagram',$value);
}
public static function gettwitterid(){
  return $this->getdata('twitter');
}
public static function settwitterid($value){
  return $this->setdata('twitter',$value);
}
public static function setlinkedinid(){
  //todo update this option
}
public static function getlinkedinid(){
  
}
public function __destruct()
{
  $this->conn->close();
}

}
?>