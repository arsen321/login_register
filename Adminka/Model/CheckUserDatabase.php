<?php

    namespace Adminka\Model;
    require '..\Migration\DBconnect.php';
    use Adminka\Migration\DBconnect ;
    class CheckUserDatabase
    {
        function check_user($email, $password){
            $mysqli = new DBconnect() ;
           // $verify = password_verify($password , $hash) ;

            $query = "SELECT * FROM `register` WHERE email = '".$email."' OR password = '".$password."'" ;
            $result = mysqli_fetch_assoc(mysqli_query($mysqli->connect(),$query)) ;
            return $result;
        }
    }