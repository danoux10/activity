
<?php
include	'../config/bdd.php';
include '../model/beta.php';

@ $add = $_POST['add'];
@ $modify = $_POST['modif'];
@ $preview = $_POST['preview'];
@ $color = $_POST['text'];


if (isset($preview)){
	echo 'back '.$back.'<br> fill '.$fill.'<br> border '.$borderInput.'<br> shadow '.$glow.'<br> color '.$color;
//	echo "<div class='preview-color'>";
//		echo "<div class='bg-preview' style='background: $back'>";
//			echo "<div class='forme-preview' style='background: $fill, border: $border', box-shadow: $shadow>";
//				echo "<p style='color: $color'>text...</p>";
//			echo "</div>";
//		echo "</div>";
//	echo "</div>";
}
if(isset($add)){
	$addColor= $bdd->prepare('insert into color set back=?, fill=?, border=?, glow=?, text=?');
	$addColor->execute([$back,$fill,$border,$shadow,$color]);
}
?>
