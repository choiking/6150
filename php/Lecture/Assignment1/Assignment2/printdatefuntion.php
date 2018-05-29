<!-- 
	 Assignment 2														
	 Submitter Name : Vishal Chawla										
	 Course			: CSEG 220 Enterprise Software Development          
-->
<!DOCTYPE html public "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Different Date Format Output</TITLE>
</HEAD>
<BODY>
<?php

echo "<h2>Here are few Examples that will print out the date and time in different format using date('format', [timestamp]) function of PHP</h2><br/>";


echo "<b>1) Example to print Current Day</b><br/>";
echo "USAGE: date(\"l\") <br/>";
echo "Output: " . date("l") . "<br/><br/>";

echo "<b>2) Example to print Current Date as full Timestamp in numeric form</b><br/>";
echo "USAGE: date('m d Y h:i:s A') <br/>";
echo "Output: " . date('m d Y h:i:s A') . "<br/><br/>";

echo "<b>3) Example to print Date something as September 18, 2005</b><br/>";
echo "USAGE: date('F d, Y') <br/>";
echo "Output: " . date('F d, Y') . "<br/><br/>";

echo "<b>4) Example to print difference to GMT Time in hours</b><br/>";
echo "USAGE: date(O) <br/>";
echo "Output: " . date(O) . "<br/><br/>";

echo "<b>5) Example to print Date as Something like September 18, 2005 09:20:46 PM </b><br/>";
echo "USAGE: date('F d, Y h:i:s A') <br/>";
echo "Output: " . date('F d, Y h:i:s A') . "<br/><br/>";

echo "<b>6) Example to print Date as Something like Sun Sep 18 21:22:53 Eastern Standard Time 2005 </b><br/>";
echo "USAGE: date('D M j G:i:s T Y') <br/>";
echo "Output: " . date('D M j G:i:s T Y') . "<br/><br/>";

echo "<b>7) Example to print the number of day of current month </b><br/>";
echo "USAGE: date('jS') Day of Month <br/>";
echo "Output: " . date('jS') . " Day of Month" . "<br/><br/>";

echo "<b>8) Example to print Time in Hour, minutes and second of nth day of current month</b><br/>";
echo "USAGE: Time date('H:i:s \o\f jS \d\a\y \o\f \m\o\n\t\h') <br/>";
echo "Output: Time " . date('H:i:s \o\f jS \d\a\y \o\f \m\o\n\t\h') . "<br/><br/>";

echo "<b>9) Example to print Current TimeZone of Machine</b><br/>";
echo "USAGE: date('T') <br/>";
echo "Output: " . date('T') . "<br/><br/>";

echo "<b>10) Example to print Seconds since January 1 1970</b><br/>";
echo "USAGE: date('U') <br/>";
echo "Output: " . date('U') . "<br/><br/>";

echo "<b>11) Example to print RFC 2822 formatted date</b><br/>";
echo "USAGE: date('r') <br/>";
echo "Output: " . date('r') . "<br/><br/>";

echo "<b>12) Example to print SWATCH Internet TIme</b><br/>";
echo "USAGE: date('B') <br/>";
echo "Output: " . date('B') . "<br/><br/>";

echo "<b>13) Example to format your date by supplying second argument to date function instead of current date</b><br/>";
echo "USAGE: date('m d Y h:i:s A', mktime(0, 0, 0, 9, 13, 2000)); <br/>";
echo "Output: " . date('m d Y h:i:s A', mktime(0, 0, 0, 9, 13, 2000)) . "<br/><br/>";

?>
</BODY>
</HTML>