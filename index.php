<!doctype html>
<html lang="en" id="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food truck</title>
    <link rel="stylesheet" href="style.css" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
</head>
<body>

<!--Creating Nav Bar-->
    <div class="navbar">
<!--        <nav class="nav-menu">-->
            <div class="wrapper">
            <nav>
                <div class="icon">
                <img src="images/icon.png" alt="icon"><br>
                FOODIES HAVEN
                </div>
                <ul class="nav-link">
                 <li>
                    <a href="index.php">Home</a>
                 </li>
                 <li>
                    <a href="#">About</a>
                 </li>
                 <li>
                    <a href="#">Contact Us</a>
                 </li>
<!--                 <li>-->
<!--                    <a href="#">Services</a>-->
<!--                 </li>-->
                 <li>
                    <a class="nav-btn-container" href="userlogin.php">Log in</a>
                 </li>
                </ul>
            </div>
        </nav>
    </div>

<!--Header Section-->
    <div class="header">

        <h1 id="hungry">Hungry?</h1>
        <h1 id="discover">Discover Foodies Haven Popup Food Truck Experience</h1>
        <p id="best">The best bite in town on wheels</p>
    </div>
<!--    <div class="button1">-->
    <button id="GetStarted" type="submit" name="Get Started"><a href="signup.php"><h1>Get Started</h1></a></button>
<!--    </div>-->
    <div class="ellipse">
        <div class="ellipse1">
            <img id="burger" src="images/burger.png" alt="burger image">
        </div>
        <div class="ellipse2">
            <img id="foodtruck" src="images/foodtruck.png" alt="food truck image">
         </div>
    </div>
    <div class="footer">
       <div id="column_footer">
            <div id="column">
            <h3 style="padding-top: 10px">Useful Links</h3>
            <p>
                <a href="index.php">Home</a><br>
                <a href="#">About</a><br>
                <a href="#">Contact Us</a>
            </p>
            </div>
            <div id="column">
        <h3 style="padding-top: 10px">Connect With Us</h3>
        <p>
            +254 727 444 777<br>
            <a target="_blank" id="email" href="mailto:shop@gfoodhaven.co.ke">shop@foodhaven.co.ke</a><br>
             Nairobi, Kenya
        </p>
            <a target="_blank" class="social-icon" href="https://facebook.com"><i class="fab fa-facebook"></i></a>
            <a target="_blank" class="social-icon" href="https://instagram.com"><i class="fab fa-instagram"></i></a>
            <a target="_blank" class="social-icon" href="https://twitter.com"><i class="fab fa-twitter"></i></a>
             </div>
        </div>
        <p id="copyright">© Copyright 2022 Food Haven | Privacy Policy | Terms and Conditions</p>
    </div>
<!--</div>-->
</body>
</html>