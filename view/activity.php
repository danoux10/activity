<?php
	

	if(isset($_POST['preview-btn'])) {
		$name = htmlspecialchars($_POST['nameActivity']);
		$iconSelect = $_POST['iconSelect'];
		$icon = $bdd->query('select * from icon where idIcon ='.$iconSelect.'');
		foreach ($icon as $dataIcon){
			$idIcon = $dataIcon['idIcon'];
			$tagChoose = $dataIcon['tag'];
			$iconName = $dataIcon['iconName'];
		}
		$colorSelect = $_POST['colorSelect'];
		$color = $bdd->query('select * from color where idColor ='.$colorSelect.'');
		foreach ($color as $dataColor){
			$idColor = $dataColor['idColor'];
			$fill = $dataColor['fill'];
			$text = $dataColor['text'];
			$border = $dataColor['border'];
		}
	} else{
		$name = 'Name';
		$tagChoose = '../image/start.svg';
		$fill = '#151515';
		$text = '#b8860b';
		$border = '3px solid #b8860b';
	}
	
	if (isset($_POST['add'])){
		$icon = $_POST['iconSelect'];
		$color = $_POST['colorSelect'];
		$name = htmlspecialchars($_POST['nameActivity']);
		$activity = $bdd->prepare('insert into cards set iconCard=?, style=?, nameCard=?');
		$activity ->execute([$icon,$color,$name]);
	}