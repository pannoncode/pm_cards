<div class="card col-md-8 mw-75">
  <div class="card-header">
    <h4 class="card-title"><u>Centerline eltérési riport</u></h4>
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
        <form class="col-sm-12" action="index.php/Cldifferentdisp/form_validation_cl" method="POST">

          <!-- Dátum -->

          <div class="form-group">
            <label for="date">Kitöltés dátuma</label><br>
            <?php $date = date('Y-m-d') ?>
            <input type="text" id="date" name="date" value="<?php echo $date ?> " readonly>
          </div>

          <!-- Kitöltő neve -->

          <div class="form-group">
            <label for="session_name">Kitöltő neve</label><br>
            <input type="text" id="session_name" name="session_name" value="<?php echo $username ?>" readonly>
            <span class="text-danger"><?php echo form_error("username") ?></span>
          </div>

          <!-- Műszak -->

          <div class="form-group">
            <label for="shift_code">Műszak <small style="text-transform:lowercase"> (válassz a lehetőségek közül)</small></label>
            <select class="form-control" id="shift_code" name="shift_code">
                <?php foreach ($shift_code as $key => $shiftcode) { ?>
                  <option value="<?php echo $shiftcode['shiftcode'] ?>"><?php echo $shiftcode['shiftcode'] ?></option>
              <?php } ?>
            </select>
            <span class="text-danger"><?php echo form_error("shift_code") ?></span>
          </div>

          <!-- SKU kód -->

          <div class="form-group">
            <label for="sku_code">SKU kód</label>
            <input type="number" class="form-control" id="sku_code" name="sku_code">
            <span class="text-danger"><?php echo form_error("sku_code") ?></span>
          </div>

          <!-- Gépszám -->

          <div class="form-group">
            <label for="machine_code">Gépszám <small style="text-transform:lowercase"> (válassz a lehetőségek közül)</small></label>
            <select class="form-control" id="machine_code" name="machine_code">
                <?php foreach ($machine_code as $key => $machinecode) { ?>
                  <option value="<?php echo $machinecode['machine_code'] ?>"><?php echo $machinecode['machine_code'] ?></option>
              <?php } ?>
            </select>
            <span class="text-danger"><?php echo form_error("machine_code") ?></span>
          </div>

          <!-- Géprész -->

          <div class="form-group">
            <label for="machine_part"><b><u>Géprész</u></b></label>
            <select class="form-control" id="cl_param" name="cl_param">
                <?php foreach ($machineparts as $key => $machinepart) { ?>
              <option value="<?php echo $machinepart['$machineparts'] ?>"><?php echo $machinepart['$machineparts'] ?></option>
              <?php } ?>
            </select>
            <span class="text-danger"><?php echo form_error("cl_param") ?></span>
          </div>

          <!-- CL paraméter kiválasztása -->

          <div class="form-group">
            <label for="cl_param">Melyik <b><u>Centerline paraméter</u></b> lett elállítva? <small style="text-transform:lowercase"> (válassz a lehetőségek közül)</small></label>
            <select class="form-control" id="cl_param" name="cl_param">
                <?php foreach ($cl_result as $key => $clresults) { ?>
                  <option value="<?php echo $clresults['centerline_name'] ?>"><?php echo $clresults['centerline_name'] ?></option>
              <?php } ?>
            </select>
            <span class="text-danger"><?php echo form_error("cl_param") ?></span>
          </div>

          <!-- CL eltérés értéke -->

          <div class="form-group">
            <label for="deviation_value">Add meg az <b><u>új</u></b> értéket</label>
            <input type="number" step="0.001" class="form-control" id="deviation_value" name="deviation_value">
            <span class="text-danger"><?php echo form_error("deviation_value") ?></span>
          </div>

          <!-- Mértékegység -->

          <div class="form-group">
            <label for="measure">Mértékegység <small style="text-transform:lowercase"> (válassz a lehetőségek közül)</small></label>
            <select class="form-control" id="measure" name="measure">
                <?php foreach ($measure as $key => $unit_measure) { ?>
                  <option value="<?php print $unit_measure['unit_measure'] ?>"><?php print $unit_measure['unit_measure'] ?></option>
              <?php } ?>
            </select>
            <span class="text-danger"><?php echo form_error("cl_param") ?></span>
          </div>

          <!-- Eltérés oka -->

          <div class="form-group">
            <label for="reason_dev">Írd le az eltérés okát</label>
            <textarea class="form-control" id="reason_dev" name="reason_dev" rows="3" style="resize: none"></textarea>
            <span class="text-danger"><?php echo form_error("reason_dev") ?></span>
          </div>


          <!-- Vissza lett állítva? -->

          <div class="form-group">
            <label for="ask_restore">Műszak vége elött vissza lett állítva? <small style="text-transform:lowercase"> (válassz a lehetőségek közül)</small></label>
            <select class="form-control" id="ask_restore" name="ask_restore">
              <option value="igen">Igen</option>
              <option value="nem">Nem</option>
            </select>
            <span class="text-danger"><?php echo form_error("ask_restore") ?></span>
          </div>

          <!-- Visszaállítás oka -->

          <div class="form-group">
            <label for="restor">Ha <b>igen</b>, mi volt a nem megfelelő centerline gyökéroka?</label>
            <textarea class="form-control" id="restor" name="restor" rows="3" style="resize: none"></textarea>
            <span class="text-danger"><?php echo form_error("restor") ?></span>
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
