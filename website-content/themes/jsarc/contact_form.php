<?php
if( isset($_POST['message']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['organisation']) ){
	$message = nl2br($_POST['message']);
	$name = $_POST['name']; // HINT: use preg_replace() to filter the data
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$organisation = $_POST['organisation'];
	$to = "max.dmitriev@6point6.co.uk";	
	$from = $email;
	$subject = 'Contact Form Message';
	$message = '<b>Name:</b> '.$name.' <br>
				<b>Email:</b> '.$email.' <br>
				<b>Telephone:</b> '.$phone.' <br>
				<b>Organisation:</b> '.$organisation.' <br>
				<b>Message:</b> '.$message;
				
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "The server failed to send the message. Please try again later.";
	}
}
?>

