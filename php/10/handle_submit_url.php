<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>Submit a URL</title>
</head>
<body>
<?php # Script 10.8 - handle_submit_url.php
# 2nd version after Script 10.7

// Initialize the variables.
$message = '<font color="red">The following errors occurred:<br />';
$problem = FALSE;

// Check the name.
if (!eregi ('^[[:alpha:]\.\' \-]{4,}$', stripslashes(trim($_POST['name'])))) {
	$problem = TRUE;
	$message .= '<p>Please enter a valid name.</p>';
}

// Check the email address.
if (!eregi ('^[[:alnum:]][a-z0-9_\.\-]*@[a-z0-9\.\-]+\.[a-z]{2,4}$', stripslashes(trim($_POST['email'])))) {
	$problem = TRUE;
	$message .= '<p>Please enter a valid email address.</p>';
} else {
	$email = eregi_replace ('^[[:alnum:]][a-z0-9_\.\-]*@[a-z0-9\.\-]+\.[a-z]{2,4}$', '<a href="mailto:\\0">Email</a>', stripslashes(trim($_POST['email'])));
}

// Check the URL.
if (eregi ('^((http|https|ftp)://)([[:alnum:]\-\.])+(\.)([[:alnum:]]){2,4}([[:alnum:]/+=%&_\.~?\-]*)$', stripslashes(trim($_POST['url'])))) {
	$url = eregi_replace ('^((http|https|ftp)://)([[:alnum:]\-\.])+(\.)([[:alnum:]]){2,4}([[:alnum:]/+=%&_\.~?\-]*)$', '<a href="\\0">\\0</a>', stripslashes(trim($_POST['url'])));
} elseif (eregi ('^([[:alnum:]\-\.])+(\.)([[:alnum:]]){2,4}([[:alnum:]/+=%&_\.~?\-]*)$', stripslashes(trim($_POST['url'])))) {
	$url = eregi_replace ('^([[:alnum:]\-\.])+(\.)([[:alnum:]]){2,4}([[:alnum:]/+=%&_\.~?\-]*)$', '<a href="http://\\0">\\0</a>', stripslashes(trim($_POST['url'])));
} else {
	$problem = TRUE;
	$message .= '<p>Please enter a valid URL.</p>';
}

// Check the URL category.
if (!isset($_POST['url_category']) OR !is_numeric($_POST['url_category'])) {
	$message .= '<p>Please select a valid URL category.</p>';
	$problem = TRUE;
}

if (!$problem) { // Nothing went wrong.
	// Do whatever with the submitted information.
	echo "<p>Thank you for the URL submission. We have received the following information:</p>\n{$_POST['name']}<br />\n$email<br />\n$url";
} else { // At least one test failed.
	echo $message;
	echo '</font><p>Please go back and try again.</p>';
}
?>
</body>
</html>