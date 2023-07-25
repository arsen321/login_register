<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="register.css" rel="stylesheet" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/52ef4c40ea.js" crossorigin="anonymous"></script>
</head>
    <body>
        <div class="register regist" style = "text-align:center ; ">
            <h4>Registration</h4>
            <form method='POST' id='login-form' class='login-form' action="../Controller/Controller.php">
                <div class="div3"  style = "position:relative ;">
                    <input type="text" id="fname" name="username" placeholder="Username" required>
                    <i class="fa-solid fa-user" style = "position:absolute ; right: 67px ; top:15px ;"></i>
                </div>
                <div class="div1" style = "position:relative ;">
                    <input type="email" id="email" name="email" placeholder="Email" class='inp_email' required>
                    <i class="fa-solid fa-envelope" style = "position:absolute ; right: 67px ; top:15px ;"></i>
                    <p class='p_er'>
                        <?php
                            session_start();
                            echo isset($_SESSION['register_error'])?  $_SESSION['register_error']: "" ;
                        ?>
                    </p>
                </div>
                <div class="div2" style = "position:relative ;">
                    <input type="password" id="pwd" name="password"  placeholder="Password" required>
                    <i class="fa-solid fa-lock" style = "position:absolute ; right: 67px ; top:15px ;"></i>
                </div>
                <div class="remember rem">
                    <label>
                        <input type="checkbox" class="inpp">I agree to the
                    </label>
                    <a href="#" class="a_1">terms & conditions</a>
                </div>
                <button type="submit" class="btn" name="submit" style = "margin-left:0px ;">Register</button>
                <div class="reg">
                    <span class="sp_1">Don't have on account?</span><span class="sp_2"><a href="login.php">Login</a></span>
                </div>
            </form>
        </div>
    </body>
</html>