<?php
 $selectActivity = $bdd->query('select * from cards inner join color on cards.colorId=color.idColor');
foreach ($selectActivity as $dataSelect){
	$id = $dataSelect['idCard'];
	$fill = $dataSelect['fill'];
	$color = $dataSelect['text'];
	$name = $dataSelect['nameCard'];
	$border = $dataSelect['border'];
	echo "<option value='$id' style='color: $color;background: $fill; border: $border'>".$name."</option>";
}
 