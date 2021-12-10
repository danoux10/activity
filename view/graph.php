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
			$S=date('H:i');
			$E=null;
		}else{
			$duration = date("H:i",$end-$start);
		}
		echo $jourA.'<br>'.$S.'<br>'.$E.'<br>'.$duration.'<br>'.$activityChoose.'<br>'.$info.'<br>'.$dayTime;
		$req = $bdd ->prepare('insert into data_graph set jours=?, debut=?, fin=?,duration=?,card=?,info=?,ajout=?');
		$req -> execute([$jourA,$S,$E,$duration,$activityChoose,$info,$dayTime]);
	}

	//LINK selection view
	if(isset($view)){
		$firstDate = $_POST['dateStart'];
		$lastDate = $_POST['dateEnd'];
		$actv = $_POST['activityView'];
		$hours = $_POST['hoursStartV'];
		$duration = $_POST['durationV'];
		
		if(empty($firstDate)){
			$StartSelect = $today;
		}else{
			$StartSelect = $_POST['dateStart'];
		}
		if($actv == 0){
			$SelectView = $bdd->query("select * from data_graph where jours='$StartSelect'");
		}else{
			$actvSelect = $_POST['activityView'];
			$SelectView = $bdd->query("select * from data_graph where jours='$StartSelect' AND card ='$actvSelect'");
		}
		foreach ($SelectView as $dataTable){
			$id = $dataTable['idDataG'];
			$card = $dataTable['card'];
			echo $id.'/--/'.$card.'<br>';
		}
	}else{
		$SelectView = $bdd->query('select * from data_graph where jours= "'.$today.'"');
		$View = array();
		foreach ($SelectView as $dataTable){
			$view[] = $dataTable;
		}
		$_SESSION['graph']=$view;
		foreach ($_SESSION['graph'] as $value){
			echo $value['info'];
		}
	}

	if(isset($table)){

	}

	if(isset($save)){

	}

	if(isset($modify)){

	}