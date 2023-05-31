<?php
// your_php_script.php

$today = new DateTime();
$dates = array();

// Find the next occurrences of each weekday (Monday to Saturday) from the current day onwards
for ($i = 0; $i < 6; $i++) {
	$dayOfWeek = $today->format('w'); // Get the current day of the week (0-6, where 0 is Sunday)

	// Calculate the number of days to add based on the current day of the week
	$diff = (8 - $dayOfWeek + $i) % 7;

	// Add the difference to today's date
	$nextDate = clone $today;
	$nextDate->modify("+$diff days");

	// Format the date as 'Y-m-d' and add it to the dates array
	$dates[] = $nextDate->format('Y-m-d');
}

// Assign dates to variables for manual usage
$monday = $dates[0];
$tuesday = $dates[1];
$wednesday = $dates[2];
$thursday = $dates[3];
$friday = $dates[4];
$saturday = $dates[5];

// Display the dates
echo "Monday: $monday<br>";
echo "Tuesday: $tuesday<br>";
echo "Wednesday: $wednesday<br>";
echo "Thursday: $thursday<br>";
echo "Friday: $friday<br>";
echo "Saturday: $saturday<br>";
