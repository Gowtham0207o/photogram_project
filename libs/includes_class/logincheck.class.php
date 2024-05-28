<?php
class logincheck{
    public static function check() {
        $token = session::get('session_token');
        
        if (isset($token)) {
            try {
                $result = user_session::authorize($token);
                if ($result === true) {
                    return true;
                } else {
                    return false; // Do not redirect here
                }
            } catch (Exception $e) {
                return false;
            }
        }
        
        return false;
    }
    public static function loggedin($key=false){
        return $key;
    }

    

}
?>