<?php

    namespace Adminka\Model ;
    session_start() ;

    require_once '..\Migration\DBconnect.php';
    use Adminka\Migration\DBconnect ;
    class Choose_File
    {
        public function choose_file(){
            if(isset($_POST['submit'])) {
                $imgs = [];
                foreach ($_FILES as $file) {
                    if ($file['error'] == 0) {
                        $type = $file['type'];
                        $arr = explode('/', $type);
                        $t = end($arr);
                        if ($t == 'jpg' || $t == 'png' || $t == 'jpeg' || $t == 'webGL') {
                            $x = mt_rand(10000000000000, 99999999999999999);
                            if (move_uploaded_file($file['tmp_name'], '../img/' . $x . $file['name'])) {
                                array_push($imgs, $x . $file['name']);
                            }
                        }
                    }
                }
            }
            $picture_name  = $imgs[0] ;

            $mysqli = new DBconnect() ;
            $_SESSION['user']['picture_name'] = $picture_name  ;

            $query = 'UPDATE `register` SET picture_name = "'.$picture_name.'" WHERE token = "'.$_SESSION['user']['token'].'"';
            $x = mysqli_query($mysqli->connect(),$query) ;

            header("Location: ../View/user_admin.php");

                $delete_img = new Delete_Img();
                $delete_img->image_delete();
        }

    }

    $choose_file = new Choose_File();
    $choose_file->choose_file();