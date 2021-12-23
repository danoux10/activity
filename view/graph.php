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
		$req = $bdd ->prepare('insert into data_graph set jours=?, debut=?,fin=?,duration=?,durationNum=?,card=?,info=?,ajout=?');
		$req -> execute([$jourA,$S,$E,$duration,$dura,$activityChoose,$info,$dayTime]);
	}

	//LINK selection view
	if(isset($view)) {
		//set variable name
		$firstDate = $_POST['dateStart'];
		$lastDate = $_POST['dateEnd'];
		$actv = $_POST['activityView'];
		$hours = $_POST['hoursStartV'];
		$duration = $_POST['durationV'];
		//select first date to see data
		if (!empty($firstDate)){
			$StartDate = $_POST['dateStart'];
			$_SESSION['dayStart']=$StartDate;
		}else{
			$StartDate = $today;
			$_SESSION['dayStart']=$StartDate;
		}
		//select second date to see data
		if(!empty($lastDate)){
			$EndDate = $_POST['dateEnd'];
			$_SESSION['dayEnd']=$EndDate;
		}else{
			$EndDate = $today;
			$_SESSION['dayEnd']=$EndDate;
		}
		//verification endDate>=startDate
		if ($StartDate<=$EndDate){
			//selec activity
			if($actv == 0){
				$_SESSION['reqData']=1;
				$reqData = $bdd->query("select * from data_graph inner join cards on cards.idCard=data_graph.card  inner join color on color.idColor=cards.colorId where jours between '$StartDate' AND '$EndDate'");
				if (!empty($hours)){
					$_SESSION['reqData']=2;
					$_SESSION['hours']=$hours;
					unset($_SESSION['duration']);
					$reqData = $bdd->query("select * from data_graph inner join cards on cards.idCard=data_graph.card  inner join color on color.idColor=cards.colorId where jours between '$StartDate' AND '$EndDate' AND debut ='$hours'");
				}
				if (!empty($hours)){
					$_SESSION['reqData']=3;
					$_SESSION['duration']=$duration;
					unset($_SESSION['hours']);
					$reqData = $bdd->query("select * from data_graph inner join cards on cards.idCard=data_graph.card  inner join color on color.idColor=cards.colorId where jours between '$StartDate' AND '$EndDate' AND duration='$duration' natural join cards natural join color");
				}
			}else{
				$_SESSION['reqData']=4;
				$_SESSION['activityS']=$actv;
				$reqData = $bdd->query("select * from data_graph inner join cards on cards.idCard=data_graph.card  inner join color on color.idColor=cards.colorId where jours between '$StartDate' AND '$EndDate' AND card='$actv' natural join cards natural join color");
				if (!empty($hours)){
					$_SESSION['reqData']=5;
					$_SESSION['hours']=$hours;
					unset($_SESSION['duration']);
					$reqData = $bdd->query("select * from data_graph inner join cards on cards.idCard=data_graph.card  inner join color on color.idColor=cards.colorId where jours between '$StartDate' AND '$EndDate' AND debut='$hours' AND card='$actv' natural join cards natural join color");
				}
				if (!empty($hours)){
					$_SESSION['reqData']=6;
					$_SESSION['duration']=$duration;
					unset($_SESSION['hours']);
					$reqData = $bdd->query("select * from data_graph inner join cards on cards.idCard=data_graph.card  inner join color on color.idColor=cards.colorId where jours between '$StartDate' AND '$EndDate' AND duration='$duration' AND card='$actv' natural join cards natural join color");
				}
			}
		}else{
			$_SESSION['errorMessage'] = 0;
		}
	}else{
		$_SESSION['reqData'] = 0;
//		$reqData = $bdd->query("select * from data_graph natural join cards natural join color where jours='$today'");
		$reqData = $bdd->query("select * from data_graph inner join cards on cards.idCard=data_graph.card  inner join color on color.idColor=cards.colorId where jours='$today'");
	}
	
	if(isset($table)){

	}

	if(isset($save)){

	}

	if(isset($modify)){

	}