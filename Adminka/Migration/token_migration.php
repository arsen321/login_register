<?php
    require 'DBconnect.php';
    use Adminka\Migration\DBconnect ;
    $mysqli = new DBconnect() ;

    $query = " ALTER TABLE `register` ADD token VARCHAR(250) NOT NULL " ;

    $result = mysqli_query($mysqli->connect(),$query) ;
?>
