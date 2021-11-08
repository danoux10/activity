
<?php
include	'../config/bdd.php';
include '../model/color.php';

@ $add = $_POST['add'];
@ $modify = $_POST['modif'];
@ $preview = $_POST['preview'];
@ $color = $_POST['text'];
@ $view = $_POST['view'];


if (isset($preview)){
	echo 'back '.$back.'<br> fill '.$fill.'<br> border '.$borderInput.'<br> shadow '.$glow.'<br> color '.$color;
	echo "<div class='preview-color'>";
		echo "<div class='bg-preview' style='background: $back'>";
			echo "<div class='forme-preview' style='background: $fill, border: $border', box-shadow: $shadow>";
				echo "<p style='color: $color'>text...</p>";
			echo "</div>";
		echo "</div>";
	echo "</div>";
}
if(isset($add)){
	$addColor= $bdd->prepare('insert into color set back=?, fill=?, border=?, glow=?, text=?');
	$addColor->execute([$back,$fill,$border,$shadow,$color]);
}

if (isset($view)){
	$viewColor = $bdd->query('select * from color');
	foreach ($viewColor as $data) {
		$id = $data['idColor'];
		$back = "background: ".$data['back'];
		$fill = "background: ".$data['fill'];
		$shadow = "box-shadow: ".$data['glow'];
		$border = "border:".$data['border'];
		$text = $data['text'];
		echo $id.'<br>'.$back.'<br>'.$text;
		echo "<div class='bg-view' style='$back'>";
			echo "<div style='$shadow,$border,$fill'>";
				echo "<p style='color:$text'>text</p";
			echo  "</div>";
		echo "</div>";
		
	}
}

?>
