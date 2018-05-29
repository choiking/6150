<?php # Script 8.7 - register.php
// Send NOTHING to the Web browser prior to the header() line!

// Check if the form has been submitted.
if (isset($_POST['submitted'])) {

	require_once ('../mysql_connect.php'); // Connect to the db.
		
	$errors = array(); // Initialize error array.
	
	// Check for a first name.
	if (empty($_POST['first_name'])) {
		$errors[] = 'You forgot to enter your first name.';
	} else {
		$fn = escape_data($_POST['first_name']);
	}
	
	// Check for a last name.
	if (empty($_POST['last_name'])) {
		$errors[] = 'You forgot to enter your last name.';
	} else {
		$ln = escape_data($_POST['last_name']);
	}
	
	// Check for an email address.
	if (empty($_POST['email'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$e = escape_data($_POST['email']);
	}
	
	// Check for a password and match against the confirmed password.
	if (!empty($_POST['password1'])) {
		if ($_POST['password1'] != $_POST['password2']) {
			$errors[] = 'Your password did not match the confirmed password.';
		} else {
			$p = escape_data($_POST['password1']);
		}
	} else {
		$errors[] = 'You forgot to enter your password.';
	}
	
	if (empty($errors)) { // If everything's OK.
	
		// Register the user in the database.
		
		// Check for previous registration.
		$query = "SELECT user_id FROM users WHERE email='$e'";
		$result = mysql_query($query);
		if (mysql_num_rows($result) == 0) {

			// Make the query.
			$query = "INSERT INTO users (first_name, last_name, email, password, registration_date) VALUES ('$fn', '$ln', '$e', SHA('$p'), NOW() )";		
			$result = @mysql_query ($query); // Run the query.
			if ($result) { // If it ran OK.
			
				// Send an email, if desired.
				
				// Redirect the user to the thanks.php page.
				// Start defining the URL.
				$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
				
				// Check for a trailing slash.
				if ((substr($url, -1) == '/') OR (substr($url, -1) == '\\') ) {
					$url = substr ($url, 0, -1); // Chop off the slash.
				}
				
				// Add the page.
				$url .= '/thanks.php';
				
				header("Location: $url");
				exit();
				
			} else { // If it did not run OK.
				$errors[] = 'You could not be registered due to a system error. We apologize for any inconvenience.'; // Public message.
				$errors[] = mysql_error() . '<br /><br />Query: ' . $query; // Debugging message.
			}
				
		} else { // Email address is already taken.
			$errors[] = 'The email address has already been registered.';
		}
				
	} // End of if (empty($errors)) IF.

	mysql_close(); // Close the database connection.
		
} else { // Form has not been submitted.

	$errors = NULL;

} // End of the main Submit conditional.

// Begin the page now.
$page_title = 'Register';
include ('./includes/header.html');

if (!empty($errors)) { // Print any error messages.
	echo '<h1 id="mainhead">Error!</h1>
	<p class="error">The following error(s) occurred:<br />';
	foreach ($errors as $msg) { // Print each error.
		echo " - $msg<br />\n";
	}
	echo '</p><p>Please try again.</p>';
}

// Create the form.
?>
<h2>Register</h2>
<form action="register.php" method="post">
	<p>First Name: <input type="text" name="first_name" size="15" maxlength="15" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>" /></p>
	<p>Last Name: <input type="text" name="last_name" size="15" maxlength="30" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>" /></p>
	<p>Email Address: <input type="text" name="email" size="20" maxlength="40" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"  /> </p>
	<p>Password: <input type="password" name="password1" size="10" maxlength="20" /></p>
	<p>Confirm Password: <input type="password" name="password2" size="10" maxlength="20" /></p>
	<p><input type="submit" name="submit" value="Register" /></p>
	<input type="hidden" name="submitted" value="TRUE" />
</form>
<?php
include ('./includes/footer.html');
?>