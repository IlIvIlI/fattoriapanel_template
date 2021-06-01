<?php
  $name = $_POST['name'];
  $phone = $_POST['telephone'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = 'fattoria.panel@gmail.com';
  $email_subject = "Новое сообщение с сайта";
  $email_body = "Имя: ".$name."\n\n"."Телефон: ".$phone."\n\n"."Email: ".$email."\n\n"."Сообщение: ".$message."\n";

  $to = "fattoria.panel@gmail.com";

  $headers = "From: ".$email_from."\r\n";

  $headers .= "Ответное письмо прислать на почту: ".$email."\r\n";

  mail($to, $email_subject, $email_body, $headers);

  header("Location: index.html");
?>
