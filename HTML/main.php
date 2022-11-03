<?php

session_start();


if(isset($_SESSION["user_id"])) {
    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM userInfo
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}



?>




<html>
    <head>
        <title>Main page</title>
        <link rel="stylesheet" href="/CSS/stylesheet.css" type="text/css">
        <link rel="icon" type="image/x-icon" href="/Image/favicon.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    </head>

    <body>
        
        <?php if(isset($user)): ?>

        <div class="main-page-container">

            <header id="main-page-header">
                <h3>Welcome, <span> <?= htmlspecialchars($user["Fname"]) ?> </span></h3>
                <button onclick="window.location.href='logout.php';"><a class="button"></a>Log Out</button>
            </header>
    
    
            <div class="main-page-body">

                <div class="calender-container">
                    <div class="calender">
                        <div class="calender-month">
                            <i class="fas fa-angle-left prev"></i>
                            <div class="date">
                               <h1></h1>
                               <p></p>
                            </div>
        
                            <i class="fas fa-angle-right next"></i>
                        </div>
        
                        <div class="calender-weekdays">
                            <div>Sun</div>
                            <div>Mon</div>
                            <div>Tue</div>
                            <div>Wed</div>
                            <div>Thu</div>
                            <div>Fri</div>
                            <div>Sat</div>
                        </div>
        
                        <div class="calender-days">
                            
                        </div>
                    </div>
                </div>

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

                <?php else: 
                    header("Location: homepage.html");
                ?>

                <?php endif;  ?>

                    
            </footer>

        </div>







        <script src="/JS/script.js"></script>

    </body>
</html>
