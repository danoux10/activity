<form action="" method="post">
<?php
  include '../config/bdd.php';
  $view = $bdd->query('select * from test');
  foreach ($view as $data){
      $id= $data['id'];
      $value = $data['value'];
      echo "<div>";
        echo "<input type='radio' name='icon' value='$id' id='$value'>";
        echo "<label for='$value'>valeur.".$id."</label>";
      echo "</div>";
  }
	?>
	<button type="submit" name="preview-btn">preview</button>
	<button type="submit" name="data">data</button>
</form>

<?php
    if (isset($_POST['data'])){
        for ($d=0;$d<10;$d++){
            $add = $bdd->prepare('insert into test set value=?');
            $add->execute([$d]);
        }
    }
	if (isset($_POST['preview-btn'])){
		$valuei = $_POST['icon'];
		echo 'i ='.$valuei;
	}
?>