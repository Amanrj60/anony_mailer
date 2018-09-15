<?php

    $to = $_REQUEST['to'];
    $from = $_REQUEST['email'];
    $headers = "From: $from";
    $subject = "";

    $fields = array();
    $fields{"message"}   = "";
    

    $body = "\n\n"; foreach($fields as $a => $b){$body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>