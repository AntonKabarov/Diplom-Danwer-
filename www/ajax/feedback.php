<?php
   $name = htmlspecialchars($_POST['name']);
   $email = htmlspecialchars($_POST['email']);
   $subject = htmlspecialchars($_POST['subject']);
   $message = htmlspecialchars($_POST['message']);
   if ($name == '' || $email == '' || $subject == '' || $message == '') {
	   echo 'Заполните поля';
	   exit;
   }
   // Отправка
   $subject = "=?u;tf-8?B?".base64_encode($subject)."?=";
   $header = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
   if(mail("NastenaGreeny@mail.ru", $subject, $message, $header))
	   echo "Сообщение отправлено";
   else
	   echo "Сообщение не отправлено";
?>