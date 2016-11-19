<?php 

// Initiate cache files

$msgcache = dirname(__FILE__) . '/message.json';
$dayscache = dirname(__FILE__) . '/days.json';

// If file is more than 10 minutes old, fetch a new one

if (!file_exists($msgcache) || filemtime($msgcache) < ( time() - 6 )) {

	$startdate = "2010-11-30";
	$now = date('Y-m-d');
	$today = date('l, F jS, Y');
	
	// To format now, for example, use date('Y-m-d“);
	$diff = (strtotime( $now ) - strtotime($startdate)) / 86400;
	$diff = round($diff);

	$jsonmessage = "{\"message\":\"Today is $today, and Rob Ford has been mayor of Toronto for $diff days.\"}";
	$jsondays = "{\"days\":\"$diff\"}";
	
	// Write the message cachefile	
	$temp1 = fopen($msgcache, "w");
	fwrite($temp1, $jsonmessage);
	fclose($temp1);

	// Write the message cachefile	
	$temp2 = fopen($dayscache, "w");
	fwrite($temp2, $jsondays);
	fclose($temp2);
	
	$message = "Today is $today, and Rob Ford has been mayor of Toronto for $diff days.";
	$twmessage = "Today is $today, and @TOMayorFord has been mayor of Toronto for $diff days. #Day$diff";
	
	

} else {

	$message = file_get_contents($msgcache);
	$iscache = 1;
	
}


?><!doctype html>
<html>
<head>
	<title>Caching Test</title>
</head>
<body>

<?php echo $message; ?>
<?php if($iscache){ echo "(cached version)"; } ?>


</body>
</html>