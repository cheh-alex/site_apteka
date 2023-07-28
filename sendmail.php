<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require'phpmailer/src/Exception.php';
require'phpmailer/src/PHPMailer.php';

$mail=new PHPMailer(true);
$mail->charSet='UTF-8'
$mail->setLanguage('ru','phpmailer/language/');
$mail->IsHTML(true);

//от кого письмо
$mail->setFrom('alien1982@hotmail.fr','Фрилансер по жизни');
//кому отправить
$mail->addAddress('zakaz.pk_venec@mail.ru');
//тема письма
$mail->Subject='Онлайн заявка'

//тело письма
$body = '<h1>Онлайн заявка</h1>';

if (trim(!empty($_POST['name']))) {
	$body.='<p><strong>Имя:</strong>'.$_POST['name'].'</p>';
}
if (trim(!empty($_POST['email']))) {
	$body.='<p><strong>E-mail:</strong>'.$_POST['email'].'</p>';
}
if (trim(!empty($_POST['message']))) {
	$body.='<p><strong>Сообщение:</strong>'.$_POST['message'].'</p>';
}

$mail->Body=$body;

//отправляем
if (!$mail->send()){
	$message='Ошибка'
} else {
	$message='Данные отправлены!';
}

$response = ['message'=>$message];

header('Content-type: application/json');
echo json_encode($response);
?> 