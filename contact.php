<?php

	## CONFIG ##

	# ENTER YOUR EMAIL ADDRESS BELOW TO RECEIVE MESSAGES VIA CONTACT FORM
	$recipient = "contact@example.com";

	# ENTER THE SUBJECT FOR EMAILS
	$subject = "Contact form submission";

	## FORM VALUES ##
	$sender = $recipient;

	# MAIL BODY
	$body .= "Name: ".$_REQUEST['name']." \n";
	$body .= "Email: ".$_REQUEST['email']." \n";
	$body .= "Message: ".$_REQUEST['message']." \n";

	## SEND MESSAGE ##

	mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

?>