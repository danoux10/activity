<?php
	session_start();
	header('Content-Type: application/json');
	//selection for data
	
	if ($_SESSION['reqData'] == 0){
		$reqData = $bdd->query("select * from data_graph inner join cards on cards.idCard=data_graph.card  inner join color on color.idColor=cards.colorId where jours='$today'");
	}
	if ($_SESSION['reqData'] == 1){
		$reqData = $bdd->query("select * from data_graph inner join cards on cards.idCard=data_graph.card  inner join color on color.idColor=cards.colorId where jours between '$StartDate' AND '$EndDate'");
	}
	if ($_SESSION['reqData'] == 2){
		$reqData = $bdd->query("select * from data_graph inner join cards on cards.idCard=data_graph.card  inner join color on color.idColor=cards.colorId where jours between '$StartDate' AND '$EndDate' AND debut ='$hours'");
	}
	if ($_SESSION['reqData'] == 3){
		$reqData = $bdd->query("select * from data_graph inner join cards on cards.idCard=data_graph.card  inner join color on color.idColor=cards.colorId where jours between '$StartDate' AND '$EndDate' AND duration='$duration'");
	}
	if ($_SESSION['reqData'] == 4){
		$reqData = $bdd->query("select * from data_graph inner join cards on cards.idCard=data_graph.card  inner join color on color.idColor=cards.colorId where jours between '$StartDate' AND '$EndDate' AND card='$actv'");
	}
	if ($_SESSION['reqData'] == 5){
		$reqData = $bdd->query("select * from data_graph inner join cards on cards.idCard=data_graph.card  inner join color on color.idColor=cards.colorId where jours between '$StartDate' AND '$EndDate' AND debut='$hours' AND card='$actv'");
	}
	if ($_SESSION['reqData'] == 6){
		$reqData = $bdd->query("select * from data_graph inner join cards on cards.idCard=data_graph.card  inner join color on color.idColor=cards.colorId where jours between '$StartDate' AND '$EndDate' AND duration='$duration' AND card='$actv'");
	}
	
	$dataViewGraph = array();
	foreach ($reqData as $row) {
		$dataViewGraph[] = $row;
	}
	
	echo json_encode($dataViewGraph);
	?>