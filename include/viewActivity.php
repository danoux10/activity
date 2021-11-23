<?php 
$viewActivity = $bdd->query('select * from cards inner join icon on cards.iconCard=icon.idIcon inner join color on cards.style = color.idColor');
foreach ($viewActivity as $dataActivity){
	$id = $dataActivity['id'];
	$nameCard = $dataActivity['nameCard'];
	$fillView = $dataActivity['fill'];
	$textView = $dataActivity['text'];
	$borderView = $dataActivity['border'];
	$tagView = $dataActivity['tag'];
	$iconNameView = $dataActivity['iconName'];
	$idvalue ='act'.$id;
	
	echo "<input type='radio' class='color-btn' name='activity' value='$id' id='$idvalue' />";
  	echo "<div class='activity-card color-select'>";
        echo "<label for='activityid' class='row card-inside' style='background: $fillView;color : $textView; border: $borderView'>";
					echo "<img class='card-icon' src='$tagView' alt='$iconNameView'/>";
          echo "<p class='card-title'>".$nameCard."</p>";
				echo "</label>";
		echo "</div>";
}
?>