<?php
if( isset($_POST['message']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['organisation']) ){
	$message = nl2br($_POST['message']);
	$name = $_POST['name']; // HINT: use preg_replace() to filter the data
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$organisation = $_POST['organisation'];
	$to = 'max.dmitriev@6point6.co.uk';	
	$from = $email;
	$subject = 'Contact Form Message';
	$content = '<b>Name:</b> '.$name.' <br> <b>Email:</b> '.
	$email.' <br> <b>Telephone:</b> '.
	$phone.' <br> <b>Organisation:</b> '.
	$organisation.' <br> <b>Message:</b> '.$message;
	
	$headers = 'From:' . $from . '\r\n' .
	'MIME-Version: 1.0' . '\r\n' .
	'Content-type: text/html; charset=UTF-8;' . '\r\n';
	
	if( mail($to, $subject, $content, $headers) ){
		echo 'success';
	} else {
		echo 'The server failed to send the message. Please try again later.';
	}
}
?>





