<?php
include 'Calendar.php';
$calendar = new Calendar();
$calendar->add_event('Birthday', '2022-03-03', 1, 'green');
$calendar->add_event('Doctors', '2022-03-04', 1, 'red');
$calendar->add_event('Holiday', '2022-03-16', 7);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Event Calendar</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link href="calendar.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	   
		<div class="content home">
			<?=$calendar?>
		</div>
	</body>
</html>

