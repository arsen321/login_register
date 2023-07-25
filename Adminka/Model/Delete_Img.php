<?php

    namespace Adminka\Model;

   // require_once 'DBconnect.php';
    require_once '..\Controller\DataUser.php';
    use Adminka\Migration\DBconnect ;
    use Adminka\Controller\DataUser;
    class Delete_Img
    {
        function image_delete(){

            $mysqli = new DBconnect() ;
            $data_user = new DataUser() ;
            $email = $data_user->email ;

            $query = 'SELECT * FROM `register`  WHERE email = "'.$email.'" ' ;
            $result = mysqli_query($mysqli->connect(),$query) ;
            $row = mysqli_fetch_assoc($result) ;
            $image_delete = $row["pictures_name"] ;
            if($result){
                $images = glob("img/$image_delete");

                foreach($images as $image){
                    @unlink($image);
                }

                header('Location:user.php') ;
            }
        }
    }
