<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_form = 'PORTFOLIO';
    $email_subject = "Nova Poruka !!!";
    $email_body = "Ime: $name.\n".
        "Email: $visitor_email.\n".
        "Poruka: $message.\n";

    $to = "n.darko1993@gmail.com";
    $headers = "Od: $email_form \r\n";
    $headers .= "Replay-To: $visitor_email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);

    header("Lokacija: index.html");
?>