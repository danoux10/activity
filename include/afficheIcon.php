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

//$viewtest=$bdd->query('select * from graph');
//foreach ($viewtest as $data){
//	$id=$data['idGraph'];
//	$info=$data['info'];
//	echo "<button type=submit value='.$id.' class='border' name='icon[]'>".$info."</button><br>";
//}
?>