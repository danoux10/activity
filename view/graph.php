<?php
	//btn add
	@ $add = $_POST['add'];
	//btn modify
	@ $modify = $_POST['modif'];
	//btn view
	@ $view = $_POST['view'];
	@ $table = $_POST['table'];
	@ $save = $_POST['save'];
	@ $actualise = $_POST['refresh'];
	
	//ajouter
	if(isset($add)){
		$jourA = $_POST['dateAdd'];
		$activityChoose = $_POST['activityAdd'];
		$info = htmlspecialchars($_POST['description']);
		$S=$_POST['hoursStartA'];
		$E=$_POST['hoursEndA'];
		$start = strtotime($_POST['hoursStartA']);
		$end = strtotime($_POST['hoursEndA']);
		if (!empty($_POST['duration'])){
			$duration = $_POST['duration'];
		}else{
			$duration = date("H:i",$end-$start);
		}
		$req = $bdd -> prepare("INSERT INTO graph set jours=?, debut = ?, fin = ?, difference = ?, card=?, info=?, ajoutday=?");
		$req -> execute([$jourA,$S,$E,$duration,$activityChoose,$info,$dayTime,]);
	}

	if(isset($view)){

	}

	if(isset($table)){

	}

	if(isset($save)){

	}

	if(isset($modify)){

	}