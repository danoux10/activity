<?php
	foreach ($reqData as $data){
		$dateView = date('d/m/Y',strtotime($data['jours']));
		$activityName = $data['nameCard'];
		$info = $data['info'];
		$durationV = date('H:i',strtotime($data['duration']));
		$HoursStart = date('H:i',strtotime($data['debut']));
		$HoursEnd = $data['fin'];
		if ($HoursEnd == NULL){
			$HoursEndVal = '';
		}else{
			$HoursEndVal = date('H:i',strtotime($data['fin']));
		}
		$id = $data['idDataG'];
		
		echo '<tr>';
			echo '<td>'.$dateView.'</td>';
			echo '<td>'.$activityName.'</td>';
			echo '<td>'.$info.'</td>';
			echo '<td>'.$durationV.'</td>';
			echo '<td>'.$HoursStart.'</td>';
			echo '<td>'.$HoursEnd.'</td>';
			echo '<td> <input type="radio" name="selectUp" value='.$HoursEndVal.'></td>';
		echo '</tr>';
	}