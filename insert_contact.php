<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){

// CHECK IF FIELDS ARE NOT EMPTY
    if(!empty(trim($_POST['name'])) && !empty(trim($_POST['email'])) && !empty($_POST['subject']) && !empty($_POST['message'])){

// Escape special characters.
        $name = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['name']));
        $email = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['email']));
        $subject = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['subject']));
        $message = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['message']));

//IF EMAIL IS VALID
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

// INSER USER INTO THE DATABASE
            $insert_contact = mysqli_query($db_connection, "INSERT INTO `contact` (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')");

            if($insert_contact === TRUE){
                $success_message = "Thanks! We have received your message. We shall contact you soonest";
            }
            else{
                $error_message = "Oops! something wrong.";
            }
        }
        else {
// IF EMAIL IS INVALID
            $error_message = "Invalid email address";
        }
    }
    else{
// IF FIELDS ARE EMPTY
        $error_message = "Please fill in all the required fields.";
    }
}
?>