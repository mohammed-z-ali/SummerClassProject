<?php

session_start();

?>


<!DOCTYPE html>
<html>
    <head>
        <title>About Us</title>
        <link rel="stylesheet" href="/CSS/stylesheet.css" type="text/css">
        <link rel="icon" type="image/x-icon" href="/Image/favicon.png">
    </head>

    <body>
        <div class="nav-container">

            <header class="nav-header">
                <button onclick="window.location.href='logout.php';"><a></a>Log Out</button>
            </header>


            <div class="privacy-aboutUS-container">
                <p>
                The webiste is known by Boost Up, made for educational purpose. This website gives students the ability to boost up their knowledge with a new way of learning by making their own study routine.
                It has some incredible features like calender and alarm, which will help them to success in life.
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
