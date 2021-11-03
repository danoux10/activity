<?php
	include '../config/bdd.php';
	include '../model/icon.php';

	@ $ajout = $_POST['add'];
	@ $supprim = $_POST['delete'];


	if (isset($ajout)){
		if (isset($_FILES['iconAdd'])){
			if($_FILES['iconAdd']['error'] !== UPLOAD_ERR_OK){
				echo 'erreur de téléchargement';
			}else{
				$name=uniqid();
				$info=pathinfo($_FILES['iconAdd']['name']);
				$src = '../icon/'.$name.'.'.$info['extension'];
				move_uploaded_file($_FILES['iconAdd']['tmp_name'],'../icon/'.$name.'.'.$info['extension']);
				$addIcon = $bdd->prepare('insert into icon set tag=?');
				$addIcon->execute([$src]);
			}
		}
	}



	if(isset($supprim)){
		$choose = $_POST['icon'];
		$delete = $bdd->prepare('delete * from icon where idIcon=$choose');
		$delete->execute();
	}
