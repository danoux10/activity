<?php
	include '../config/bdd.php';
	$afficheColor = $bdd->query('select * from color');
	foreach ($afficheColor as $data){
		$id = $data['idColor'];
		$glow = $data['glow'];
		$border = $data['border'];
		$color = $data['text'];
		$back = $data['back'];
		$fill = $data['fill'];

//		$background = 'background:'.$back;
//		$border = 'border:'.$bordure;
//		$shadow = 'box-shadow:'.$glow;
//		$fillBloc = 'background:'.$fill;
//		$text = 'color:'.$color;
//
		echo "<td>".$glow."</td";
		echo "<td>".$border."</td";
		echo "<td>".$color."</td";
		echo "<td>".$back."</td";
		echo "<td>".$fill."</td";
		echo "<td style='background: $back'>";
			echo "<div style='background:$fill,border:$border,box-shadow:$glow'";
				echo "<p style='color: $color'>text...</p>";
			echo "</div>";
		echo "</td>";
			
	}
	