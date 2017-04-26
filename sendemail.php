						<?php
	if (isset($_GET["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = $_POST['Demo Contact Form']; 
		$to = 'mrshayesworks@gmail.com'; 
		$subject = ' ';
		
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
	
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
}
	}
?>
