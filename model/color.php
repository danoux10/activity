<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>color</title>
  <link rel="stylesheet" href="../css/tailwind.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div class="content view">
    <div class="grid grid-cols-5 gap-1 iconView">

    </div>
  </div>
  <div class="content">
    <div class="fom">
      <form action="" method="post">
        <fieldset>
          <legend>New Color</legend>
          <!-- btn bg & active -->
          <div class="flex justify-center">
            <span class="horizontal">
              <label for="background">Background</label>
              <input type="color" name="background" id="background">
            </span>

            <label for="checkBg" class="check" for="checkBg">
              <input type="checkbox" checked name="checkBg" class="checkbox" id="checkBg">
              <div class="checkmark"></div>
              <span class="checked"><p>Active</p></span>
              <span class="uncheck"><p>Descative</p></span>
            </label>
          </div>
          <!-- btn bloc color -->
          <span class="horizontal">
            <label for="fill">Bloc background</label>
            <input type="color" name="fill" id="fill">
          </span>
          <!-- bnt border -->
          <span class="horizontal">
            <label for="bordure">Border Color</label>
            <input type="color" name="bordure" id="bordure">
          </span>
        </fieldset>
      </form>
    </div>
  </div>
</body>
</html>