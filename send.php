<?php

        $to =  "rivasreyxaime@gmail.com"; // where you want to send the mail
        $from =  $_POST['sender']; // a valid address on your domain
        $subject =  $_POST['subject'];
        $message = $_POST['body'];
        $headers = "From: $from\r\nReply-to: ".$_POST['sender'];
        $sent = mail($to, $subject, $message, $headers);
header("Location: http://xrivas.xyz/index.html");
?>
