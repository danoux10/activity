<?php
$view = $bdd->query('select * from icon');
foreach ($view as $data){
	$tag = $data['tag'];
	$id = $data['idIcon'];

	echo "<div class='bg-white flex border'>";
	echo "<input type='radio' value='$id' name='icon[]' id='$id'>";
	echo "<label for='$id'><img class='border border-black' src='$tag'></label>";
	echo "</div>";
}
?>