<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>Predefined Variables</title>
</head>
<body>
<?php # Script 1.6 - predefined.php

// Create a shorthand version of the variable names.
$file = $_SERVER['PHP_SELF'];
$user = $_SERVER['HTTP_USER_AGENT'];
$address = $_SERVER['REMOTE_ADDR'];

// Print the name of this script.
echo "<p>You are running the file <b>$file</b>.</p>\n";

// Print the user's information.
echo "<p>You are viewing this page using:<br /><b>$user</b><br />from the IP address:<br /><b>$address</b></p>\n";

?>
</body>
</html>