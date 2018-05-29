<?php # Script 9.16 - loggedin.php (4th version after Scripts 9.2, 9.7 & 9.11)
# User is redirected here from login.php.

session_name ('YourVisitID');
session_start(); // Start the session.

// If no session value is present, redirect the user.
if (!isset($_SESSION['agent']) OR ($_SESSION['agent'] != md5($_SERVER['HTTP_USER_AGENT'])) ) {

	// Start defining the URL.
	$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
	// Check for a trailing slash.
	if ((substr($url, -1) == '/') OR (substr($url, -1) == '\\') ) {
		$url = substr ($url, 0, -1); // Chop off the slash.
	}
	$url .= '/index.php'; // Add the page.
	header("Location: $url");
	exit(); // Quit the script.
}

// Set the page title and include the HTML header.
$page_title = 'Logged In!';
include ('./includes/header.html');

// Print a customized message.
echo "<h1>Logged In!</h1>
<p>You are now logged in, {$_SESSION['first_name']}!</p>
<p><br /><br /></p>";

include ('./includes/footer.html');
?>