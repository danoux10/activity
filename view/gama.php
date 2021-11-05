
<?php
	include	'../config/bdd.php';
   include '../model/beta.php';

	@$ch=$_POST['icon'];
  if (isset($_POST['select'])){
  	$choose = implode("-",$ch);
  	echo $choose;
	}

?>
