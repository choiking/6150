<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>Enter Your Comments</title>
</head>
<body>
<!-- Script 10.1 - comments.php -->

<form action="handle_comments.php" method="post">

	<fieldset><legend>Enter your comments in the form below:</legend>
	<p><b>Name:</b> <input type="text" name="name" size="20" maxlength="40" /></p>
	<p><b>Comments:</b> <textarea name="comments" rows="3" cols="40"></textarea></p>
	</fieldset>
	<div align="center"><input type="submit" name="submit" value="Submit" /></div>
	
	<input type="hidden" name="stamp" value="<?php echo md5(uniqid(rand(), true)); ?>" />

</form>
</body>
</html>