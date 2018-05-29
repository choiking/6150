<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>Form Feedback</title>
</head>
<body>
<?php # Script 2.6 - handle_form.php (rewrite of Script 2.3)

// Create a shorthand for the form data.
// Use stripslashes() to combat Magic Quotes, if necessary.
$name = stripslashes($_POST['name']);
$comments = stripslashes($_POST['comments']);
// Not used: $_POST['age'], $_POST['gender'], and $_POST['submit'].

// Print the submitted information.
echo "<p>Thank you, <b>$name</b>, for the following comments:<br />
<tt>$comments</tt></p>
<p>We will reply to you at <i>{$_POST['email']}</i>.</p>\n";

?>
</body>
</html>