<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bejelentkezés</title>
    <base href="<?php print(base_url()); ?>" >
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/app.css">
  </head>

  <body>
    <div id="auth">

      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
              <div class="card-body">
                <div class="text-center mb-5">
                  <!--<img src="assets/images/favicon.svg" height="48" class='mb-4'>--> 
                  <h3>Bejelentkezés</h3>
                </div>
                <form action="index.php/Home/login" method="POST">
                  <div class="mb-3">
                    <label for="username" class="form-label">Felhasználó név</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo set_value('username'); ?>">

                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Jelszó</label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                  <?php echo validation_errors(); ?>
                  <button type="submit" class="btn btn-primary">Bejelentkezés</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script src="assets/js/main.js"></script>
  </body>

</html>
