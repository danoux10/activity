
<?php
//btn
@ $add = $_POST['add'];
@ $modify = $_POST['modif'];
@ $preview = $_POST['preview-btn'];
@ $color = $_POST['text'];
@ $view = $_POST['view'];

//checkbox
@ $activeBack = $_POST['activeBack'];
@ $activeFill = $_POST['activeFill'];
@ $activeBorder = $_POST['activeBorder'];

//input
@ $back = $_POST['back'];
@ $fill = $_POST['fill'];
@ $borderValue = $_POST['border'];
@ $text = $_POST['text'];
if (isset($preview)){
	$text;
	if (isset($activeBack)){
		$back;
		$check ='checked';
	}else{
		$back = 'none';
	}
	if (isset($activeBorder)){
		$border = '3px solid'.$borderValue;
		$check ='checked';
	}else{
		$border = 'none';
		$borderValue = 'none';
	}
	if (isset($activeFill)){
		$fill;
		$check ='checked';
	}else{
		$fill ='none';
	}
}else{
	$back = '#888888';
	$fill = '#000000';
	$borderValue = '#b8860b';
	$border = '3px solid '.$borderValue;
	$text = '#ffffff';
	$check = 'checked';
}

if(isset($add)){
	$text = $_POST['text'];
	if (isset($activeBack)){
		$back = $_POST['back'];
		echo $back;
	}else{
		$back = 'none';
	}
	if (isset($activeBorder)){
		$borderValue = $_POST['border'];
		$border = '3px solid'.$borderValue;
	}else{
		$border = 'none';
		$borderValue = 'none';
	}
	if (isset($activeFill)){
		$fill = $_POST['fill'];
		echo $fill;
	}else{
		$fill ='none';
	}
	$addColor= $bdd->prepare('insert into color set back=?, fill=?, border=?, text=?');
	$addColor->execute([$back,$fill,$border,$color]);
}


?>
