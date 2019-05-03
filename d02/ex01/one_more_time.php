#!/usr/bin/php
<?PHP
	date_default_timezone_set('Europe/Paris');
	if ($argc != 2) {
		exit (1);
	}
	$months = array(
		1 => "janvier",
		2 => "février",
		3 => "mars",
		4 => "avril",
		5 => "mai",
		6 => "juin",
		7 => "juillet",
		8 => "août",
		9 => "septembre",
		10 => "octobre",
		11 => "novembre",
		12 => "décembre");
	$weeks = array(
		1 => "lundi",
		2 => "mardi",
		3 => "mercredi",
		4 => "jeudi",
		5 => "vendredi",
		6 => "samedi",
		7 => "dimanche");
	if (preg_match("/^([A-Za-z]+) (0\d|\d\d?) ([A-Za-z][a-z]+) (\d\d\d\d) (\d\d):(\d\d):(\d\d)$/m", $argv[1], $date) === false) {
		echo "Wrong Format\n";
		exit();
	}
	$weekday = array_search(lcfirst($date[1]), $weeks);
	$day = $date[2];
	$month = array_search(lcfirst($date[3]), $months);
	$year = $date[4];
	$hour = $date[5];
	$minute = $date[6];
	$second = $date[7];
	if ($weekday == FALSE || $month == FALSE) {
		echo "Wrong Format\n";
		exit();
	}
	echo mktime($hour, $minute, $second, $month, $day, $year)."\n";
?>