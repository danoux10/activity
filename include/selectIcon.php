<?php
	$selectIcon = $bdd->query('select * from icon');
	foreach ($selectIcon as $data){
		$idIcon = $data['idIcon'];
		$tag = $data['tag'];
		$nameIcon = $data['iconName'];
		$valueIcon = 'icon'.$idIcon;
		
	echo "<span>";
		echo "<input type='radio' class='icon-btn' name='iconSelect' value='$idIcon' id='$valueIcon'/>";
		echo "<label for='$valueIcon' class='icon-select'>";
			echo "<img src='$tag' class='icon-choose' alt='$nameIcon'/>";
		echo "</label>";
	echo "</span>";
}