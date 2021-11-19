<?php
$viewIcon = $bdd->query('select * from icon');
foreach ($viewIcon as $data){
	$idIcon = $data['idIcon'];
	$tag = $data['tag'];
	$name = $data['iconName'];
	
	echo "<input type='radio' class='card' name='icon[]' id='$idIcon' />";
		echo "<label for='$idIcon' class='row icon-inside'>";
    	echo "<img class='icon-view' src='$tag' alt='$name'/>";
    echo "</label>";
}


