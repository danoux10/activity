<?php
$dayadd = $bdd->query('select * from graph where ajoutday = '.$dayTime.'');

foreach ($dayadd as $data){
	$id = $data['idGraph'];
	$jour = $data['jours'];
	$activity = $data['card'];
	$info = $data['info'];
	$ajout = $data['difference'];
	$years = substr($jour,1,2);
	$month = substr($jour, 5,2);
	$day = substr($jour, 8,2);
	$jourview = $day.'/'.$month.'/'.$years;
	echo "<tr>";
		echo "<td>".$jourview."</td>";
		echo "<td>".$activity."</td>";
		echo "<td>".$info."</td>";
		echo "<td>".$ajout."</td>";
		echo "<td> <input type='radio' name='selected[]' value='$id' </td>";
	echo "</tr>";
}
?>