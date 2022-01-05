<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of PmCardEdit
 *
 * @author aaazr
 */
class PmCardEdit extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->library('grocery_CRUD');
    }
    
    public function pmCardEdit() {
        $output = [];
        $crud   = new grocery_CRUD();

        //$crud->set_theme('datatables');
        $crud->set_table('pmcardmain_db');
        //$crud->set_subject('ÚJ PM kártya');
        $crud->set_relation('bd_pf', 'pmcardtype_db', 'bd_pf');
        $crud->set_relation('mech_elec', 'mechanic_electric_db', 'mech_elec');
        $crud->set_relation('machine_code', 'machine_code_db', 'machine_code');
        $crud->set_relation('shift', 'shift_db', 'shiftcode');
        $crud->set_relation('machine_part', 'machine_part_db', 'machine_part_name');
        $crud->set_relation('parts', 'parts_db', 'parts_name');
        $crud->set_relation('made_repair', 'namelist_db', 'name');
        $crud->required_fields('bd_pf', 'mech_elec', 'machine_code', 'date', 'shift', 'operating_hour', 'machine_part', 'parts', 'error_description', 'repair_description', 'made_repair', 'stop_start', 'repair_start', 'repair_end');
        $crud->columns('pm_id', 'session_name', 'bd_pf', 'mech_elec', 'machine_code', 'date', 'shift', 'operating_hour', 'sku_code', 'machine_part', 'parts', 'pictures', 'error_description', 'repair_description', 'made_repair', 'stop_start', 'repair_start', 'repair_end');
        $crud->set_field_upload('pictures','assets/uploads/files');
        $crud->display_as('bd_pf', 'Géptörés/Folyamathiba')
             ->display_as('session_name', 'Kitöltő neve')
             ->display_as('mech_elec', 'Mechanikus/Elektromos')
             ->display_as('machine_code', 'Gépszám')
             ->display_as('date', 'Dátum')
             ->display_as('shift', 'Műszak')
             ->display_as('operating_hour', 'Üzemóra')
             ->display_as('sku_code', 'SKU kód')
             ->display_as('machine_part', 'Géprész')
             ->display_as('parts', 'Alkatrész')
             ->display_as('pictures', 'Kép')
             ->display_as('error_description', 'Hiba leírása')
             ->display_as('repair_description', 'Javítás leírása')
             ->display_as('made_repair', 'Javítást végezte')
             ->display_as('stop_start', 'Állásidő kezdete')
             ->display_as('repair_start', 'Javítás kezdete')
             ->display_as('repair_end', 'Javítás vége');
        $crud->unset_clone();
        $output             = $crud->render();
        $output             = (Array) $output;
        $output['page']     = 'pmadmin';
        $output['username'] = $this->session->get_userdata('user')['user']['name'];
        $this->load->view('home', $output);
    }
}
