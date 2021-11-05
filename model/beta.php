<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/tailwind.css">
</head>
<body class="bg-black text-red-600">
  <form action="" method="post" class="grid grid-cols-2 gap-5">
    <div class="border border-white">
        <?php include '../include/alpha.php'?>
    </div>
    <div class="border border-white">
      <fieldset class="border border-red-700">
        <legend>icon manage</legend>
          <input type="radio" name="icon[]" value="0" id="">
          <input type="radio" name="icon[]" value="1" id="">
        <button class="border" type="submit" name="select">supprimer</button>
      </fieldset>
    </div>
  </form>
</body>
</html>