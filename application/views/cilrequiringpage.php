<div class="card col-md-8 mw-75">
  <div class="card-header">
    <h4 class="card-title"><u>CIL pont igénylő form</u></h4>
    <?php if (isset($_SESSION['error']) && $_SESSION['error'] == 0) { ?>
        <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['error_message']; ?></div>
        <?php
        unset($_SESSION['error']);
    }
    ?>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
        <form class="col-sm-12" action="index.php/Cilrequiring/form_validation" method="POST">

          <!-- Dátum -->

          <div class="form-group">
            <label for="date">Igénylés dátuma</label><br>
            <?php $date = date('Y-m-d') ?>
            <input type="text" id="date" name="date" value="<?php echo $date ?> " readonly>
          </div>

          <!-- Kitöltő neve -->

          <div class="form-group">
            <label for="session_name">Kitöltő neve</label><br>
            <input type="text" id="session_name" name="session_name" value="<?php echo $username ?>" readonly>
            <span class="text-danger"><?php echo form_error("username") ?></span>
          </div>

          <!-- Gépszám -->

          <div class="form-group">
            <label for="machine_code">Gépszám <small style="text-transform:lowercase"> (válassz a lehetőségek közül)</small></label>
            <select class="form-control" id="machine_code" name="machine_code">
                <?php foreach ($machine_code as $key => $machinecode) { ?>
                  <option value="<?php echo $machinecode['id'] ?>"><?php echo $machinecode['machine_code'] ?></option>
              <?php } ?>
            </select>
            <span class="text-danger"><?php echo form_error("machine_code") ?></span>
          </div>


          <!-- Géprész -->

          <div class="form-group">
            <label for="machine_part">Géprész <small style="text-transform:lowercase"> (válassz a lehetőségek közül)</small></label>
            <select class="form-control" id="machine_part" name="machine_part">
                <?php foreach ($machine_part as $key => $machinepart) { ?>
              <option value="<?php echo $machinepart['id'] ?>"><?php echo $machinepart['machine_part'] ?></option>
              <?php } ?>
            </select>
            <span class="text-danger"><?php echo form_error("machine_part") ?></span>
          </div>

          <!-- Új CIL pont neve -->

          <div class="form-group">
            <label for="cil_name">Add meg az Új CIL pont nevét</label>
            <input type="text" class="form-control" id="cil_name" name="cil_name">
            <span class="text-danger"><?php echo form_error("reason_dev") ?></span>
          </div>

          <!-- Indoklás -->

          <div class="form-group">
            <label for="reason_dev">Írd le az új CIL pont okát és frekvenciáját</label>
            <textarea class="form-control" id="reason_dev" name="reason_dev" rows="3" style="resize: none"></textarea>
            <span class="text-danger"><?php echo form_error("reason_dev") ?></span>
          </div>

          <!-- Button -->

          <div class="form-group">
            <button class="btn btn-primary" type="submit" name="send">Küldés</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
