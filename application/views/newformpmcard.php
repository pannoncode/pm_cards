<div class="card col-md-8 mw-75">
  <div class="card-header">
    <h4 class="card-title">PM kártya</h4>
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
        <form class="col-sm-12" action="index.php/NewForm/form_validation" method="POST" enctype="multipart/form-data">

          <!-- ID generátor -->

          <div class="form-group">
            <label for="sku_code">PM kártya ID</label><br>
            <?php foreach ($id_gen as $idgen) { ?>
                <input type="text" id="id_gen" name="id_gen" value="<?php echo $idgen ?>" placeholder="<?php echo $idgen ?>" readonly>
            <?php } ?>
            <span class="text-danger"><?php echo form_error("id_gen") ?></span>
          </div>

          <!-- PM kártya kitöltő neve -->

          <div class="form-group">
            <label for="session_name">PM kártya kitöltő neve</label><br>
            <input type="text" id="session_name" name="session_name" value="<?php echo $username ?>" readonly>
            <span class="text-danger"><?php echo form_error("username") ?></span>
          </div>

          <!-- Géptörés vagy Folyamathiba -->

          <div class="form-group">
            <label for="bd_pf">Géptörés vagy Folyamathiba <small style="text-transform:lowercase"> (válassz a lehetőségek közül)</small></label>
            <select class="form-control" id="bd_pf" name="bd_pf">
                <?php foreach ($bd_pf as $key => $bdpf) { ?>
                  <option value="<?php echo $bdpf['id'] ?>"><?php echo $bdpf['bd_pf'] ?></option>
              <?php } ?>
            </select>
            <span class="text-danger"><?php echo form_error("bd_pf") ?></span>
          </div>

          <!-- Mechanikus vagy Elektromos -->

          <div class="form-group">
            <label for="mech_elec">Mechanikus vagy Elektromos <small style="text-transform:lowercase"> (válassz a lehetőségek közül)</small></label>
            <select class="form-control" id="mech_elec" name="mech_elec">
                <?php foreach ($mech_elec as $key => $mechelec) { ?>
                  <option value="<?php echo $mechelec['id'] ?>"><?php echo $mechelec['mech_elec'] ?></option>
              <?php } ?>
            </select>
            <span class="text-danger"><?php echo form_error("mech_elec") ?></span>
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

          <!-- Kitöltés dátuma -->

          <div class="form-group">
            <label for="date">Kitöltés dátuma</label><br>
            <?php $date = date('y-m-d') ?>
            <input type="text" id="date" name="date" value="<?php echo $date ?>" readonly>

            <span class="text-danger"><?php echo form_error("date") ?></span>
          </div>

          <!-- Műszak -->

          <div class="form-group">
            <label for="shift_code">Műszak</label>
            <select class="form-control" id="shift_code" name="shift_code">
                <?php foreach ($shift_code as $key => $shiftcode) { ?>
                  <option value="<?php echo $shiftcode['id'] ?>"><?php echo $shiftcode['shiftcode'] ?></option>
              <?php } ?>
            </select>
            <span class="text-danger"><?php echo form_error("shift_code") ?></span>
          </div>

          <!-- Üzemóra -->

          <div class="form-group">
            <label for="operating_hour">Üzemóra</label>
            <input type="number" class="form-control" id="operating_hour" name="operating_hour">
            <span class="text-danger"><?php echo form_error("operating_hour") ?></span>
          </div>

          <!-- SKU kód -->

          <div class="form-group">
            <label for="sku_code">SKU kód</label>
            <input type="number" class="form-control" id="sku_code" name="sku_code">
            <span class="text-danger"><?php echo form_error("sku_code") ?></span>
          </div>

          <!-- Géprész -->

          <div class="form-group">
            <label for="machine_part">Géprész <small style="text-transform:lowercase"> (válassz a lehetőségek közül)</small></label>
            <select class="form-control" id="machine_part" name="machine_part">
                <?php foreach ($machine_part as $key => $machinepart) { ?>
                  <option value="<?php echo $machinepart['id'] ?>"><?php echo $machinepart['machine_part_name'] ?></option>
              <?php } ?>
            </select>
            <span class="text-danger"><?php echo form_error("machine_part") ?></span>
          </div>

          <!-- Alkatrész neve -->

          <div class="form-group">
            <label for="parts">Alkatrész neve <small style="text-transform:lowercase"> (válassz a lehetőségek közül)</small></label>
            <select class="form-control" id="parts" name="parts">
                <?php foreach ($parts as $key => $part) { ?>
                  <option value="<?php echo $part['id'] ?>"><?php echo $part['parts_name'] ?></option>
              <?php } ?>
            </select>
            <span class="text-danger"><?php echo form_error("parts") ?></span>
          </div>

          <!-- Kép feltöltése

  <div class="form-group">
    <label for="pictures">Kép feltöltése</label><br>
    <input type="file" class="form-control-file" id="pictures" name="pictures">
  </div>  
          -->

          <!-- Hiba leírása -->

          <div class="form-group">
            <label for="error_description">Hiba leírása</label>
            <textarea class="form-control" id="error_description" name="error_description" rows="3" style="resize: none"></textarea>
            <span class="text-danger"><?php echo form_error("error_description") ?></span>
          </div>

          <!-- Javítás leírása -->

          <div class="form-group">
            <label for="repair_description">Javítás leírása</label>
            <textarea class="form-control" id="repair_description" name="repair_description" rows="3" style="resize: none"></textarea>
            <span class="text-danger"><?php echo form_error("repair_description") ?></span>
          </div>

          <!-- Javítást végezte -->

          <div class="form-group">
            <label for="name">Javítást végezte <small style="text-transform:lowercase"> (válassz a lehetőségek közül)</small></label>
            <select class="form-control" id="name" name="name">
                <?php foreach ($name as $key => $names) { ?>
                  <option value="<?php echo $names['id'] ?>"><?php echo $names['name'] ?></option>
              <?php } ?>
            </select>
            <span class="text-danger"><?php echo form_error("name") ?></span>
          </div>

          <!-- Állásidő kezdete -->

          <div class="form-group">
            <label for="stop_start">Állásidő kezdete</label><br>
            <input type="time" id="stop_start" name="stop_start">
            <span class="text-danger"><?php echo form_error("stop_start") ?></span>
          </div>

          <!-- Javítás kezdete -->

          <div class="form-group">
            <label for="repair_start">Javítás kezdete</label><br>
            <input type="time" id="repair_start" name="repair_start">
            <span class="text-danger"><?php echo form_error("repair_start") ?></span>
          </div>

          <!-- Javítás vége -->

          <div class="form-group">
            <label for="repair_end">Javítás vége</label><br>
            <input type="time" id="repair_end" name="repair_end">
            <span class="text-danger"><?php echo form_error("repair_end") ?></span>
          </div>

          <!-- Küldés -->

          <div class="form-group">
            <button class="btn btn-primary" type="submit" name="send">Küldés</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
