<?php
$to      = 'f34ee@localhost';
$subject = 'Thank you for shopping with us!';
$message = 'hello from php mail';
$headers = 'From: f34ee@localhost' . "\r\n" .
    'Reply-To: f34ee@localhost' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers,'-ff32ee@localhost');
?> 

