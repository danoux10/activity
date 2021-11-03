<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>icon</title>
	<link rel="stylesheet" href="../css/tailwind.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Add icon</legend>
        <input type="file" name="iconAdd" accept=".svg" id="" required>
        <button type="submit" name="add" class="border">ajouter</button>
        <button type="submit" name="delete" class="border">delete</button>
    </fieldset>
</form>
<form class="content grid grid-cols-12 gap-1">
    <?php include '../include/afficheIcon.php'?>
</form>

</body>
</html>