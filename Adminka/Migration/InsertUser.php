<?php
    namespace Adminka\Migration;

    require '..\Controller\DataUser.php';
    require_once 'DBconnect.php';

    use Adminka\Controller\DataUser;
    use Adminka\Migration\DBconnect ;


    class InsertUser
    {
       public function insert_user(){
           $data_user = new DataUser ;
           $user_name = $data_user->user_name ;
           $email = $data_user->email ;
           $psw = $data_user->password ;
           $password = password_hash($psw, PASSWORD_BCRYPT);
           $token = md5(rand(0, PHP_INT_MAX)) ;

           $mysqli = new DBconnect() ;

           $query = "INSERT INTO `register` (user_name, email , password , token)
                        VALUES ('".$user_name."', '".$email."', '".$password."' , '".$token."') " ;
           $insert = mysqli_query($mysqli->connect(),$query) ;
       }
    }