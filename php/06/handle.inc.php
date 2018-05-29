<?php # Script 6.4 - handle.inc.php

// Flag variable for site status:
$live = FALSE;

// Error log email address:
$email = 'me@address.com';

// Create the error handler.
function my_error_handler ($e_number, $e_message, $e_file, $e_line, $e_vars) {

	global $live, $email;

	// Build the error message.
	$message = "An error occurred in script '$e_file' on line $e_line: $e_message\n";
	
	// Append $e_vars to the $message.
	$message .= print_r ($e_vars, 1);

	if ($live) { // Don't show the error.
	
		error_log ($message, 1, $email); // Send email.
		echo '<div class="error">A system error occurred. We apologize for the inconvenience.</div><br />';
		
	} else { // Development (print the error).
		echo '<div class="error">' . $message . '</div><br />';
	}

} // End of my_error_handler() definition.

// Use my error handler.
set_error_handler ('my_error_handler');
?>