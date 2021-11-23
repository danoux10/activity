<?php
 $viewColor = $bdd->query('select * from color');
 foreach ($viewColor as $data){
	 $idView = $data['idColor'];
	 $backView = $data['back'];
	 $fillView = $data['fill'];
	 $borderView = $data['border'];
	 $textView = $data['text'];

	 echo "<input type='radio' class='card' name='activity' id='$idView'/>";
	 	echo "<div class='activity-card' style='background: $backView;'>";
		 echo "<label for='activityid' class='row card-inside' style='background: $fillView;color: $textView;border :$borderView; '>";
		 	echo "<p class='card-title'>Cours</p>";
		 echo "</label>";
    echo "</div>";
 }
 
 