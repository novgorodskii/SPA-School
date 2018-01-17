<?php

$recepient = "novgorodskiji@gmail.com";
$siteName = "SPA School";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$second_name = trim($_POST["name"]);
$message = "Имя: $name "Фамилия: $second_name \nТелефон: $phone";

$pagetitle = "Заявка с сайта \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>