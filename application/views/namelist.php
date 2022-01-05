<?php if (isset($_SESSION['error']) && $_SESSION['error'] == 0) { ?>
    <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['error_message']; ?></div>
<?php
unset($_SESSION['error']);
}
?>


<form class="col-sm-4" method="POST" action="index.php/Nameform/form_validation">
  <div class="mb-3">
    <label for="emp_name" class="form-label">Dolgozó Neve</label>
    <input type="text" class="form-control" id="emp_name" name="emp_name">
    <span class="text-danger"><?php echo form_error("emp_name") ?></span>
  </div>
  <div class="mb-3">
    <label for="username" class="form-label">Felhasználó név</label>
    <input type="text" class="form-control" id="username" name="username">
    <span class="text-danger"><?php echo form_error("username") ?></span>
  </div>
  <div class="mb-3">
    <label for="card_number" class="form-label">Kártyaszám</label>
    <input type="number" class="form-control" id="card_number" name="card_number">
    <span class="text-danger"><?php echo form_error("card_number") ?></span>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Beosztás</label>
    <select class="form-control" id="rank" name="rank">
        <?php foreach ($ranks as $key => $rank) { ?>
          <option value="<?php echo $rank['id'] ?>"><?php echo $rank['rank_name'] ?></option>
      <?php } ?>
    </select>
    <span class="text-danger"><?php echo form_error("rank") ?></span>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Jelszó</label>
    <input type="password" class="form-control" id="password" name="password">
    <span class="text-danger"><?php echo form_error("password") ?></span>
  </div>
  <button type="submit" class="btn btn-primary">Mentés</button>
</form>


