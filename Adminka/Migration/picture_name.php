<?php
    require 'DBconnect.php';
    use Adminka\Migration ;

    $mysqli = new DBconnect() ;

    $query = " ALTER TABLE `register` ADD picture_name VARCHAR(250) NOT NULL " ;

    $result = mysqli_query($mysqli->connect(),$query) ;
?>
