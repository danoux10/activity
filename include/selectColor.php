<?php
	$selectColor = $bdd ->query('select * from color');
	foreach ($selectColor as $data){
		$idColorSelect = $data['idColor'];
		$backSelect = $data['back'];
		$fillSelect = $data['fill'];
		$borderSelect = $data['border'];
		$textSelect = $data['text'];
		
		echo "<input type='radio' class='color-btn' name='color[]' id='$idColorSelect' />";
    	echo "<div class='color-small color-select' style='background: $backSelect; color:$textSelect; border: $borderSelect'>";
				echo "<label for='$idColorSelect' class='color-choose'>Text... </label>";
			echo "</div>";
	}