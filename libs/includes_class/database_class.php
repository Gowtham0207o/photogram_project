<?php
class database
{
public static $conn= null;
public static function get_connection(){
if (database::$conn==null){
    $servername = "mysql.selfmade.ninja";
    $username = "gowtham032";
    $password = "gowtham@@@2003";
    $dbname = "gowtham032_photogram_login";
    
    // Create connection
    
    $connection = new mysqli($servername, $username, $password, $dbname);
    if($connection->connect_error){

        die("connection error".$connection->connect_error);
    
    }else{
        database::$conn = $connection;

    }
}
}

}



?>