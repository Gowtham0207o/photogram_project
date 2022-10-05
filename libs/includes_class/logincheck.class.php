<?php
class logincheck{
    public static function check(){
        if(session::get('is_loggedin')){
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