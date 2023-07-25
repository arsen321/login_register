<?php

    namespace Adminka\Model;

    require_once '..\Controller\Login_User.php' ;
    require_once '..\Migration\DBconnect.php';
    use Adminka\Controller\Login_User;
    use Adminka\Migration\DBconnect;
    session_start();
    class Login
    {
        public function check(){
            $check = new Login_User() ;
            $mysqli= new DBconnect() ;

            $email = $check->email ;
            $password = $check->password;

            $query = "SELECT * FROM `register` WHERE email = '$email' " ;
            $check = mysqli_fetch_assoc(mysqli_query($mysqli->connect(),$query)) ;
            $verify = password_verify( $password , $check['password']) ;

            if(isset($_POST['submit2'])){
                if($verify){
                    $_SESSION['user']= $check;
                    header("Location: ../View/user_admin.php");
                } else {
                    header("Location: ../View/login.php");
                }
            }

        }

    }

    $login = new Login();
    $login->check() ;