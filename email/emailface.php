<?php
session_start();
$useremail = $_POST['email'];
$usersubject = "Благодарочка:)";
$usermes = "Спасибо за ваше обращение! \nМы обязательно рассмотрим вашу проблему и  ответим вам.";

$sing = "official.dpcoinbot@gmail.com";
$subject = "К вам появились вопросики.";
$message = $_POST['text'];
mail($useremail, $subject, $usermes);
mail($sing, $subject, $message);
header("Location: ../face/face.php");