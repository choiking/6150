<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>Form Feedback</title>
</head>
<body>
<?php # Script 2.3 - handle_form.php (2nd version after Script 2.2)

// Create a shorthand for the form data.
// Use stripslashes() to combat Magic Quotes, if necessary.
$name = stripslashes($_REQUEST['name']);
$email = $_REQUEST['email'];
$comments = stripslashes($_REQUEST['comments']);
// Not used: $_REQUEST['age'], $_REQUEST['gender'], and $_REQUEST['submit'].

// Print the submitted information.
echo "<p>Thank you, <b>$name</b>, for the following comments:<br />
<tt>$comments</tt></p>
<p>We will reply to you at <i>$email</i>.</p>\n";

?>
</body>
</html>