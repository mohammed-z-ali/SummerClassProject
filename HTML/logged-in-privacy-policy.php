<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/Image/favicon.png">
    <link rel="stylesheet" href="/CSS/stylesheet.css">
    <title>Privacy Policy</title>
</head>
<body>

    <div class="nav-container">

        <header class="nav-header">
            <button onclick="window.location.href='logout.php';"><a></a>Log Out</button>
        </header>


            <div class="privacy-aboutUS-container">
                <p>
                    This is an educational purposes webiste. It has login and logout, and signup options for new users. It is not a secure website
                    and don't have extra security or doesn't provide any data protection guarantee. You have to bear the responsibility when signing up and using the webiste.    
                </p>
            </div>



        <footer>  
            <div class="footer-links">
                <div>
                    <a href="/HTML/logged-in-about-us.php">About Us</a>
                </div>
                <div>
                    <a href="/HTML/logged-in-privacy-policy.php">Privacy Policy</a>
                </div>
            </div>          
            <p id="copyright">&copy; 2022 &ndash; Milu</p>
        </footer>

    </div>
    
</body>
</html>