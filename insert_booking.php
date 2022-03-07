<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['date']) && isset($_POST['services'])){

// CHECK IF FIELDS ARE NOT EMPTY
    if(!empty(trim($_POST['name'])) && !empty(trim($_POST['email'])) && !empty($_POST['date']) && !empty($_POST['services'])){

// Escape special characters.
        $name = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['name']));
        $email = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['email']));
        $date = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['date']));
        $services = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['services']));

//IF EMAIL IS VALID
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

// INSER USER INTO THE DATABASE
                $insert_booking = mysqli_query($db_connection, "INSERT INTO `booking` (name, email, date, services) VALUES ('$name', '$email', '$date', '$services')");

                if($insert_booking === TRUE){
                    $success_message = "Thanks! You have successfully made a booking.";
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
