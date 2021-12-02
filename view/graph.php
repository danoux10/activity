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
		if(!empty($_POST['hoursStartA'])){
			$hoursEnter = $_POST['hoursStartA'];
			$minHours = date("H:i",strtotime('+1minutes',strtotime($hoursEnter)));
		}
		$S=$_POST['hoursStartA'];
		$E=$_POST['hoursEndA'];
		$start = strtotime($_POST['hoursStartA']);
		$end = strtotime($_POST['hoursEndA']);
		if (!empty($_POST['duration'])){
			$duration = $_POST['duration'];
			$S=null;
			$E=null;
		}else{
			$duration = date("H:i",$end-$start);
		}
		$req = $bdd -> prepare("INSERT INTO graph set jours=?, debut = ?, fin = ?, difference = ?, card=?, info=?, ajoutday=?");
		$req -> execute([$jourA,$S,$E,$duration,$activityChoose,$info,$dayTime,]);
	}

	if(isset($view)){
		$firstDate = $_POST['dateStart'];
		$lastDate = $_POST['dateEnd'];
		$actv = $_POST['activityView'];
		$hours = $_POST['hoursStartV'];
		$duration = $_POST['durationV'];
	}else{
		//new
		
		$SelectView = $bdd->query('select * from graph where jours= "'.$today.'"');
		$View = array();
		foreach ($SelectView as $dataTable){
			$view[] = $dataTable;
			$id = $dataTable['jours'];
			echo $id.'<br>';
		}
//		$_SESSION['graph']=$data;
//		foreach ($_SESSION['graph'] as $value){
//			echo $value['info'];
//		}
	}

	if(isset($table)){

	}

	if(isset($save)){

	}

	if(isset($modify)){

	}