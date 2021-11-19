<?php
	$selectIcon = $bdd->query('select * from icon');
	foreach ($selectIcon as $data){
		$idIcon = $data['idIcon'];
		$tag = $data['tag'];
		$name = $data['iconName'];
		
	echo "<input type='radio' class='icon-btn' name='iconSelect[]' id='$idIcon'/>";
	echo "<label for='$idIcon' class='icon-select'>";
		echo "<img src='$tag' class='icon-choose' alt='$name'/>";
	echo "</label>";
}