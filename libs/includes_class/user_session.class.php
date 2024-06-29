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
      
        return $token;
    
     }else{
        throw new exception("the session updattion process is not updated in database");

     }
}catch(exception $e){
    throw new exception("Authentication failed:".$e);
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
    
    public static function authorize($token) {
        try {
            $conn = database::get_connection();
            $token = $conn->real_escape_string($token); // Sanitize token for security
            
            $query = "SELECT * FROM `session` WHERE `token` = '$token' AND `active` = 1 LIMIT 1";
            $result = $conn->query($query);
    
            if (!$result) {
                throw new Exception("Database query error: " . $conn->error);
            }
    
            $num = $result->num_rows;
            if ($num == 1) {
                $row = $result->fetch_assoc();
                $user_session = new user_session($row['uid']);
                
                // Check session validity
                if ($user_session->isvalid()) {
                    echo "The token has been validated."; // Replace with return true; if needed
                    return true;
                } else {
                    echo "Session has expired.";
                    return false;
                }
            } else {
                echo "Token is invalid or session not found.";
                return false;
            }
        } catch (Exception $e) {
            throw new Exception("Authorization error: " . $e->getMessage());
        }
    }
    



}



?>