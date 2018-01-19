<?php

$post = $_POST;

$to = "macpirog@gmail.com";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";

if ($post) {
    $subject = 'Заголовок письма';
    $message = $post['leave-number'];
    mail($to, $subject, $message, $headers);
};