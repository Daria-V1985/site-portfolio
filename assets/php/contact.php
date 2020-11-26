<?php

   $name = $_POST['name'];
	$email = $_POST['email'];
   $message = $_POST['message'];

   $subject = "=?utf-8?B?".base64_encode("Сообщение с сайта darfolio.ru")."?=";
   $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;  charset=utf-8\r\n";
   
   $success = mail("darja.vol4kova@yandex.ru", $subject, $message, $headers);
   echo $success;

?>