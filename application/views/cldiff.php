<section class="section w-100">
  <div class="card">
    <div class="card-header">
      <h2>Centerline eltérések</h2>
    </div>
    <div class="card-body">
      <table class="table table-dark table-hover" style="font-size: 12px" id="table1">
        <thead>
          <tr>
            <th>Dátum</th>
            <th>Kitöltő neve</th>
            <th>Műszak</th>
            <th>Géprész</th>
            <th>SKU kód</th>
            <th>Gépszám</th>
            <th>CL paraméter</th>
            <th>Új érték</th>
            <th>Mértékegység</th>
            <th>Eltérés oka</th>
            <th>Vissza lett állítva műszak közben?</th>
            <th>Nem megfelelőség oka?</th>
            <th>Vissza lett állítva vagy módosítva lett?</th>
          </tr>
        </thead>
        <tbody>

          <?php
          if (isset($data)) {
              foreach ($data as $key => $value) {
                  ?>
                  <tr>

                    <td><?php print $value['date'] ?></td>
                    <td><?php print $value['sess_name'] ?></td>
                    <td><?php print $value['shift_code'] ?></td>
                    <td><?php print $value['machine_part'] ?></td>
                    <td><?php print $value['sku'] ?></td>
                    <td><?php print $value['machine_code'] ?></td>
                    <td><?php print $value['cl_param'] ?></td>
                    <td><?php print $value['deviation_value'] ?></td>
                    <td><?php print $value['measure'] ?></td>
                    <td><?php print $value['reason_dev'] ?></td>
                    <td><?php print $value['ask_restore'] ?></td>
                    <td><?php print $value['restor'] ?></td>
                    <td>   
                      <form class="form-inline form-group" action="index.php/Cldifftable/edit" method="post"> 
                        <div>
                          <input class="form-control mr-2" type="text" name="restore" style="background: transparent; border-color: transparent; color: white" value="<?php echo $value['restore_now']; ?>" />
                          <input type="hidden" name="id" style="background: transparent" value="<?php echo $value["id"] ?>">
                          <input type="hidden" name="id" value="<?php print $value['machine_code'] ?>">
                          <button class="btn btn-warning mr-2 mt-4" type="submit">Módosítás</button>
                        </div>
                      </form>
                    </td>

                  </tr>
              <?php
              }
          }
          ?>

        </tbody>
      </table>
    </div>
  </div>

</section>
<script src="assets/js/feather-icons/feather.min.js"></script>
<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/app.js"></script>

<script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
<script src="assets/js/vendors.js"></script>

<script src="assets/js/main.js"></script>

