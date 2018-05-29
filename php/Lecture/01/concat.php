<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>Concatenation</title>
</head>
<body>
<?php # Script 1.8 - concat.php

// Create the variables.
$first_name = 'Melissa';
$last_name = 'Bank';
$author = $first_name . ' ' . $last_name;

$book = 'The Girls\' Guide to Hunting and Fishing';

//Print the values.
echo "The book <i>$book</i> was written by $author.";

?>
</body>
</html>