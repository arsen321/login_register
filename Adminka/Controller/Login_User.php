<?php

namespace Adminka\Controller;

class Login_User
{
    public $email,$password;
    function __construct()
    {

        if(empty($_POST['email']) || empty($_POST['password'])){
            header("Location: ../View/login.php") ;
        } else {
            $this->email = $_POST['email'];
            $this->password = $_POST['password'];
        }

    }
}