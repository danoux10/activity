<?php
	include	'../config/bdd.php';
	include	'../model/activity.php';
	
	if (isset($_POST['valid'])){
		$icon = implode("-",$_POST['icon']);
		$color = implode("-",$_POST['color']);
		$name = htmlspecialchars($_POST['activityName']);
		echo $name.'-/-'.$color.'-//-'.$icon;
		$activity = $bdd->prepare('insert into cards set iconCard=?, style=?, nameCard=?');
		$activity ->execute([$icon,$color,$name]);
	}