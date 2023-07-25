<?php
    namespace Adminka\Migration ;
    class DBconnect
    {
         public function connect()
        {
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $db = 'userss';
            return mysqli_connect($host, $user, $pass, $db);
        }
    }