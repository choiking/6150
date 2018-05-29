<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>Form Feedback</title>
</head>
<body>
<?php # Script 2.5 - handle_form.php (4th version after Scripts 2.2, 2.3, & 2.4)

// Validate the name and combat Magic Quotes, if necessary.
if (!empty($_REQUEST['name'])) {
	$name = stripslashes($_REQUEST['name']);
} else {
	$name = NULL;
	echo '<p><font color="red">You forgot to enter your name!</font></p>';
}

// Validate the email and combat Magic Quotes, if necessary.
if (!empty($_REQUEST['email'])) {
	$email = $_REQUEST['email'];
} else {
	$email = NULL;
	echo '<p><font color="red">You forgot to enter your email address!</font></p>';
}

// Validate the comments and combat Magic Quotes, if necessary.
if (!empty($_REQUEST['comments'])) {
	$comments = stripslashes($_REQUEST['comments']);
} else {
	$comments = NULL;
	echo '<p><font color="red">You forgot to enter your comments!</font></p>';
}

// Validate gender.
if (isset($_REQUEST['gender'])) {

	$gender = $_REQUEST['gender'];
	
	if ($gender == 'M') {
		$message = '<p><b>Good day, Sir!</b></p>';
	} elseif ($gender == 'F') {
		$message = '<p><b>Good day, Madam!</b></p>';
	} else { // Unacceptable value.
		$message = NULL;
		echo '<p><font color="red">Gender should be either "M" or "F"!</font></p>';
	}
	
} else { // $_REQUEST['gender'] is not set.
	$gender = NULL;
	echo '<p><font color="red">You forgot to select your gender!</font></p>';
}

// If everything is okay, print the message.
if ($name && $email && $gender && $comments) {

	echo "<p>Thank you, <b>$name</b>, for the following comments:<br />
	<tt>$comments</tt></p>
	<p>We will reply to you at <i>$email</i>.</p>\n";
	echo $message; // From the $gender conditional.
	
} else { // One form element was not filled out properly.
	echo '<p><font color="red">Please go back and fill out the form again.</font></p>';
}

?>
</body>
</html>