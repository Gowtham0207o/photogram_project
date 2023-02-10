<?php
class logincheck{
    public static function check(){
        $conn=database::get_connection();
        print(session::get('session_id'));
        if(session::get('session_id')){//we have change and check here that if the token is available or not
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