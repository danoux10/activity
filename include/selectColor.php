<?php
	$selectColor = $bdd ->query('select * from color');
	foreach ($selectColor as $data){
		$idColorSelect = $data['idColor'];
		$backSelect = $data['back'];
		$fillSelect = $data['fill'];
		$borderSelect = $data['border'];
		$textSelect = $data['text'];
		$valueColor = 'color'.$idColorSelect;
		
		echo "<span>";
			echo "<input type='radio' class='hidden color-btn' name='colorSelect' value='$idColorSelect' id='$valueColor' />";
			echo "<label for='$valueColor' class='color-small' style='background: $backSelect; color:$textSelect; border: $borderSelect'>";
				echo "<p class='color-choose'>Text... </p>";
			echo "</label>";
		echo "</span>";
	}