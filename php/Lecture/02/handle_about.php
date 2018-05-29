<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>About You Form Feedback</title>
</head>
<body>
<?php # Script 2.10 - handle_about.php (2nd version after Script 2.9)

// Check $_POST['name'] and strip any slashes.
if (!empty($_POST['name'])) {
	$name = stripslashes($_POST['name']);
} else {
	$name = NULL;
	echo '<p><font color="red">You forgot to enter your name!</font></p>';
}
	
// Check the interests.
if (isset($_POST['interests'])) {
	$interests = implode (', ', $_POST['interests']);
} else {
	$interests = NULL;
	echo '<p><font color="red">You forgot to enter your interests!</font></p>';
}

// If everything was filled out, print the message.
if ($name && $interests) {

	echo "Thank you, <b>$name</b>. You entered your interests as:<br />$interests";
		
} else { // One form element was not filled out properly.
	echo '<p><font color="red">Please go back and fill out the form again.</font></p>';
}
?>
</body>
</html>