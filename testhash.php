<?php
include "libs/load.php";
database::get_connection();
   $sql = " INSERT INTO `photogram_login` (`username`, `password`, `phone`, `email`, `blocked`, `active`)
   VALUES ('$user','$pass','$phone', '$email', '0', '1');";
   print(database::$conn->query($sql));
?>