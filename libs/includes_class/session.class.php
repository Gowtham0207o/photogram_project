<?php
class session{
    public static function start(){
        session_start();
        
    }
    public static function set($key,$value){
       $_SESSION[$key]=$value;
        
    }

public static function get($key){
    if(session::isset($key,$default=false)){
        return $_SESSION[$key];
    }else{
        return $default;
    }

}
public static function isset($key){
    return isset($_SESSION[$key]);
    
}
public static function destroy(){
    session_destroy();
    
}public static function delete($key){

    session_unset($_SESSION[$key]);

    
}public static function unset(){
    session_unset();

    
}



}

?>