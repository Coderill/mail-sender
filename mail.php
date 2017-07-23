<?php

// collect the fields from form
$fname		= $_POST['fname'];
$lname		= $_POST['lname'];
$birth		= $_POST['birth'];
$street		= $_POST['streetaddress'];
$city		= $_POST['city'];
$zipcode	= $_POST['zipcode'];
$email		= $_POST['email'];
$phone		= $_POST['phone_number'];
$insurance	= $_POST['insurance'];

// set the settings
$to			= "example@gmail.com"; // change
$subject	= "From url"; // anything.com

// Additional headers
$headers[] 	= 'From: ' . strip_tags($email);
$headers[] 	= 'Reply-To: ' . $email;
$headers[]	= 'X-Mailer: PHP/' . phpversion();

// To send HTML mail, the Content-type header must be set
$headers[] 	= 'MIME-Version: 1.0';
$headers[] 	= 'Content-type: text/html; charset=iso-8859-1';

// change the message content bellow
$message	= "Name: " . $fname . " " . $lname . "\n";
$message	.= "Birth: " . $birth . "\n";
$message	.= "Street Address: " . $street . "\n";
$message	.= "City: " . $city . "\n";
$message 	.= "Zip Code: " . $zipcode . "\n";
$message 	.= "Email: " . $email . "\n";
$message 	.= "Phone Number: " . $phone . "\n";
$message 	.= "Insurance: " . $insurance;

if (mail($to, $subject, $message, implode("\r\n", $headers))) {
	echo "<h1>Sent Successfully! Thank You" . " " . $fname . "</h1>";
} else {
	echo "Something is worng";
}
?>
