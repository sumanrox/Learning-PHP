<?php

echo date('d')." <br>"; // Day
echo date('m')." <br>"; // Month
echo date('Y')." <br>"; // Year
echo date('l')." <br>"; // Day of the Week

// Dating formats as you wish

echo date('Y/m/d')." <br>";
echo date('m-d-Y')." <br>";

// Time

echo date('h')." <br>"; // Hour
echo date('i')." <br>"; // Min
echo date('s')." <br>"; // Seconds
echo date('a')." <br>"; // AM or PM

// Custom Formating
date_default_timezone_set('Asia/Kolkata');
echo date('h:i:sa')." <br>";

/*

Unix timestamp is a long integer containing the 
number of seconds between the Unix Epoch (January 1 1970 00:00:00)
GMT) and the time specified.
*/

$timestamp=mktime(10,14,54,9,10,1981);
echo $timestamp." <br>";

echo date('m/d/Y h:i:sa',$timestamp)." <br>";

$timestamp2=strtotime('7:00pm March 22 2018');
$timestamp3=strtotime('tomorrow');
$timestamp4=strtotime('next Sunday');
$timestamp5=strtotime('+2 Months');

echo $timestamp2." <br>";

echo date('m/d/Y h:i:sa', $timestamp3)." <br>";
echo date('m/d/Y h:i:sa', $timestamp4)." <br>";
echo date('m/d/Y h:i:sa', $timestamp5)." <br>";

?>