<?php


$is_invalid = false;

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM userInfo
                    WHERE email = '%s'",
                    $mysqli->real_escape_string($_POST["email"]));
    

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

   if($user) {
       if(password_verify($_POST['password'], $user["password_hash"])) {
            
            session_start();

            session_regenerate_id();

            $_SESSION['user_id'] = $user['id'];

            header("Location: main.php");
            exit;
       }
   }

   $is_invalid = true;
}



?>





<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="/CSS/stylesheet.css" type="text/css">
        <link rel="icon" type="image/x-icon" href="/Image/favicon.png">
    </head>

    <body class="login_page">

            <?php
                if ($is_invalid):
            ?>
            <p class="invalid">Login Invalid</p>
            <?php  endif;  ?>
        
        
        <form class="login_box" method="POST">
            <h1>Login</h1>

            <input type="email" name="email" id="email" placeholder="Email"
                    value="<?= htmlspecialchars($_POST["email"] ?? "")?>"><br>
            <input type="password" name="password" id="password" placeholder="Password"> <br>



            <button type="submit" class="loginPage-login">Login</button>

        </form>


    </body>
</html>