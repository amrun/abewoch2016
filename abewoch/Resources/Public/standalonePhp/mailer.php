<?php

// Only process POST reqeusts.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Get the form fields and remove whitespace.
	$firstName = strip_tags(trim($_POST["first_name"]));
	$lastName = strip_tags(trim($_POST["last_name"]));
	$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
	$phone = strip_tags(trim($_POST["phone"]));
	$address = strip_tags(trim($_POST["address"]));
	$city = strip_tags(trim($_POST["city"]));
	$zip = strip_tags(trim($_POST["zip"]));
	$comment = strip_tags(str_replace(array("\r","\n"),array(" "," "),$comment));


	/*
	// Check that data was sent to the mailer.
	if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		// Set a 400 (bad request) response code and exit.
		http_response_code(400);
		echo "Oops! There was a problem with your submission. Please complete the form and try again.";
		exit;
	}
	*/

	// Set the recipient email address.
	$recipient = "bberger@abewo.ch";

	// Set the email subject.
	$subject = "Kontaktformular Webseite: $firstName $lastName";

	// Build the email content.
	$email_content = "Name: $firstName, $lastName\n";
	$email_content .= "Adresse: $address, $zip $city\n";
	$email_content .= "Telefon: $phone\n";
	$email_content .= "Email: $email\n\n";
	$email_content .= "Nachricht:\n$comment\n";

	// Build the email headers.
	$email_headers = "From: $name <$email>";

	// Send the email.
	if (mail($recipient, $subject, $email_content, $email_headers)) {
		// Set a 200 (okay) response code.
		http_response_code(200);
		echo "Thank You! Your message has been sent.";
	} else {
		// Set a 500 (internal server error) response code.
		http_response_code(500);
		echo "Oops! Something went wrong and we couldn't send your message.";
	}

} else {
	// Not a POST request, set a 403 (forbidden) response code.
	http_response_code(403);
	echo "-";
}