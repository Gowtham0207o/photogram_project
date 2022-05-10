<?php
include '../load.php';
class Database
{
public static $conn= null;
public static function get_connection(){
if (database::$conn==null){
    $servername = "mysql.selfmade.ninja";
    $username = "gowtham032";
    $password = "gowtham@@@2003";
    $dbname = "gowtham032_photogram_login";
    
    // Create connection
    $conn= new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){

        die("connection error".$conn->connect_error); //todo handle connecction with exception handling
    
    }else{
        database::$conn = $conn;
        return database::$conn;

    }
}else{
    return database::$conn;
}
}
}

?>