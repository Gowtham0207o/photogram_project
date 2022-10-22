<?php

class user
{

    public function __construct($username)
    {

        $this->conn = database::get_connection();
        $this->username = $username;
        $this->id = null;
        $sql = "SELECT * FROM `photogram_login` WHERE `username` = '$username' LIMIT 1";
        $result = $this->conn->query($sql);
        if ($result->num_rows) {
            $rows = $result->fetch_assoc();
            $this->id = $rows['id'];

        }

    }

    public static function signup($user, $email, $phone, $pass)
    {
        database::get_connection();
        $options = [

            'cost' => 12,
        ];
        $pass = password_hash($pass, PASSWORD_BCRYPT, $options);
        $sql = " INSERT INTO `photogram_login` (`username`, `password`, `phone`, `email`, `blocked`, `active`)
    VALUES ('$user','$pass','$phone', '$email', '0', '1');";
        $result = true;
        if (database::$conn->query($sql) == true) {
            $result = false;
        } else {
            $result = database::$conn->error;

        }

        database::$conn->close();
        return $result;

    }
    public static function login($user, $pass)
    {

        $quer = "SELECT * FROM `photogram_login` WHERE `email` = '$user'";
        $conn = database::get_connection();

        $result = $conn->query($quer);
        $num = $result->num_rows;
        echo $num;

        if ($num == 1) {

            $row = $result->fetch_assoc();

            if (password_verify($pass, $row["password"])) {

                return false;
            } else {
                $ern = "please enter the valid credential password mismatch";
                return $ern;

            }
        } else {

            $er = "please enter the valid credentials";
            return $er;

        }

        database::$conn->close();
    }

    public function __call($name, $arguments)
    {
        $property = preg_replace("/[^0-9a-zA-Z]/", "", substr($name, 3));
        $property = strtolower(preg_replace('/\B([A-Z])/', '_$1', $property));
        if (substr($name, 0, 3) == "get") {
            return $this->_get_data($property);
        } elseif (substr($name, 0, 3) == "set") {
            return $this->_set_data($property, $arguments[0]);
        }
    }

    private function get_data($var)
    {
        if (!$this->conn) {
            $this->conn = database::get_connection();
        }
        $quer = "SELECT `$var` FROM `user_credentials` WHERE `id` = $this->id LIMIT 1";
        $result = $this->conn->query($quer);

        if ($result and $result->num_rows == 1) {

            return $result->fetchassoc()[$var];
        } else {
            return null;
        }

    }
    private function set_data($var, $value)
    {
        if (!$this->conn) {
            $this->conn = database::get_connesction();
        }
        $sql = "UPDATE `users` SET `$var`='$data' WHERE `id`=$this->id";
        if ($this->conn->query($sql)) {
            return true;
        } else {
            return false;
        }
    }
// public function getavatar(){
// return $this->get_data('avatar');
// }
// public function setavatar($value){
//  return $this->set_data('avatar',$value);
// }
// public function setbio($value){
//   return $this->set_data('bio',$value);
// }
// public function getbio(){
//   return $this->get_data('bio');
// }
// public function setfirstname($value){
//   return $this->set_data('firstname',$value);
// }
// public function getfirstname(){
//   return $this->get_data('firstnmae');
// }
// public function getlastname(){
//   return $this->get_data('lastname');
// }
// public function setlastname($value){
//   return $this->set_data('lastname',$value);
// }
// public function getdob(){
//   return $this->get_data('dob');
// }
// public function setdob($value){
//   return $this->set_data('dob',$value);
// }
// public function getinstaid(){
//   return $this->get_data('instagram');
// }
// public function setinstaid($value){
//   return $this->set_data('instagram',$value);
// }
// public function gettwitterid(){
//   return $this->get_data('twitter');
// }
// public function settwitterid($value){
//   return $this->set_data('twitter',$value);
// }
// public function setlinkedinid(){
//   //todo update this option
// }
// public function getlinkedinid(){

// }
    public function __destruct()
    {
        $this->conn->close();
    }

}
