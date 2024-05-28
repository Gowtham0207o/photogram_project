<?php
class user_session{



    public function __construct($id)
    {
        $this->conn = database::get_connection();
        $this->id = $id;
      $this->data=null;
        $sql = "SELECT * FROM `session` WHERE `uid` = '$id' LIMIT 1";
        $result = $this->conn->query($sql);
        if ($result->num_rows) {
            $rows = $result->fetch_assoc();
            $this->data=$rows;
            $this->uid = $rows['uid'];  //updating this from database
        }else{
            throw new exception("session is invalid.");
        }

    }



public function getuser(){
    return new user($this->uid);
}




public static function authenticate($username,$pass)
{
try
{
    $user_cred= user::login($username,$pass);
    $username=$user_cred["username"];

  $conn=  database::get_connection();
  $token=md5(rand(100,99999).$user_cred["password"].$user_cred["email"]);
  $ip=$_SERVER['REMOTE_ADDR'];
  $id=$user_cred["id"];

 $user_agent= $_SERVER['HTTP_USER_AGENT'];

 $querys= "INSERT INTO `session` (`uid`, `token`, `login_time`, `ip`, `user_agent`, `active`)
     VALUES ('$id' , '$token' , now() , '$ip' , '$user_agent' , '1');";

     $session_update=$conn->query($querys);
   
     if($session_update){
        session::set('session_token',$token);
        return $token;
    
     }else{
        throw new exception("the session updattion process is not updated in database");

     }
}catch(exception $e){
    throw new exception($e);
}
}


public function isvalid(){
    $newt=strtotime("+60 minutes", strtotime($this->data['login_time']));
    $expiry=date('Y-m-d H:i:s', $newt);
    $time=date('Y-m-d H:i:s');
    if($time <= $expiry){
    print("your session is valid");
    }else{
        print("your session is invalid");
    }
    }
    
public static function authorize($token){
    $quer="SELECT * FROM `session` WHERE `token` = '$token' LIMIT 1";
    $conn = database::get_connection();
    $result = $conn->query($quer);
    $num = $result->num_rows;
print($num);
    if ($num == 1) {

        $row = $result->fetch_assoc();

    $user = new user_session($row['uid']);


    $ipaddress = $_SERVER['REMOTE_ADDR'];
print($ipaddress ."and" . $row['ip']);
  
    if($ipaddress==$row['ip'] ){
        print("the token has been validated");
     
        return true;
    }else{
        print("the token is invalid");
      return false;

    }
}else{
    print("the token is ikfkfknvalid");
    return false;
}
}



}



?>