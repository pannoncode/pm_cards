<div class="dropdown">
    <?php foreach ($machine_code as $key => $machinecode) { ?>
      <button class="btn btn-secondary dropdown-toggle ml-3 mb-2" type="button" id="machinecodes" data-bs-toggle="dropdown" value="<?php echo $machinecode['id'] ?>" aria-expanded="false"><?php echo $machinecode['machine_code'] ?></button>
  <?php } ?>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <?php foreach ($machine_code as $key => $machinecode) { ?>
    <li><?php print $machine_code  ?></li>
    <?php } ?>
  </ul>
</div>









