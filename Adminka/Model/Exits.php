<?php

    namespace Adminka\Model;
    session_start() ;
    class Exits
    {
        public function exits(){
            session_destroy() ;
            header("Location: ../View/login.php");
        }
    }

    $exit = new Exits() ;
    $exit->exits();

