<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];


	$to      = 'work.deich@example.com';
	$subject = 'Обратная связь';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){
		$res['sendstatus'] = 'Готово!';

		//Edit your message here
		$res['message'] = 'Отправка сообщения прошла успешно!';
    }
	else{
		$res['message'] = 'Не удалось отправить сообщение, пожалуйста попробуйте позже.';
	}


	echo json_encode($res);
}

?>
