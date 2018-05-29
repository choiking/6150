<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>Sorting Arrays</title>
</head>
<body>
<?php # Script 2.11 - sorting.php

// Create the array.
$movies = array (
10 => 'Casablanca',
9 => 'To Kill a Mockingbird',
2 => 'The English Patient',
8 => 'Sideways',
7 => 'Donnie Darko'
);

// Display the movies in their original order.
echo '<p>In their original order:<br /><pre>Rating	Title
';
foreach ($movies as $key => $value) {
	echo "$key\t$value\n";
}
echo '</pre></p>';

// Display the movies sorted by title.
echo '<p>Sorted by title:<br /><pre>Rating	Title
';
asort($movies);
foreach ($movies as $key => $value) {
	echo "$key\t$value\n";
}
echo '</pre></p>';

// Display the movies sorted by rating.
echo '<p>Sorted by rating:<br /><pre>Rating	Title
';
krsort($movies);
foreach ($movies as $key => $value) {
	echo "$key\t$value\n";
}
echo '</pre></p>';
?>
</body>
</html>