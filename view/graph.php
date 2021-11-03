<?php
	include '../config/bdd.php';
	include_once '../model/graphique.php';
//	date_default_timezone_set('Europe/Paris');
//	$todayTime = time();
//	$today = date("Y/m/d");
	//$day = substr();
	//btn add
	@ $add = $_POST['add'];
	//btn modify
	@ $modify = $_POST['modif'];
	//btn view
	@ $view = $_POST['view'];
	@ $table = $_POST['table'];
	@ $save = $_POST['save'];

	//ajouter
	if(isset($add)){
		$day = $_POST['dateAdd'];
		$activAdd = $_POST['activityAdd'];
		$info = htmlspecialchars($_POST['description']);
		$debut = $_POST['hoursStartA'];
		$fin = $_POST['hoursEndA'];
		$ajout = $bdd->prepare('insert into graph SET debut=?, fin=?, card=?, info=?, ajoutday=?, activeDate=?');
		$ajout ->execute([$debut,$fin,$activAdd,$info,$today,$day]);
	}

	if(isset($view)){

	}

	if(isset($table)){

	}

	if(isset($save)){

	}

	if(isset($modify)){

	}