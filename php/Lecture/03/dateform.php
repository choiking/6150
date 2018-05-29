<?php # Script 3.12 - dateform.php (2nd version after Script 3.7)
$page_title = 'Calendar Form';
include ('./includes/header.html');

// This function makes three pull-down menus for the months, days, and years.
function make_calendar_pulldowns($m = NULL, $d = NULL, $y = NULL) {

	// Make the months array.
	$months = array (1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
	
	// Make the months pull-down menu.
	echo '<select name="month">';
	foreach ($months as $key => $value) {
		echo "<option value=\"$key\"";
		if ($key == $m) { // Preselect.
			echo ' selected="selected"';
		}
		echo ">$value</option>\n";
	}
	echo '</select>';
	
	// Make the days pull-down menu.
	echo '<select name="day">';
	for ($day = 1; $day <= 31; $day++) {
		echo "<option value=\"$day\"";
		if ($day == $d) { // Preselect.
			echo ' selected="selected"';
		}
		echo ">$day</option>\n";
	}
	echo '</select>';
	
	// Make the years pull-down menu.
	echo '<select name="year">';
	for ($year = 2005; $year <= 2015; $year++) {
		echo "<option value=\"$year\"";
		if ($year == $y) { // Preselect.
			echo ' selected="selected"';
		}
		echo ">$year</option>\n";
	}
	echo '</select>';

} // End of the function definition.

// Create the form tags.
echo '<h1 id="mainhead">Select a Date:</h1>
<p><br /></p><form action="dateform.php" method="post">';

// Get today's information and call the function.
$dates = getdate();
make_calendar_pulldowns ($dates['mon'], $dates['mday'], $dates['year']);

echo '</form><p><br /></p>'; // End of form.

// Print the current day and time.
echo '<p>Today is ' . date ('l') . '. The current time is ' . date ('g:i a') . '.</p>';

include ('./includes/footer.html');
?>