<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/tailwind.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body class="bg-black text-red-600">
  <form action="" method="post" class="grid grid-cols-2 gap-5">
    <div class="border border-white">
      <fieldset class="border border-red-700">
        <legend>icon manage</legend>
          <label for="activityName">Name</label>
          <input type="text" name="activityName" id="activityName">
          <br>
          <?php
            $afficheIcon = $bdd->query('select * from icon');
            $afficheColor = $bdd->query('select * from color');
            
            foreach ($afficheIcon as $data){
              $id = $data['idIcon'];
              $tag = $data['tag'];
              echo "<input type='radio' name='icon[]' value='$id' id='$id'>";
              echo "<label for='$id' style='fill:#ffffff'>". file_get_contents($tag)."</label>";
            }
            foreach ($afficheColor as $data){
	            $id = $data['idColor'];
	            $back = "background: ".$data['back'];
	            $fill = "background: ".$data['fill'];
	            $shadow = "box-shadow: ".$data['glow'];
	            $border = "border:".$data['border'];
	            $text = $data['text'];
	            echo "<input type='radio' name='color[]' value='$id' id='$id'>";
	            echo "<div class='bg-view' for='$id' style='$back'>";
	            echo "<div style='$shadow,$border,$fill'>";
	            echo "<p style='color:$text'>text</p";
	            echo  "</div>";
	            echo "</div>";
            }
          ?>
        <button class="border" type="submit" name="valid">valid</button>
      </fieldset>
    </div>
  </form>
</body>
</html>