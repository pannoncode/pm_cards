<!DOCTYPE html>
<html lang="hu">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PM Kártya</title>
    <base href="<?php print(base_url()); ?>" >
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
  </head>

  <body>
    <div id="sidebar" class='active'>
      <div class="sidebar-wrapper active">
        <div class="sidebar-header">
          <!--<img src="" alt="" srcset="">-->
        </div>
        <?php
        $this->load->view('navbar');
        ?>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
      </div>
    </div>
    <div id="app">

      <div id="main">
        <nav class="navbar navbar-header navbar-expand navbar-light">      
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                  <div class="d-none d-md-block d-lg-inline-block">Szia, <?php if (isset($username)) {  print($username);} ?></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="index.php/Account/index"><i data-feather="user"></i> Account</a>
                  <a class="dropdown-item" href="index.php/Home/logout"><i data-feather="log-out"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>

        <div class="main-content container-fluid">
          <div class="page-title">
            <a href="index.php/Home/"><h3>Főoldal</h3></a>
          </div>
          <section class="section">
            <div class="row mb-2">
              <?php
              if (isset($page)) {
                  $this->load->view($page);
              }
              ?>
            </div>
          </section>  
          
        </div>
      </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
    <script src="assets/js/main.js"></script>
  </body>

</html>
