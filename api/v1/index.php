<?php 
/*
	// set Toronto as the default timezone for these calculations
	date_default_timezone_set("America/Toronto");
	
	$startdate = strtotime("2010-12-01"); // day Rob Ford started his term
	$enddate = strtotime("2014-12-01"); // day Rob Ford ends his term
	$now = strtotime(date('Y-m-d')); // today
	
	$elapsed = number_format(($now - $startdate) / 86400); // subtract startdate from now, divide by seconds, format number
	$remaining = number_format(($enddate - $now) / 86400); // subtract now from enddate, divide by seconds, format number
	
*/
	header("Content-type: application/json"); // set response type as json application
	header("Access-Control-Allow-Origin: *"); // allow anyone to access it
	header("Cache-Control: max-age=600"); // cache the file for 10 minutes

?>
{"elapsed":"1,460","remaining":"0","notification":"Rob Ford is no longer the mayor"}