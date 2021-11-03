<?php
$viewtest=$bdd->query('select * from graph');
foreach ($viewtest as $data){
	$id=$data['idGraph'];
	$info=$data['info'];
	echo "<input type='radio' value=$id class='border' name='choose()'><br>";
}
?>