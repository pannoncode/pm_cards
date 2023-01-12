<!DOCTYPE html>
<html lang="hu">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PM Kártya</title>
    <base href="<?php print(base_url()); ?>">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="./assets/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  </head>

  <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" role="navigation">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php/Home/">Főoldal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle bg-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Adatok</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="index.php/Nameform/index">Új dolgozó</a></li>
                <li><a class="dropdown-item" href="index.php/PmAdmin/namelist">Dolgozók lista</a></li>
                <li><a class="dropdown-item" href="index.php/PmAdmin/machinecode">Új gépszám</a></li>
                <li><a class="dropdown-item" href="index.php/PmAdmin/machineparts">PM - Új géprész</a></li>
                <li><a class="dropdown-item" href="index.php/PmAdmin/parts">PM - Alkatrész lista</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item disabled" href="index.php/PmAdmin/parts">CL - Géprészek</a></li>
                <li><a class="dropdown-item" href="index.php/Centerline/index">Új Centerline</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle bg-dark" href="#" id=dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">PM kártya</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="index.php/PmCardEdit/pmCardEdit">PM kártya szerkesztése</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="index.php/NewPmCard/newCard">Új PM kártya</a></li>
                <li>
                  <a class="dropdown-item" href="index.php/NewForm/index">Új PM kártya FORM</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle bg-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Centerline eltérési riport</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li style="text-align: center"><b><u>Riportok küldése</u></b></li>
                <li><a class="dropdown-item" href="index.php/Cldifferentdisp/index">Base-Lid adagoló</a></li>
                <li><a class="dropdown-item" href="index.php/Cldifferentdisp/maker">Gyártó</a></li>
                <li><a class="dropdown-item" href="index.php/Cldifferentdisp/closer">Tetőzáró</a></li>
                <li><a class="dropdown-item" href="index.php/Cldifferentdisp/conv">Conveyor pálya</a></li>
                <li><a class="dropdown-item" href="index.php/Cldifferentdisp/labeler">Címkéző</a></li>
                <li><a class="dropdown-item" href="index.php/Cldifferentdisp/poly">PolyPack</a></li>
                <li><a class="dropdown-item" href="index.php/Cldifferentdisp/polyDouble">PolyPack - Dupla</a></li>
                <li><a class="dropdown-item" href="index.php/Cldifferentdisp/pester">Pester</a></li>
                <li><a class="dropdown-item" href="index.php/Cldifferentdisp/volpak">VolPak</a></li>
                <li><a class="dropdown-item" href="index.php/Cldifferentdisp/flexlink">Flexlink</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li style="text-align: center"><b><u>Centerline eltérések</u></b></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="index.php/Cldifftable/machine3210">SD3210</a></li>
                <li><a class="dropdown-item" href="index.php/Cldifftable/machine3220">SD3220</a></li>
                <li><a class="dropdown-item" href="index.php/Cldifftable/machine3230">SD3230</a></li>
                <li><a class="dropdown-item" href="index.php/Cldifftable/machine3320">SD3320</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li style="text-align: center"><b><u>Centerline eltérések</u></b></li>
                <li><a class="dropdown-item" href="index.php/Cldifftable/index">Riportok kezelése</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle bg-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Centerline & CIL igénylések</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li style="text-align: center"><b><u>Igénylő formok</u></b></li>
                <li><a class="dropdown-item" href="index.php/Clrequiring/index">Új Centerline igénylő</a></li>
                <li><a class="dropdown-item" href="index.php/Cilrequiring/index">Új CIL pont igénylő</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="index.php/Clrequiring/tableCl">Centerline igénylések</a></li>
                <li><a class="dropdown-item" href="index.php/Cilrequiring/tableCil">CIL pont igénylések</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle bg-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Centerline lista</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li style="text-align: center"><b><u>Listák</u></b></li>
                <li><a class="dropdown-item" href="index.php/Centerlinelist/index">Centerline lista</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown d-flex justify-content-end">
              <a class="nav-link dropdown-toggle bg-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Szia <?php
                  if (isset($username)) {
                      print($username);
                  }
                  ?></a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="index.php/Account/index">Account</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <a class="dropdown-item" href="index.php/Home/logout">Kilépés</a>
                </li>
              </ul>

            </li>
          </ul> 
        </div>
      </div>
    </nav>

    <main class="p-4">
      <div class="p-10 d-flex justify-content-center">
        <?php
        if (isset($page)) {
            $this->load->view($page);
        }
        ?>
      </div>
    </main>

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
    <script>
      if($('#centerlinetable').length > 0){

        $('#centerlinetable').DataTable({
          "ajax": 'index.php/Centerlinelist/getCenterline'
        });

      }
      

    </script>

  </body>

</html>
