<?php
$dayadd = $bdd->query('select * from graph where ajoutday = '.$test.'');
foreach ($dayadd as $data){
	$id = $data['idGraph'];
	$activity = $data['card'];
	$info = $data['info'];
	$start = $data['debut'];
	$end = $data['fin'];
	$ajout = $data['ajoutday'];

	echo "<tr>";
		echo "<td>".$id."</td>";
		echo "<td>".$activity."</td>";
		echo "<td>".$info."</td>";
		echo "<td>".$ajout."</td>";
		echo "<td> <input type='checkbox' name='selected' value='$id' </td>";
	echo "</tr>";
}
?>