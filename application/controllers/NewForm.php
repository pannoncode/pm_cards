<?php

class NewForm extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('pmcarddatas');
        $this->load->model('machinecode');
        $this->load->library('form_validation');
        $this->load->model('idgenerator');
        $this->load->model('savenewform');
    }

    public function index() {
        $output = [];
        $output['page']         = 'newformpmcard';
        $output['bd_pf']        = $this->pmcarddatas->getBdPf();
        $output['mech_elec']    = $this->pmcarddatas->getPmMechElec();
        $output['machine_code'] = $this->machinecode->getAllMachineCode();
        $output['shift_code']   = $this->pmcarddatas->getShift();
        $output['machine_part'] = $this->pmcarddatas->getMachinePart();
        $output['parts']        = $this->pmcarddatas->getParts();
        $output['name']         = $this->pmcarddatas->getNames();
        $output['id_gen']       = $this->idgenerator->idGenerator();
        $output['username']     = $this->session->get_userdata('user')['user']['name'];
        $this->load->view('home', $output);
    }

    public function form_validation() {
        $this->form_validation->set_rules("bd_pf", "GéptörésésFolyamathiba", 'required');
        $this->form_validation->set_rules("mech_elec", "Mechanikus/Elektromos", 'required');
        $this->form_validation->set_rules("machine_code", "Gépszám", 'required');
        $this->form_validation->set_rules("date", "Dátum", 'required');
        $this->form_validation->set_rules("shift_code", "Műszak", 'required');
        $this->form_validation->set_rules("operating_hour", "Üzemóra", 'required');
        $this->form_validation->set_rules("sku_code", "SKU kód", 'required');
        $this->form_validation->set_rules("machine_part", "Géprész", 'required');
        $this->form_validation->set_rules("parts", "Alkatrész neve", 'required');
        $this->form_validation->set_rules("error_description", "Hiba leírása", 'required|min_length[15]|max_length[1000]');
        $this->form_validation->set_rules("repair_description", "Javítás leírása", 'required|min_length[15]|max_length[1000]');
        $this->form_validation->set_rules("name", "Javítást végezte", 'required');
        $this->form_validation->set_rules("stop_start", "Állásidő kezdete", 'required');
        $this->form_validation->set_rules("repair_start", "Javítás kezdete", 'required');
        $this->form_validation->set_rules("repair_end", "Javítás vége", 'required');

        if ($this->form_validation->run()!== FALSE) {
            $data['pm_id']              = $this->input->post('id_gen');
            $data['session_name']       = $this->input->post('session_name');
            $data['bd_pf']              = $this->input->post('bd_pf');
            $data['mech_elec']          = $this->input->post('mech_elec');
            $data['machine_code']       = $this->input->post('machine_code');
            $data['date']               = $this->input->post('date');
            $data['shift']              = $this->input->post('shift_code');
            $data['operating_hour']     = $this->input->post('operating_hour');
            $data['sku_code']           = $this->input->post('sku_code');
            $data['machine_part']       = $this->input->post('machine_part');
            $data['parts']              = $this->input->post('parts');
            $data['error_description']  = $this->input->post('error_description');
            $data['repair_description'] = $this->input->post('repair_description');
            $data['made_repair']        = $this->input->post('name');
            $data['stop_start']         = $this->input->post('stop_start');
            $data['repair_start']       = $this->input->post('repair_start');
            $data['repair_end']         = $this->input->post('repair_end');
            
            $this->savenewform->saverecords($data);
            $_SESSION['error'] = 0;
            $_SESSION['error_message'] = 'A PM kártya rögzítése sikeres volt!';
            $this->index();
        } else {
            
            $this->index();
        }
    }
}
