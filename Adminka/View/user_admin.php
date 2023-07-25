<?php
    session_start() ;
    if (!isset($_SESSION['user'])){
        header("Location: ../View/login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['user']['user_name'] ; ?></title>
    <link href="davit.css" rel="stylesheet" >
    <script src="https://kit.fontawesome.com/52ef4c40ea.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="dannye">
        <div class="picture">
            <img src='../img/<?php echo empty($_SESSION['user']['picture_name'])? 'default.jpg' : $_SESSION['user']['picture_name'] ;?>' alt="users_picture" style="width:200px ; height:200px;">
            <form method='POST' action="../Model/Choose_File.php" enctype='multipart/form-data'>
                <input type="file" id="myfile" name="myfile" value="Select a file"><br> 
	            <input name = 'submit'  type = 'submit'>
            </form>
        </div>
        <div class="tvyalner">
            <form method='POST' action="..\Model\Change_Data.php">
                <label for="username">First name:</label>
                <input type="text" id="fname" name="username" value="<?php echo $_SESSION['user']['user_name'] ?>" required><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" style="border-color:<?php echo isset($_SESSION['color'])? $_SESSION['color']:'black' ; ?>" required><br><br>
                <label for="pwd">Password:</label>
                <input type="password" id="pwd" name="password" required>
                <input type="submit" name="change" value="Change" class="change">
            </form>
        </div>
    </div>
    <div class="exit"> 
            <button type="button" name="exit" ><a href="..\Model\Exits.php">Exit</a></button>
    </div>
</body>
</html>