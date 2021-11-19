<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>graphique</title>
    <link rel="stylesheet" href="../css/tailwind.css" />
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body class="red graph">
    <div class="view content">
      <!--LINK graphique genreration -->
    </div>

    <div class="form content">
      <form method="post">
        <div class="graphFormAM">
          <!-- LINK btn choose -->
          <div class="btn">
            <span class="fill cursor-pointer" id="add-btn">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.5 22.5">
                <path
                  id="Icon_ionic-md-add"
                  data-name="Icon ionic-md-add"
                  d="M29.25,19.5H19.5v9.75h-3V19.5H6.75v-3H16.5V6.75h3V16.5h9.75Z"
                  transform="translate(-6.75 -6.75)"
                />
              </svg>
            </span>
            <span class="fill mt-2 cursor-pointer" id="update-btn">
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
            <span class="fill mt-2 cursor-pointer" id="view-btn">
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
            <!-- LINK add data -->
            <fieldset id="add" class="large formadd">
              <legend class="secret">Add activity</legend>
              <!-- input -->
              <div class="grid grid-cols-3 gap-3 activitybt">
                <span>
                  <label for="date">Date</label>
                  <input type="date" name="dateAdd" id="date" />
                </span>
                <span>
                  <label for="activity">Activiter</label>
                  <select name="activityAdd" id="activity">
                    <option value="0">Activiter</option>
                  </select>
                </span>
                <span>
                  <label for="info">Description</label>
                  <input type="text" id="info" name="description" />
                </span>
                <span>
                  <label for="hoursStart">Heure début</label>
                  <input type="time" name="hoursStartA" id="hoursStart" />
                </span>
                <span>
                  <label for="hoursEnd">Heure fin</label>
                  <input type="time" name="hoursEndA" id="hoursEnd" />
                </span>
                <span>
                  <label for="duration">durée</label>
                  <input type="time" name="duration" id="duration" />
                </span>
                <span>
                  <button type="submit" name="add" class="valid">
                    <p>Valider</p>
                  </button>
                </span>
              </div>
              <!-- start & stop -->
              <!-- <div class="stop">
              <button type="submit" name="start" class="transition-all duration-500">Start</button>
              <button type="submit" name="end" class="transition-all duration-500">End</button>
            </div> -->
              <!-- table -->
              <div class="info">
                <!-- button for update or delete activity-->
                <div class="button">
                  <!-- button delete activity -->
                  <button
                    type="submit"
                    name="supprime"
                    class="supprimer rounded-full"
                  >
                    <span>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 31.5 36"
                      >
                        <path
                          id="Icon_awesome-trash"
                          data-name="Icon awesome-trash"
                          d="M30.375,2.25H21.938L21.277.935A1.688,1.688,0,0,0,19.765,0H11.728a1.668,1.668,0,0,0-1.5.935L9.563,2.25H1.125A1.125,1.125,0,0,0,0,3.375v2.25A1.125,1.125,0,0,0,1.125,6.75h29.25A1.125,1.125,0,0,0,31.5,5.625V3.375A1.125,1.125,0,0,0,30.375,2.25ZM3.741,32.836A3.375,3.375,0,0,0,7.109,36H24.391a3.375,3.375,0,0,0,3.368-3.164L29.25,9h-27Z"
                          transform="translate(0 0)"
                        />
                      </svg>
                    </span>
                  </button>
                  <!-- button update activity -->
                  <button
                    type="submit"
                    name="modify"
                    class="modifier rounded-full"
                  >
                    <span>
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
                  </button>
                </div>
                <div class="table">
                  <table class="scroll">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Activiter</th>
                        <th>Info</th>
                        <th>Durée</th>
                        <th>Select</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- <?php include_once '../include/simpletable.php'?> -->
                    </tbody>
                  </table>
                </div>
              </div>
            </fieldset>
            <!--LINK modifier -->
            <fieldset id="update" class="large formadd ">
              <legend class="secret">modify activity</legend>
              <!-- input -->
              <div class="grid grid-cols-3 gap-0 activitybt">
                <span>
                  <label for="dateUpdate">Date</label>
                  <input type="date" name="dateEdit" id="dateUpdate" />
                </span>
                <span>
                  <label for="activityUpdate">Activiter</label>
                  <select type="date" name="activityEdit" id="activityUpdate">
                    <option value="0">Activiter</option>
                  </select>
                </span>
                <span>
                  <label for="infoUpdate">Description</label>
                  <input type="text" id="infoUpdate" name="descriptionEdit" />
                </span>
                <span>
                  <label for="hoursStartUpdate">Heure début</label>
                  <input type="time" name="hoursStartEdit" id="hoursStartUpdate" />
                </span>
                <span>
                  <label for="hoursEndUpdate">Heure fin</label>
                  <input type="time" name="hoursEndEdit" id="hoursEndUpdate" />
                </span>
                <span>
                  <button type="submit" name="modif" class="valid valid-graph">
                    <p>Valider</p>
                  </button>
                </span>
              </div>
              <div>
                <!-- info (date select etc...) -->
              </div>
            </fieldset>
            <!--LINK view -->
            <fieldset id="preview" class="large ">
              <legend class="secret">view</legend>
              <!-- input -->
              <div class="grid grid-cols-3 gap-3 activitybt">
                <span>
                  <label for="dateStart">Date Start</label>
                  <input type="date" name="dateStart" id="dateStart" />
                </span>
                <span>
                  <label for="dateEnd">Date End</label>
                  <input type="datE" id="dateEnd" name="dateEnd" />
                </span>
                <span>
                  <label for="activityV">Activiter</label>
                  <select name="activityView" id="activityV">
                    <option value="0">Activiter</option>
                  </select>
                </span>
                <span>
                  <label for="hoursStartV">Heure début</label>
                  <input type="time" name="hoursStartV" id="hoursStartV" />
                </span>
                <span>
                  <label for="hoursEndV">Heure fin</label>
                  <input type="time" name="hoursEndV" id="hoursEndV" />
                </span>

                <span>
                  <span>
                    <button type="submit" name="view" class="valid">
                      <p>Valider</p>
                    </button>
                  </span>
                </span>
              </div>
              <!-- button -->
              <div class="grid grid-cols-3 gap-14 justify-items-center button mt-10danybarbe10@gmail.com">
                <button type="submit" name="pie" class="choix">
                  <span class="bt-icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 21.245 21.245"
                    >
                      <path
                        id="Icon_material-pie-chart"
                        data-name="Icon material-pie-chart"
                        d="M12.56,3V24.245A10.682,10.682,0,0,1,12.56,3Zm2.156,0v9.55h9.528A10.669,10.669,0,0,0,14.717,3Zm0,11.7v9.55a10.66,10.66,0,0,0,9.528-9.55Z"
                        transform="translate(-3 -3)"
                      />
                    </svg>
                  </span>
                  <p class="choose">Pie</p>
                </button>
                <button type="submit" name="donut" id="pie" class="choix">
                  <span class="bt-icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 22.836 22.836"
                    >
                      <path
                        id="Icon_material-donut-small"
                        data-name="Icon material-donut-small"
                        d="M13.276,11.175V3a11.482,11.482,0,0,0,0,22.836V17.661a3.706,3.706,0,0,1-2.284-3.243A3.706,3.706,0,0,1,13.276,11.175Zm4.407,2.1h8.153A11.24,11.24,0,0,0,15.56,3v8.175A3.2,3.2,0,0,1,17.684,13.276ZM15.56,17.661v8.175A11.24,11.24,0,0,0,25.836,15.56H17.684A3.2,3.2,0,0,1,15.56,17.661Z"
                        transform="translate(-3 -3)"
                      />
                    </svg>
                  </span>
                  <p class="choose">Donut</p>
                </button>
                <button type="submit" name="table" id="donut" class="choix">
                  <span class="bt-icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 23.792 21.748"
                    >
                      <path
                        id="Icon_metro-table"
                        data-name="Icon metro-table"
                        d="M2.571,3.856V25.6H26.362V3.856H2.571Zm8.922,13.981v-4.66h5.948v4.66Zm5.948,1.553v4.66H11.493V19.39Zm0-12.427v4.66H11.493V6.963h5.948Zm-7.435,0v4.66H4.058V6.963h5.948ZM4.058,13.177h5.948v4.66H4.058v-4.66Zm14.87,0h5.948v4.66H18.928v-4.66Zm0-1.553V6.963h5.948v4.66ZM4.058,19.39h5.948v4.66H4.058Zm14.87,4.66V19.39h5.948v4.66Z"
                        transform="translate(-2.571 -3.856)"
                      />
                    </svg>
                  </span>
                  <p class="choose">Table</p>
                </button>
                <button type="submit" name="line" id="line" class="choix">
                  <span class="bt-icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 21.468 21.468"
                    >
                      <path
                        id="Icon_open-graph"
                        data-name="Icon open-graph"
                        d="M18.865,0,10.734,8.05,8.05,5.367,0,13.5l2.683,2.683L8.05,10.734l2.683,2.683L21.468,2.683ZM0,18.784v2.683H21.468V18.784Z"
                      />
                    </svg>
                  </span>
                  <p class="choose">line</p>
                </button>
                <button type="submit" name="bar" id="bar" class="choix">
                  <span class="bt-icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24.407 18.305"
                    >
                      <path
                        id="Icon_awesome-chart-bar"
                        data-name="Icon awesome-chart-bar"
                        d="M15.864,16.7h1.831a.656.656,0,0,0,.61-.61V9.686a.656.656,0,0,0-.61-.61H15.864a.656.656,0,0,0-.61.61v6.407a.656.656,0,0,0,.61.61Zm4.576,0h1.831a.656.656,0,0,0,.61-.61V5.11a.656.656,0,0,0-.61-.61H20.441a.656.656,0,0,0-.61.61V16.093a.656.656,0,0,0,.61.61Zm-13.729,0H8.542a.656.656,0,0,0,.61-.61V12.737a.656.656,0,0,0-.61-.61H6.712a.656.656,0,0,0-.61.61v3.356A.656.656,0,0,0,6.712,16.7Zm4.576,0h1.831a.656.656,0,0,0,.61-.61V6.636a.656.656,0,0,0-.61-.61H11.288a.656.656,0,0,0-.61.61v9.458A.656.656,0,0,0,11.288,16.7Zm12.356,3.051H3.051V5.263A.763.763,0,0,0,2.288,4.5H.763A.763.763,0,0,0,0,5.263V21.28a1.526,1.526,0,0,0,1.525,1.525H23.644a.763.763,0,0,0,.763-.763V20.517A.763.763,0,0,0,23.644,19.754Z"
                        transform="translate(0 -4.5)"
                      />
                    </svg>
                  </span>
                  <p class="choose">Bar</p>
                </button>
                <button type="submit" name="save" id="save" class="choix">
                  <span class="bt-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                      <path
                        id="Icon_awesome-save"
                        data-name="Icon awesome-save"
                        d="M17.435,6.185l-3.37-3.37A1.929,1.929,0,0,0,12.7,2.25H1.929A1.929,1.929,0,0,0,0,4.179V18.321A1.929,1.929,0,0,0,1.929,20.25H16.071A1.929,1.929,0,0,0,18,18.321V7.549a1.929,1.929,0,0,0-.565-1.364ZM9,17.679a2.571,2.571,0,1,1,2.571-2.571A2.571,2.571,0,0,1,9,17.679ZM12.857,5.443V9.482a.482.482,0,0,1-.482.482H3.054a.482.482,0,0,1-.482-.482V5.3a.482.482,0,0,1,.482-.482h9.182a.482.482,0,0,1,.341.141l.14.14a.482.482,0,0,1,.141.341Z"
                        transform="translate(0 -2.25)"
                      />
                    </svg>
                  </span>
                  <p class="choose">Save</p>
                </button>
              </div>
            </fieldset>
          </div>
        </div>
      </form>
    </div>
    <script src="../js/toggleView.js"></script>
  </body>
</html>
