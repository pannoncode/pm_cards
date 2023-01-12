<div class="card col-md-8">
  <div class="card-header">
    <h4 class="card-title">Felhasználó</h4>
  </div>

  <div class="card-body ">
    <div class="row d-flex justify-content-center">
      <div class="col-md-8">
        <form method="POST" action="index.php/Account/save">
          <div class="form-group">
            <label for="basicInput">Felhasználó név</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Írja be a nevét" value="<?php if (isset($userdetails['username'])) {print($userdetails['username']);} ?>">
          </div>


          <div class="form-group">
            <label for="basicInput">Jelszó 1</label>
            <input type="password" class="form-control" id="password1" name="password1" >
          </div>

          <div class="form-group">
            <label for="basicInput">Jelszó 2</label>
            <input type="password" class="form-control" id="password2" name="password2" >
          </div>
            <?php echo validation_errors(); ?>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" >Ment</button>
          </div>
        </form>

      </div>

    </div>
  </div>
</div>
