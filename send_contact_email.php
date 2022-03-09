<?php
require_once "Mail.php";

if($_POST) {
    $name = "";
    $email = "";
    $subject = "";
//    $concerned_department = "";
    $message = "";
    $email_body = "<div>";

    if(isset($_POST['name'])) {
        $visitor_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Visitor Name:</b></label>&nbsp;<span>".$name."</span>
                        </div>";
    }

    if(isset($_POST['email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Visitor Email:</b></label>&nbsp;<span>".$email."</span>
                        </div>";
    }

    if(isset($_POST['subject'])) {
        $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Subject:</b></label>&nbsp;<span>".$subject."</span>
                        </div>";
    }

//    if(isset($_POST['concerned_department'])) {
//        $concerned_department = filter_var($_POST['concerned_department'], FILTER_SANITIZE_STRING);
//        $email_body .= "<div>
//                           <label><b>Concerned Department:</b></label>&nbsp;<span>".$concerned_department."</span>
//                        </div>";
//    }

    if(isset($_POST['message'])) {
        $message = htmlspecialchars($_POST['message']);
        $email_body .= "<div>
                           <label><b>Visitor Message:</b></label>
                           <div>".$message."</div>
                        </div>";
    }

    $recipient = "zjerainy@gmail.com";

    $email_body .= "</div>";

    $headers  = 'MIME-Version: 1.0' . "\r\n"
        .'Content-type: text/html; charset=utf-8' . "\r\n"
        .'From: ' . $email . "\r\n";

    if(mail($recipient, $subject, $email_body, $headers)) {
        echo "<p>Thank you for contacting us, $name. You will get a reply within 24 hours.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }

} else {
    echo '<p>Something went wrong</p>';
}
$from = "your-gmail-username@gmail.com";
$to = 'recipients@example.com';

$host = "ssl://smtp.gmail.com";
$port = "465";
$username = 'your-gmail-username@gmail.com';
$password = 'your-gmail-password';

$subject = "test";
$body = "test";

$headers = array('From' => $from, 'To' => $to, 'Subject' => $subject);
$smtp = Mail::factory('smtp',
    array('host' => $host,
        'port' => $port,
        'auth' => true,
        'username' => $username,
        'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo($mail->getMessage());
} else {
    echo("Message successfully sent!\n");
}
?>