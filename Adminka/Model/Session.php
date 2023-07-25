<?php
    namespace Adminka\Model;
    require_once '..\Migration\DBconnect.php';
    require_once '..\Controller\DataUser.php';
    use Adminka\Migration\DBconnect ;
    use Adminka\Controller\DataUser ;

    class Session
    {
        function session(){
            $mysqli = new DBconnect() ;
            $data_user = new DataUser() ;
            $email = $data_user->email ;
            $password = $data_user->password ;


            $query = "SELECT * FROM `register` WHERE email = '".$email."' OR password = '".$password."'" ;
            $result = mysqli_fetch_assoc(mysqli_query($mysqli->connect(),$query)) ;

            $_SESSION['user']=$result;
        }
    }