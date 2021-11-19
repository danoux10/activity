<?php
	@ $ajout = $_POST['add'];
	@ $supprim = $_POST['delete'];


	if (isset($ajout)){
		if (isset($_FILES['iconAdd'])){
			if($_FILES['iconAdd']['error'] !== UPLOAD_ERR_OK){
				echo 'erreur de téléchargement';
			}else{
				$name=htmlspecialchars($_POST['iconName']);
				$info=pathinfo($_FILES['iconAdd']['name']);
				$src = '../icon/'.$name.'.'.$info['extension'];
				move_uploaded_file($_FILES['iconAdd']['tmp_name'],'../icon/'.$name.'.'.$info['extension']);
				$addIcon = $bdd->prepare('insert into icon set tag=?, iconName=?');
				$addIcon->execute([$src,$name]);
			}
		}
	}



	if(isset($supprim)){
		$choose = implode(" ",$_POST['icon']);
		echo $choose;
		$delete = $bdd->query('select * from icon where idGraph='.$choose.'');
		foreach ($delete as $data){
			$info = $data['info'];
			echo '<br>'.$info;
		}
	}
