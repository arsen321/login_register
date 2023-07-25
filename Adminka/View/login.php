<?php
    session_start();
    session_destroy() ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="register.css" rel="stylesheet" >
    <script src="https://kit.fontawesome.com/52ef4c40ea.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
    <body>
            <div class="register regist " style = "text-align:center">
                <h4>Login</h4>
                <form method='POST' id='login-form' class='login-form' action="../Model/Login.php">
                    <div class="div1" style = "position:relative ;">
                        <input type="email" id="email" name="email" placeholder="Email">
                        <i class="fa-solid fa-envelope" style = "position:absolute ; right: 67px ; top:15px ;"></i>
                    </div>
                    <div class="div2" style = "position:relative ;">
                        <input type="password" id="pwd" name="password"  placeholder="Password">
                        <i class="fa-solid fa-lock" style = "position:absolute ; right: 67px ; top:15px ;"></i>
                    </div>
                    <div class="remember">
                        <label>
                            <input type="checkbox" class="inpp">Remember me
                        </label>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <input type="submit" name="submit2" class="btn" style = "margin-left:0px ;" value="Login">
                    <div class="reg">
                        <span class="sp_1">Don't have on account?</span><span class="sp_2"><a href="registration.php">Register</a></span>
                    </div>
                    <div class="error">
                    </div>
                </form>
            </div>
    </body>
</html>