<?php 
    $to = 'code.hasib@gmail.com';
    $sub = 'hey how are you';
    $msg = 'you got 6000$';
    $headers = 'from: abc@yoyo.com';
    mail($to, $sub, $msg, $headers);
?>