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
	
	$_SESSION['dayStart']=date('Y-m-d');
	unset($_SESSION['dayEnd']);
	unset($_SESSION['duration']);
	unset($_SESSION['hours']);

	//ajouter
	if(isset($add)){
		$jourA =$_POST['dateAdd'];
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
			$dura = date("Hi",strtotime($_POST['duration']));
			$S=date('H:i');
			$E=null;
		}else{
			$duration = date("H:i",$end-$start);
			$dura = date("Hi",$end-$start);
		}
		echo $jourA.'<br>'.$S.'<br>'.$E.'<br>'.$duration.'<br>'.$activityChoose.'<br>'.$info.'<br>'.$dayTime;
		$req = $bdd ->prepare('insert into data_graph set jours=?, debut=?,fin=?,duration=?,durationNum=?,card=?,info=?,ajout=?');
		$req -> execute([$jourA,$S,$E,$duration,$dura,$activityChoose,$info,$dayTime]);
	}

	//LINK selection view
	if(isset($view)) {
		$firstDate = $_POST['dateStart'];
		$lastDate = $_POST['dateEnd'];
		$actv = $_POST['activityView'];
		$hours = $_POST['hoursStartV'];
		$duration = $_POST['durationV'];
		
		//ANCHOR error mesage hours/duration
		if (!empty($hours) && !empty($duration)) {
			echo 'error hours and duration ne peuvent pas être entré en même temps';
		}
		
		//ANCHOR selection start && empty end
		if (!empty($firstDate) && empty($lastDate)) {
			$lastDate = $today;
			$_SESSION['dayStart'] = $firstDate;
			$_SESSION['dayEnd']= $lastDate;
			//select activity
			if ($actv == 0){
				//set hours
				if (!empty($hours)){
					$_SESSION['hours'] = $hours;
					unset($_SESSION['duration']);
					$reqView = $bdd->query("select * from data_graph where jours between '$firstDate' AND '$lastDate' AND debut = '$hours'");
					
				}
				//set duration
				if (!empty($duration)){
					$_SESSION['duration']= $duration;
					unset($_SESSION['hours']);
					$reqView = $bdd->query("select * from data_graph where jours between '$firstDate' AND '$lastDate' AND duration = '$duration'");

				}
			}else{
				//set hours
				if (!empty($hours)){
					$_SESSION['hours']= $hours;
					unset($_SESSION['duration']);
					$reqView = $bdd->query("select * from data_graph where jours between '$firstDate' AND '$lastDate' AND debut = '$hours' AND card='$actv'");

				}
				//set duration
				if (!empty($duration)){
					$_SESSION['duration']= $duration;
					unset($_SESSION['hours']);
					$reqView = $bdd->query("select * from data_graph where jours between '$firstDate' AND '$lastDate' AND duration = '$duration' AND card='$actv'");

				}
			}
		}
		//ANCHOR else selection
		else {
			//verify start >= end
			if($lastDate >= $firstDate){
				$_SESSION['dayStart'] = $firstDate;
				$_SESSION['dayEnd'] = $lastDate;
				if ($actv == 0){
					//set hours
					echo $actv.'<br>';
					if (!empty($hours)){
						$_SESSION['hours']= $hours;
						unset($_SESSION['duration']);
						$reqView = $bdd->query("select * from data_graph where jours between '$firstDate' AND '$lastDate' AND debut = '$hours'");

					}
					//set duration
					if (!empty($duration)){
						$_SESSION['duration']= $duration;
						unset($_SESSION['hours']);
						$reqView = $bdd->query("select * from data_graph where jours between '$firstDate' AND '$lastDate' AND duration = '$duration'");
	
					}
				}else{
					//set hours
					if (!empty($hours)){
						$_SESSION['hours']= $hours;
						unset($_SESSION['duration']);
						$reqView = $bdd->query("select * from data_graph where jours between '$firstDate' AND '$lastDate' AND debut = '$hours' AND card='$actv'");

					}
					//set duration
					if (!empty($duration)){
						$_SESSION['duration']= $duration;
						unset($_SESSION['hours']);
						$reqView = $bdd->query("select * from data_graph where jours between '$firstDate' AND '$lastDate' AND duration = '$duration' AND card='$actv'");
	
					}
				}
			}
			else{
				echo 'la dateFin >= de dateDebut';
			}
		}
	}
	if(isset($table)){

	}

	if(isset($save)){

	}

	if(isset($modify)){

	}