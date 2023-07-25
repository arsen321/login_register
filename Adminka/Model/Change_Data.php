<?php

    namespace Adminka\Model;
    require_once '..\Migration\DBconnect.php';
    require_once '..\Controller\DataUser.php';
    use Adminka\Migration\DBconnect ;
    use Adminka\Controller\DataUser ;
    session_start();
    class Change_Data
    {
        public function change(){
            $mysqli = new DBconnect() ;
            $data_user = new DataUser() ;
            $username = $data_user->user_name ;
            $email = $data_user->email ;
            $psw = $data_user->password ;

            if(isset($_POST['change'])) {
                $password = password_hash($psw, PASSWORD_BCRYPT);

                $query = "SELECT * FROM `register` WHERE email = '".$email."' " ;
                $result = mysqli_fetch_assoc(mysqli_query($mysqli->connect(),$query)) ;
                var_dump($result);
                if(!$result){

                    $querry = 'UPDATE `register` SET user_name = "'.$username.'", email = "'.$email.'", password = "'.$password.'"  WHERE token = "'.$_SESSION['user']['token'].'"';
                    $x = mysqli_query($mysqli->connect(),$querry) ;

                    header("Location: ../View/user_admin.php");
                    $_SESSION['user']['user_name'] = $username ;
                } else {
                    $_SESSION['color'] = 'darkred' ;
                    header("Location: ../View/user_admin.php");
                }


            }

        }
    }

    $change_data = new Change_Data() ;
    $change_data->change();