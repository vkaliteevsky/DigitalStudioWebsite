<?php
	$inputEmail = $_POST['inputEmail'];
	$inputPhone = $_POST['inputPhone'];
	$inputName = $_POST['inputName'];
	$inputComment = $_POST['inputComment'];
	
	$textBody = "New Order!\nEmail: " . $inputEmail . "\n" . "Phone: " . $inputPhone . "\n" . "Name:" . 
				$inputName . "\n" . "Comment: " . $inputComment . "\n";
	
	echo $textBody;

	$to      = 'gik06@yandex.ru';
	$subject = 'New Order for Digital Studio';
	$message = $textBody;
	$headers = 'From: dig-studio' . "\r\n" .
		'Reply-To: dig-studio.ru' . "\r\n" .
		'Content-type: text/html; charset=\"utf-8\"' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers);
	
	$result = array("status" => "200");
    echo json_encode($result);
?>