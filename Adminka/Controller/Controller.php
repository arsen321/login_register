<?php
    namespace Adminka\Controller ;

    //require_once 'DataUser.php';
    require_once '..\Model\CheckUserDatabase.php';
    require_once '..\Migration\InsertUser.php';
    require_once '..\Model\Session.php' ;

    use Adminka\Model\CheckUserDatabase;
    use Adminka\Migration\InsertUser ;
    use Adminka\Model\Session ;

    session_start() ;

    class  Controller
    {
        protected $count;

        public function signup()
        {
            $data_user = new DataUser() ;
            $user_name = $data_user->user_name ;
            $email = $data_user->email ;
            $password = $data_user->password ;

            $_SESSION['register_error'] = '' ;
            $_SESSION['username'] = $user_name ;

            $res = new CheckUserDatabase() ;
            $this->count = $res->check_user($email,$password);
            if ($this->count > 0) {
                $_SESSION['register_error'] = "This user already exists!" ;
                header("Location: ../View/registration.php");
            } else {
                $insert = new InsertUser();
                $insert->insert_user();
                $session = new Session();
                $session->session();
                header("Location: ../View/user_admin.php");
            }
        }
    }


    $controller = new Controller() ;
    $controller->signup();