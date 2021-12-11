<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>color</title>
    <?php
      include_once '../include/headContaint.php';
      include_once '../view/color.php';
    ?>
</head>
<body class="red color-Page">
<?php include_once '../include/navbar.html'?>
  <div class="view content">
      <form action="" method="post">
        <fieldset>
            <legend>Color</legend>
            <div class="card-container">
              <div class="card-containt grid grid-cols-6 gap-1 mt-3 pl-1">
                <!-- TODO activity card -->
                <!-- ! php generation -->
                <?php include_once '../include/viewColor.php'?>
              </div>
            </div>
        </fieldset>
      </form>
  </div>
  <div class="content form">
      <form action="" method="post">
        <div class="graphFormAM">
          <!-- LINK btn choose -->
          <div class="btn">
            <span class="fill cursor-pointer add-btn" id="add-btn">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.5 22.5">
                <path
                  id="Icon_ionic-md-add"
                  data-name="Icon ionic-md-add"
                  d="M29.25,19.5H19.5v9.75h-3V19.5H6.75v-3H16.5V6.75h3V16.5h9.75Z"
                  transform="translate(-6.75 -6.75)"
                />
              </svg>
            </span>
            <span class="fill mt-2 cursor-pointer update-btn" id="update-btn">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 35.998 35.999"
              >
                <path
                  id="Icon_awesome-pencil-alt"
                  data-name="Icon awesome-pencil-alt"
                  d="M35.009,9.991l-3.241,3.241a.845.845,0,0,1-1.2,0l-7.8-7.8a.845.845,0,0,1,0-1.2L26.009.991a3.382,3.382,0,0,1,4.774,0l4.226,4.226A3.37,3.37,0,0,1,35.009,9.991ZM19.983,7.017,1.519,25.481.028,34.024a1.69,1.69,0,0,0,1.955,1.955l8.543-1.5L28.99,16.017a.845.845,0,0,0,0-1.2l-7.8-7.8a.853.853,0,0,0-1.2,0ZM8.726,23.9a.98.98,0,0,1,0-1.392L19.554,11.679a.984.984,0,0,1,1.392,1.392L10.118,23.9a.98.98,0,0,1-1.392,0ZM6.188,29.813H9.563v2.552l-4.535.795L2.841,30.973l.795-4.535H6.188Z"
                  transform="translate(-0.002 -0.005)"
                />
              </svg>
            </span>
            <span class="fill mt-2 cursor-pointer view-btn" id="view-btn">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 14">
                <path
                  id="Icon_awesome-eye"
                  data-name="Icon awesome-eye"
                  d="M21.867,10.968a12.363,12.363,0,0,0-21.734,0,1.132,1.132,0,0,0,0,1.064,12.363,12.363,0,0,0,21.734,0A1.132,1.132,0,0,0,21.867,10.968ZM11,16.75A5.379,5.379,0,0,1,5.5,11.5,5.379,5.379,0,0,1,11,6.25a5.379,5.379,0,0,1,5.5,5.25A5.377,5.377,0,0,1,11,16.75ZM11,8a3.8,3.8,0,0,0-.967.138,1.686,1.686,0,0,1-.18,2.268,1.893,1.893,0,0,1-2.376.172,3.416,3.416,0,0,0,1.492,3.815,3.8,3.8,0,0,0,4.264-.129,3.4,3.4,0,0,0,1.237-3.9A3.65,3.65,0,0,0,11,8Z"
                  transform="translate(0 -4.5)"
                />
              </svg>
            </span>
          </div>

            <div>
              <!-- LINK  add color-->
                <fieldset id="add" class="add secret large color-field">
                    <legend>Add Color</legend>
                    <div class="grid grid-cols-2 gap-2 items-center justify-center">
                        <span class="row items-center justify-around">
                            <label for="back">Background</label>
                            <input value="<?php echo $back; ?>" type="color" name="back" id="back">
                           <input type="checkbox" name="activeBack" class="checkbox" id="checkback" <?php echo @ $check ?>>
                            <label class="checklabel" for="checkback"></label>
                        </span>
                        <span class="row items-center justify-around">
                            <label for="fill">Fill</label>
                            <input value="<?php echo $fill; ?>" type="color" name="fill" id="fill">
                            <input type="checkbox" name="activeFill" class="checkbox" id="checkfill" <?php echo @ $check ?>>
                            <label for="checkfill" class="checklabel"></label>
                        </span>
                        <span class="row items-center justify-around">
                            <label for="border">Border</label>
                            <input value="<?php echo $borderValue; ?>" type="color" name="border" id="border">
                            <input type="checkbox" name="activeBorder" class="checkbox" id="checkborder" <?php echo @ $check ?>>
                            <label for="checkborder" class="checklabel"></label>
                        </span>
                        <span class="row items-center justify-around">
                            <label for="textColor">Text Color</label>
                            <input value="<?php echo $text; ?>" type="color" name="text" id="textColor">
                        </span>
                    </div>
                    <div class="save-preview  row justify-center">
                        <button type="submit" name="preview-btn" class="preview-btn">
                          <span class="eyes-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 14">
                              <path
                                id="Icon_awesome-eye"
                                data-name="Icon awesome-eye"
                                d="M21.867,10.968a12.363,12.363,0,0,0-21.734,0,1.132,1.132,0,0,0,0,1.064,12.363,12.363,0,0,0,21.734,0A1.132,1.132,0,0,0,21.867,10.968ZM11,16.75A5.379,5.379,0,0,1,5.5,11.5,5.379,5.379,0,0,1,11,6.25a5.379,5.379,0,0,1,5.5,5.25A5.377,5.377,0,0,1,11,16.75ZM11,8a3.8,3.8,0,0,0-.967.138,1.686,1.686,0,0,1-.18,2.268,1.893,1.893,0,0,1-2.376.172,3.416,3.416,0,0,0,1.492,3.815,3.8,3.8,0,0,0,4.264-.129,3.4,3.4,0,0,0,1.237-3.9A3.65,3.65,0,0,0,11,8Z"
                                transform="translate(0 -4.5)"
                              />
                            </svg>
                          </span>
                          <p class="btn-text">preview</p>
                        </button>
                        <button type="submit" name="add" class="valid-btn">
                          <span class="savecard-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                              <path
                                id="Icon_awesome-save"
                                data-name="Icon awesome-save"
                                d="M17.435,6.185l-3.37-3.37A1.929,1.929,0,0,0,12.7,2.25H1.929A1.929,1.929,0,0,0,0,4.179V18.321A1.929,1.929,0,0,0,1.929,20.25H16.071A1.929,1.929,0,0,0,18,18.321V7.549a1.929,1.929,0,0,0-.565-1.364ZM9,17.679a2.571,2.571,0,1,1,2.571-2.571A2.571,2.571,0,0,1,9,17.679ZM12.857,5.443V9.482a.482.482,0,0,1-.482.482H3.054a.482.482,0,0,1-.482-.482V5.3a.482.482,0,0,1,.482-.482h9.182a.482.482,0,0,1,.341.141l.14.14a.482.482,0,0,1,.141.341Z"
                                transform="translate(0 -2.25)"
                              />
                            </svg>
                          </span>
                          <p class="btn-text">save</p>
                        </button>
                      </div>
                </fieldset>
                <!-- LINK update color-->
                <fieldset id="update" class="update secret large color-field">
                    <legend>update Color</legend>
                    <div class="grid grid-cols-2 gap-2 items-center justify-center">
                        <span class="row items-center justify-around">
                            <label for="back-update">Background</label>
                            <input type="color" name="backUpdate" id="back-update">
                        </span>
                        <span class="row items-center justify-around">
                            <label for="fill-update">Fill</label>
                            <input type="color" name="fillUpdate" id="fill-update">
                        </span>
                        <span class="row items-center justify-around">
                            <label for="border-update">Border</label>
                            <input type="color" name="borderUpdate" id="border-update">
                        </span>
                        <span class="row items-center justify-around">
                            <label for="textColor-update">Text Color</label>
                            <input type="color" name="shadowUpdate" id="textColor-update">
                        </span>
                    </div>
                    <div class="save-preview mt-8 row justify-center">
                        <button type="submit" name="preview-btn" class="preview-btn">
                          <span class="eyes-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 14">
                              <path
                                id="Icon_awesome-eye"
                                data-name="Icon awesome-eye"
                                d="M21.867,10.968a12.363,12.363,0,0,0-21.734,0,1.132,1.132,0,0,0,0,1.064,12.363,12.363,0,0,0,21.734,0A1.132,1.132,0,0,0,21.867,10.968ZM11,16.75A5.379,5.379,0,0,1,5.5,11.5,5.379,5.379,0,0,1,11,6.25a5.379,5.379,0,0,1,5.5,5.25A5.377,5.377,0,0,1,11,16.75ZM11,8a3.8,3.8,0,0,0-.967.138,1.686,1.686,0,0,1-.18,2.268,1.893,1.893,0,0,1-2.376.172,3.416,3.416,0,0,0,1.492,3.815,3.8,3.8,0,0,0,4.264-.129,3.4,3.4,0,0,0,1.237-3.9A3.65,3.65,0,0,0,11,8Z"
                                transform="translate(0 -4.5)"
                              />
                            </svg>
                          </span>
                          <p class="btn-text">preview</p>
                        </button>
                        <button type="submit" name="update" class="valid-btn">
                          <span class="savecard-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                              <path
                                id="Icon_awesome-save"
                                data-name="Icon awesome-save"
                                d="M17.435,6.185l-3.37-3.37A1.929,1.929,0,0,0,12.7,2.25H1.929A1.929,1.929,0,0,0,0,4.179V18.321A1.929,1.929,0,0,0,1.929,20.25H16.071A1.929,1.929,0,0,0,18,18.321V7.549a1.929,1.929,0,0,0-.565-1.364ZM9,17.679a2.571,2.571,0,1,1,2.571-2.571A2.571,2.571,0,0,1,9,17.679ZM12.857,5.443V9.482a.482.482,0,0,1-.482.482H3.054a.482.482,0,0,1-.482-.482V5.3a.482.482,0,0,1,.482-.482h9.182a.482.482,0,0,1,.341.141l.14.14a.482.482,0,0,1,.141.341Z"
                                transform="translate(0 -2.25)"
                              />
                            </svg>
                          </span>
                          <p class="btn-text">update</p>
                        </button>
                      </div>
                </fieldset>

                <!-- LINK preview color -->
                <fieldset id="preview" class="large preview">
                    <legend class="secret">Preview</legend>
                    <div class="activity-Preview" style="background: <?php echo $back ?>;">
                        <div class="activity-inside" style="color: <?php echo $text?>;background:<?php echo $fill ?>;border:<?php echo $border?>;box-shadow: <?php echo $shadow?> ">
                            <h3 class="activity-title">text...</h3>
                        </div>
                    </div>
                </fieldset>
            </div>
          </div>
      </form>
  </div>
<script src="../js/noreload.js"></script>
<?php include_once '../include/footer.html'?>
</body>
</html>