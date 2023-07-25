<?php

    namespace Adminka\Controller;

    class DataUser
    {
        public $user_name,$email,$password;
        public function __construct()
        {
            if(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])){
                header("Location: ../View/registration.php") ;
            } else {
                $this->user_name = $_POST['username'];
                $this->email = $_POST['email'];
                $this->password = $_POST['password'];
            }
        }
    }