<?php

	//CONFIGURE HEADERS
	require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	$mail->CharSet = 'UTF-8';
	$mail->Host = 'servidor2202.el.controladordns.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'venta@bmlsshowcenter.com';
	$mail->Password = '8lCbw=BI;yv(';
	$mail->Port = 465;

	//POST DATA
	$name = $_POST['name'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];


	//REPLY TO MAIL
	$mail->setFrom('hey@goldensub.com', 'Website | Contacto');
	$mail->addAddress('david0cabello0@gmail.com', 'Website | Contacto');

	//TITLE MAILING
	$mail->isHTML(true);
	$mail->Subject = 'Subject';

  $body = '
		<!DOCTYPE html>
		<html>
				<head>
						<title>Contacto</title>
				</head>
				<body>
						<h1>Contacto</h1>
						<hr>
						<p>Nombre:' .$name.'</p>
						<p>E-mail:' .$email.'</p>
						<p>Telefono:' .$tel.'</p>
				</body>
		</html>
  ';
	$mail->Body = $body;
	$mail->AltBody = 'â€” New application ðŸ“‹';

	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message has been sent';
	}
?>
