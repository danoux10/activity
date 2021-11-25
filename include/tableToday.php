<?php
	$tableDay = $bdd->query('select * from graph where ajoutday = '. $dayTime .'');
	foreach ($tableDay as $dataDay){
		$date = $dataDay['jours'];
		$activiter = $dataDay['card'];
		$info = $dataDay['info'];
		$duree = $dataDay['difference'];
		$selectId = $dataDay['idGraph'];
		$years = substr($date,1,2);
		$month = substr($date, 5,2);
		$day = substr($date, 8,2);
		$jour = $day.'/'.$month.'/'.$years;
		echo "<tr>";
			echo '<td>'.$jour.'</td>';
			echo '<td>'.$activiter.'</td>';
			echo '<td>'.$info.'</td>';
			echo '<td>'.$duree.'</td>';
			echo "<td> <input type='radio' value='$selectId' class='show' name='select' id='$selectId'></td>";
		echo "</tr>";
	}