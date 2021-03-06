<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>Form Feedback</title>
</head>
<body>
<?php # Script 2.4 - handle_form.php (3rd version after Scripts 2.2 & 2.3)

// Create a shorthand for the form data.
// Use stripslashes() to combat Magic Quotes, if necessary.
$name = stripslashes($_REQUEST['name']);
$email = $_REQUEST['email'];
$comments = stripslashes($_REQUEST['comments']);

// Create the $gender variable.
if (isset($_REQUEST['gender'])) {
	$gender = $_REQUEST['gender'];
} else {
	$gender = NULL;
}

// Print the submitted information.
echo "<p>Thank you, <b>$name</b>, for the following comments:<br />
<tt>$comments</tt></p>
<p>We will reply to you at <i>$email</i>.</p>\n";

// Print a message based upon the gender value.
if ($gender == 'M') {
	echo '<p><b>Good day, Sir!</b></p>';
} elseif ($gender == 'F') {
	echo '<p><b>Good day, Madam!</b></p>';
} else { // No gender selected.
	echo '<p><b>You forgot to enter your gender!</b></p>';
}

?>
</body>
</html>