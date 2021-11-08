<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/tailwind.css">
</head>
<?php


@ $checkBack = $_POST['checkBack'];
@ $checkFill = $_POST['checkFill'];
@ $checkBorder = $_POST['checkBorder'];
@ $checkShadow = $_POST['checkShadow'];
@ $checkColor = $_POST['checkColor'];
@ $reset = $_POST['reset'];

if (!empty($_POST['back'])) {
	$back = $_POST['back'];
	if (!isset($checkBack)) {
		$back = 'none';
	}
}

if (!empty($_POST['fill'])) {
	$fill = $_POST['fill'];
	if (!isset($checkFill)) {
		$fill = 'none';
	}
}

if (!empty($_POST['border'])) {
	$border = "3px solid" . $_POST['border'];
	$borderInput = $_POST['border'];
	if (!isset($checkBorder)) {
		$border = 'none';
	}
}

if (isset($_POST['shadow'])) {
	$shadow = "0px 0px 28px 9px" . $_POST['shadow'];
	$glow = $_POST['shadow'];
	if (!isset($checkShadow))
		$shadow = 'none';
}

if(isset($_POST['text'])){
	$color = $_POST['text'];
}

if (isset($reset)){
	$back='#000000';
	$fill='#000000';
	$borderInput='#000000';
	$glow='#000000';
	$color='#000000';
}
?>
<body class="bg-black text-red-600">
<form action="" method="post" class="grid grid-cols-2 gap-5">
    <div class="border">
        <fieldset>
            <legend>color</legend>
            <input type="color" value="<?php echo $back;?>" name="back" id="">
            <input type="color" value="<?php echo $fill;?>" name="fill" id="">
            <input type="color" value="<?php echo $borderInput;?>" name="border" id="">
            <input type="color" value="<?php echo  $glow;?>" name="shadow" id="">
            <input type="color" value="<?php echo $color;?>" name="text" id="">
            <input type="checkbox" name="checkBack" checked id="">
            <input type="checkbox" name="checkFill" checked id="">
            <input type="checkbox" name="checkBorder" checked id="">
            <input type="checkbox" name="checkShadow" checked id="">
            <button type="submit" name="preview">preview</button>
            <button type="submit" name="add">add</button>
            <button type="submit" name="reset">reset</button>
            <button type="submit" name="view">view</button>
        </fieldset>
    </div>
</form>
<table>
    <tbody>
        <?php
//            include '../include/afficheColor.php';
        ?>
    </tbody>
</table>
</body>
</html>