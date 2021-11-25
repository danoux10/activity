<?php
 $selectActivity = $bdd->query('select * from cards inner join color on cards.style=color.idColor');
foreach ($selectActivity as $dataSelect){
	$id = $dataSelect['id'];
	$fill = $dataSelect['fill'];
	$color = $dataSelect['text'];
	$name = $dataSelect['nameCard'];
	echo "<option value='$id' style='color: $color;background: $fill'>".$name."</option>";
}
 