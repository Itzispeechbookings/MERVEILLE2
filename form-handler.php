<?php

	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$email_from = 'itzispeechbookings@gmail.com';

	$email_subject = 'New form submission';

	$email_body ="User Name: $name.\n".
				="User email: $visitor_email.\n".
				="Subject: $subject.\n".
				="User Message: $message.\n";

	$to = () 

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-TO; $visitor_email \r\";


	mail($to, $email_subject, $email_body $headers);

	header("location: contact.html");
?>