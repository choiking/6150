<?php # Script 6.11 - change_password.php

// Set the page title and include the HTML header.
$page_title = 'Change Your Password';
include ('templates/header.inc');

if (isset($_POST['submit'])) { // Handle the form.

	require_once ('../mysql_connect.php'); // Connect to the db.
		
	// Create a function for escaping the data.
	function escape_data ($data) {
		global $dbc; // Need the connection.
		if (ini_get('magic_quotes_gpc')) {
			$data = stripslashes($data);
		}
		return mysql_real_escape_string($data, $dbc);
	} // End of function.

	$message = NULL; // Create an empty new variable.
	
	// Check for a username.
	if (empty($_POST['username'])) {
		$u = FALSE;
		$message .= '<p>You forgot to enter your username!</p>';
	} else {
		$u = escape_data($_POST['username']);
	}
	
	// Check for an existing password.
	if (empty($_POST['password'])) {
		$p = FALSE;
		$message .= '<p>You forgot to enter your existing password!</p>';
	} else {
		$p = escape_data($_POST['password']);
	}

	// Check for a password and match against the confirmed password.
	if (empty($_POST['password1'])) {
		$np = FALSE;
		$message .= '<p>You forgot to enter your new password!</p>';
	} else {
		if ($_POST['password1'] == $_POST['password2']) {
			$np = escape_data($_POST['password1']);
		} else {
			$np = FALSE;
			$message .= '<p>Your new password did not match the confirmed new password!</p>';
		}
	}
	
	if ($u && $p && $np) { // If everything's OK.

		$query = "SELECT user_id FROM users WHERE (username='$u' AND password=PASSWORD('$p') )";		
		$result = @mysql_query ($query);
		$num = mysql_num_rows ($result);
		if ($num == 1) {
			$row = mysql_fetch_array($result, MYSQL_NUM);
			
			// Make the query.
			$query = "UPDATE users SET password=PASSWORD('$np') WHERE user_id=$row[0]";		
			$result = @mysql_query ($query); // Run the query.
			if (mysql_affected_rows() == 1) { // If it ran OK.
			
				// Send an email, if desired.
				echo '<p><b>Your password has been changed.</b></p>';
				include ('templates/footer.inc'); // Include the HTML footer.
				exit(); // Quit the script.
				
			} else { // If it did not run OK.
				$message = '<p>Your password could not be changed due to a system error. We apologize for any inconvenience.</p><p>' . mysql_error() . '</p>'; 
			}		
		} else {
			$message = '<p>Your username and password do not match our records.</p>'; 
		}
		mysql_close(); // Close the database connection.

	} else {
		$message .= '<p>Please try again.</p>';		
	}

} // End of the main Submit conditional.

// Print the error message if there is one.
if (isset($message)) {
	echo '<font color="red">', $message, '</font>';
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<fieldset><legend>Enter your information in the form below:</legend>

<p><b>User Name:</b> <input type="text" name="username" size="10" maxlength="20" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" /></p>

<p><b>Current Password:</b> <input type="password" name="password" size="20" maxlength="20" /></p>

<p><b>New Password:</b> <input type="password" name="password1" size="20" maxlength="20" /></p>

<p><b>Confirm New Password:</b> <input type="password" name="password2" size="20" maxlength="20" /></p>
</fieldset>

<div align="center"><input type="submit" name="submit" value="Change My Password" /></div>

</form><!-- End of Form -->

<?php
include ('templates/footer.inc'); // Include the HTML footer.
?>