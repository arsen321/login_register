<?php
    require 'DBconnect.php';
    use Adminka\Migration\DBconnect ;
    $mysqli = new DBconnect() ;

    $query = "CREATE TABLE IF NOT EXISTS `register` (
         `id`  int(200) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
        `user_name` varchar(50) NOT NULL ,
        `email` varchar(50) NOT NULL,
        `password` varchar(250) NOT NULL)";

    $result = mysqli_query($mysqli->connect(),$query) ;
?>