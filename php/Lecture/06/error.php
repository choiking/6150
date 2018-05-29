<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>OOPS!</title>
</head>
<body>
<?php # Script 6.3 - error.php
// Include the error handling file.
include ('handle.inc.php');

// Create some problems.
echo $variable;
$result = 200/0;
?>
</body>
</html>
