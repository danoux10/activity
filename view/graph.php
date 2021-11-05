<?php
	include '../config/bdd.php';
	include_once '../model/graphique.php';
	//btn add
	@ $add = $_POST['add'];
	//btn modify
	@ $modify = $_POST['modif'];
	//btn view
	@ $view = $_POST['view'];
	@ $table = $_POST['table'];
	@ $save = $_POST['save'];
	@ $actualise = $_POST['refresh'];

	if (isset($actualise)){
		header("Refresh:0");
	}
	//ajouter
	if(isset($add)){
		$jourA = $_POST['dateAdd'];
		$S=$_POST['hoursStartA'];
		$E=$_POST['hoursEndA'];
		$debut = strtotime($_POST['hoursStartA']);
		$fin = strtotime($_POST['hoursEndA']);
		$activAdd = $_POST['activityAdd'];
		$info = htmlspecialchars($_POST['description']);
		if (!empty($_POST['duration'])){
			$duration = $_POST['duration'];
			echo $S.'<br>'.$E.'<br>'.$duration;
		}else{
			$duration = date("H:i",$fin-$debut);
			echo $S.'<br>'.$E.'<br>'.$duration;
		}
		$req = $bdd -> prepare("INSERT INTO graph set jours=?, debut = ?, fin = ?, difference = ?, card=?, info=?, ajoutday=?");
		$req -> execute([$jourA,$S,$E,$duration,$activAdd,$info,$dayTime,]);
		header("Refresh:0");
	}

	if(isset($view)){

	}

	if(isset($table)){

	}

	if(isset($save)){

	}

	if(isset($modify)){

	}