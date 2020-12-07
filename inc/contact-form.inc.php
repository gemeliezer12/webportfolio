<?php

if (isset($_POST["submit"])){
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $mailFrom = $_POST["mail"];
    $message = $_POST["message"];

    if(empty($name) || empty($subject) || empty($mailFrom) || empty($message)){
        header("Location: ../contact.php?error=emptyfields&name=$name&mail=$mailFrom&subject=$subject&message=$message");
        exit();
    }
    elseif(!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)){
        header("Location: ../contact.php?error=invalidmail&name=$name&subject=$subject&message=$message");
        exit();
    }
    else{
        $mailTo = "gemeliezerespiritu@gmail.com";
        $body = "";

        $body .= "From: ".$name. "\r\n";
        $body .= "Email: ".$mailFrom. "\r\n";
        $body .= "Message: ".$message. "\r\n";

        mail($mailTo, $subject, $body);
        header("Location: ../contact.php?message-sent=true");
    }

}

