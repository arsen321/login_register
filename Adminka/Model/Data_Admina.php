<?php

    namespace Adminka\Model;
    require '..\Migration\DBconnect.php';
    require '..\Controller\Login_User.php' ;
    use Adminka\Migration\DBconnect;
    use Adminka\Controller\Login_User ;

    class Data_Admina
    {
        function data_admina(){
            $mysqli = new DBconnect() ;
            $login_user = new Login_User();
            $email = $login_user->email ;
            $query = "SELECT * FROM `register` WHERE email = '".$email."' " ;
            $result = mysqli_fetch_assoc(mysqli_query($mysqli->connect(),$query)) ;
        }
    }