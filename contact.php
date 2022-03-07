<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
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
                    <a href="about.php">About</a>
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
<div class="header_contact">
    <div id="column_header">
        <div class="form-container">
            <form name="frmContact" id="frmContact" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding-top: 20px;">Name</label> <span
                        id="userName-info" class="info"></span><br /> <input
                        type="text" class="input-field" name="userName"
                        id="userName" />
            </div>
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                                           class="info"></span><br /> <input type="text"
                                                                             class="input-field" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
                <label>Subject</label> <span id="subject-info"
                                             class="info"></span><br /> <input type="text"
                                                                               class="input-field" name="subject" id="subject" />
            </div>
            <div class="input-row">
                <label>Message</label> <span id="userMessage-info"
                                             class="info"></span><br />
                <textarea name="content" id="content"
                          class="input-field" cols="60" rows="6"></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                       value="Send" />

                <div id="statusMessage">
                    <?php
                    if (! empty($message)) {
                        ?>
                        <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                    }
                    ?>
                </div>
            </div>
            </form>
        </div>
    </div>
    <div id="column_header">
<!--        <a target="_blank" class="social-icon" href="https://facebook.com"><i class="fab fa-facebook"></i></a>-->
<!--        <a target="_blank" class="social-icon" href="https://instagram.com"><i class="fab fa-instagram"></i></a>-->
<!--        <a target="_blank" class="social-icon" href="https://twitter.com"><i class="fab fa-twitter"></i></a><br>-->
        <span id="contact_image">
            <img src="images/contacts.jpg" alt="food haven contact us" height="400px" width="600px">
        </span>
        <h3 id="contact">Contact Information</h3>
        <p>Telephone: +254 727 444 777<br>
<!--            Mobeil: +971 52 612 8949<br>-->
            Email: shop@foodhaven.co.ke</p>
    </div>
</div>
<div class="footer">
    <div id="column_footer">
        <div id="column">
            <h3 style="padding-top: 10px">Useful Links</h3>
            <p>
                <a href="index.php">Home</a><br>
                <a href="about.php">About</a><br>
                <a href="contact.php">Contact Us</a>
            </p>
        </div>
        <div id="column">
            <h3 style="padding-top: 10px">About Us</h3>
            <p>
                We are a premier dining experience with various popup locations around Nairobi.<br> We provide event catering from office parties, family functions, art functions to outdoor concerts.<br>Our friendly staff always provide the best service at affordable rates.
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
    <div class="copyright">
        <p>© Copyright 2022 Food Haven | Privacy Policy | Terms and Conditions</p>
    </div>
</div>

<script type="text/javascript">
    function validateContactForm() {
        var valid = true;

        $(".info").html("");
        $(".input-field").css('border', '#e0dfdf 1px solid');
        var userName = $("#userName").val();
        var userEmail = $("#userEmail").val();
        var subject = $("#subject").val();
        var content = $("#content").val();

        if (userName == "") {
            $("#userName-info").html("Required.");
            $("#userName").css('border', '#e66262 1px solid');
            valid = false;
        }
        if (userEmail == "") {
            $("#userEmail-info").html("Required.");
            $("#userEmail").css('border', '#e66262 1px solid');
            valid = false;
        }
        if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
        {
            $("#userEmail-info").html("Invalid Email Address.");
            $("#userEmail").css('border', '#e66262 1px solid');
            valid = false;
        }

        if (subject == "") {
            $("#subject-info").html("Required.");
            $("#subject").css('border', '#e66262 1px solid');
            valid = false;
        }
        if (content == "") {
            $("#userMessage-info").html("Required.");
            $("#content").css('border', '#e66262 1px solid');
            valid = false;
        }
        return valid;
    }
</script>
<?php
if(!empty($_POST["send"])) {
    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $subject = $_POST["subject"];
    $content = $_POST["content"];

    $toEmail = "zjerainy@gmail.com";
    $mailHeaders = "From: " . $name . "<". $email .">\r\n";
    if(mail($toEmail, $subject, $content, $mailHeaders)) {
        $message = "Your contact information is received successfully.";
        $type = "success";
    }
}
//require_once "contact-view.php";
?>
</body>
</html>
