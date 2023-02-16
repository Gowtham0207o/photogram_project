<?php
class logincheck{
    public static function check(){
        $conn=database::get_connection();
        $quer="SELECT `login_time`, `token`, `ip`, `id` FROM `session` ORDER BY `login_time` DESC LIMIT 1;";
        $result = $conn->query($quer);

        $row=$result->fetch_assoc();

        $old_token=$row['token'];

        $ipaddress = $_SERVER['REMOTE_ADDR'];

        $new_token=session::get('session_token');
        
        if(($new_token==$old_token) && ($ipaddress==$row['ip']) ){
            return true;
        }else{
          return false;

        }
    }
    public static function loggedin($key=false){
        return $key;
    }

    

}
?>