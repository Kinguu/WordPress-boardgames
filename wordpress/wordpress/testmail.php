<?php 
    ini_set( 'display_errors', 1 ); // Display the errors
    error_reporting( E_ALL ); // Enable error reporting
    $from = "send@email.com"; // From this email the message will appear to be sent
    $to = "receive@email.com"; // The message will be sent to this address
    $subject = "Mail Test"; 
    $message = "Sendmail is working";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers); //Send the email
    echo "The email was sent!";
?>
