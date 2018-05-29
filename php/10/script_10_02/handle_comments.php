<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>Handle Comments</title>
</head>
<body>
<?php # Script 10.2 - handle_comments.php

require_once ('../mysql_connect.php'); // Connect to the db.
// The escape_data() function is defined in mysql_connect.php!
// Make sure that mysql_connect.php selects the 'test' database!
	
// Check for a name.
if (!empty($_POST['name'])) {
	$n = escape_data($_POST['name']);
} else {
	echo '<p><font color="red">You forgot to enter your name.</font></p>';
	$n = FALSE;
}

// Check for comments (assume at least 5 characters).
if (!empty($_POST['comments'])) {
	$c = escape_data($_POST['comments']);
} else {
	echo '<p><font color="red">You forgot to enter your comments.</font></p>';
	$c = FALSE;
}

// Check for the stamp.
if (strlen($_POST['stamp']) == 32 ) {
	$s = escape_data($_POST['stamp']);
} else {
	echo '<p><font color="red">This page has been accessed in error.</font></p>';
	$s = FALSE;
}

if ($n && $c && $s) { // If everything's OK.

	// Enter the record into the database.
	$query = "INSERT INTO comments (name, comment, stamp) VALUES ('$n', '$c', '$s')";		
	$result = @mysql_query ($query); // Run the query.
	
	if (mysql_affected_rows() == 1) { // A record was added.
		echo '<p>Thank you for your comments.</p>';
	} else { // Insert failed.
		echo '<p><font color="red">Your comments could not be added.</font></p>'; // Public message.
		echo mysql_error() . '<br /><br />Query: ' . $query; // Debugging message.
	}
	
} else { // Error occurred. 
	echo '<p><font color="red">Please go back and try again.</font></p>';
}
	
mysql_close(); // Close the database connection.

?>
</body>
</html>