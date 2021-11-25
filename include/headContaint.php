<link rel="stylesheet" href="../css/tailwind.css">
<link rel="stylesheet" href="../css/style.css">
<?php
	include_once '../config/bdd.php';
	date_default_timezone_set('UTC');
	$todayTime = time();
	$today = date("Y/m/d");
	$years = substr($today, 0, 4);
	$month = substr($today, 5, 2);
	$day = substr($today, 8, 2);
	$dayTime = mktime(0, 0, 0, $month, $day, $years);
?>