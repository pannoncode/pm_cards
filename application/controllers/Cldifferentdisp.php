<?php

class Cldifferentdisp extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('machinecode');
        $this->load->model('pmcarddatas');
        $this->load->model('cldifferentmodel');
        $this->load->model('machineparts');
        $this->load->library('form_validation');
    }

    public function index() {
        $output = [];
        $output['machine_code'] = $this->machinecode->getAllMachineCode();
        $output['shift_code'] = $this->pmcarddatas->getShift();
        $output['name'] = $this->pmcarddatas->getNames();
        $output['machineparts'] = $this->machineparts->getAllMachineParts();
        $output['cl_result'] = $this->cldifferentmodel->dispensDatas();
        $output['measure'] = $this->cldifferentmodel->unitMeasure();
        $output['username'] = $this->session->get_userdata('user')['user']['name'];
        $output['page'] = 'cldifferent';
        $this->load->view('home', $output);
    }

    public function maker() {
        $output = [];
        $output['machine_code'] = $this->machinecode->getAllMachineCode();
        $output['shift_code'] = $this->pmcarddatas->getShift();
        $output['name'] = $this->pmcarddatas->getNames();
        $output['machineparts'] = $this->machineparts->getAllMachineParts();
        $output['cl_result'] = $this->cldifferentmodel->makerDatas();
        $output['measure'] = $this->cldifferentmodel->unitMeasure();
        $output['username'] = $this->session->get_userdata('user')['user']['name'];
        $output['page'] = 'cldifferent';
        $this->load->view('home', $output);
    }

    public function closer() {
        $output = [];
        $output['machine_code'] = $this->machinecode->getAllMachineCode();
        $output['shift_code'] = $this->pmcarddatas->getShift();
        $output['name'] = $this->pmcarddatas->getNames();
        $output['machineparts'] = $this->machineparts->getAllMachineParts();
        $output['cl_result'] = $this->cldifferentmodel->closerDatas();
        $output['measure'] = $this->cldifferentmodel->unitMeasure();
        $output['username'] = $this->session->get_userdata('user')['user']['name'];
        $output['page'] = 'cldifferent';
        $this->load->view('home', $output);
    }

    public function conv() {
        $output = [];
        $output['machine_code'] = $this->machinecode->getAllMachineCode();
        $output['shift_code'] = $this->pmcarddatas->getShift();
        $output['name'] = $this->pmcarddatas->getNames();
        $output['machineparts'] = $this->machineparts->getAllMachineParts();
        $output['cl_result'] = $this->cldifferentmodel->conveyorDatas();
        $output['measure'] = $this->cldifferentmodel->unitMeasure();
        $output['username'] = $this->session->get_userdata('user')['user']['name'];
        $output['page'] = 'cldifferent';
        $this->load->view('home', $output);
    }

    public function labeler() {
        $output = [];
        $output['machine_code'] = $this->machinecode->getAllMachineCode();
        $output['shift_code'] = $this->pmcarddatas->getShift();
        $output['name'] = $this->pmcarddatas->getNames();
        $output['machineparts'] = $this->machineparts->getAllMachineParts();
        $output['cl_result'] = $this->cldifferentmodel->labelerDatas();
        $output['measure'] = $this->cldifferentmodel->unitMeasure();
        $output['username'] = $this->session->get_userdata('user')['user']['name'];
        $output['page'] = 'cldifferent';
        $this->load->view('home', $output);
    }

    public function poly() {
        $output = [];
        $output['machine_code'] = $this->machinecode->getAllMachineCode();
        $output['shift_code'] = $this->pmcarddatas->getShift();
        $output['name'] = $this->pmcarddatas->getNames();
        $output['machineparts'] = $this->machineparts->getAllMachineParts();
        $output['cl_result'] = $this->cldifferentmodel->polypackDatas();
        $output['measure'] = $this->cldifferentmodel->unitMeasure();
        $output['username'] = $this->session->get_userdata('user')['user']['name'];
        $output['page'] = 'cldifferent';
        $this->load->view('home', $output);
    }

    public function pester() {
        $output = [];
        $output['machine_code'] = $this->machinecode->getAllMachineCode();
        $output['shift_code'] = $this->pmcarddatas->getShift();
        $output['name'] = $this->pmcarddatas->getNames();
        $output['machineparts'] = $this->machineparts->getAllMachineParts();
        $output['cl_result'] = $this->cldifferentmodel->pesterDatas();
        $output['measure'] = $this->cldifferentmodel->unitMeasure();
        $output['username'] = $this->session->get_userdata('user')['user']['name'];
        $output['page'] = 'cldifferent';
        $this->load->view('home', $output);
    }

    public function polyDouble() {
        $output = [];
        $output['machine_code'] = $this->machinecode->getAllMachineCode();
        $output['shift_code'] = $this->pmcarddatas->getShift();
        $output['name'] = $this->pmcarddatas->getNames();
        $output['machineparts'] = $this->machineparts->getAllMachineParts();
        $output['cl_result'] = $this->cldifferentmodel->polypackDoubleDatas();
        $output['measure'] = $this->cldifferentmodel->unitMeasure();
        $output['username'] = $this->session->get_userdata('user')['user']['name'];
        $output['page'] = 'cldifferent';
        $this->load->view('home', $output);
    }

    public function volpak() {
        $output = [];
        $output['machine_code'] = $this->machinecode->getAllMachineCode();
        $output['shift_code'] = $this->pmcarddatas->getShift();
        $output['name'] = $this->pmcarddatas->getNames();
        $output['machineparts'] = $this->machineparts->getAllMachineParts();
        $output['cl_result'] = $this->cldifferentmodel->volpakDatas();
        $output['measure'] = $this->cldifferentmodel->unitMeasure();
        $output['username'] = $this->session->get_userdata('user')['user']['name'];
        $output['page'] = 'cldifferent';
        $this->load->view('home', $output);
    }

    public function flexlink() {
        $output = [];
        $output['machine_code'] = $this->machinecode->getAllMachineCode();
        $output['shift_code'] = $this->pmcarddatas->getShift();
        $output['name'] = $this->pmcarddatas->getNames();
        $output['machineparts'] = $this->machineparts->getAllMachineParts();
        $output['cl_result'] = $this->cldifferentmodel->flexlinkDatas();
        $output['measure'] = $this->cldifferentmodel->unitMeasure();
        $output['username'] = $this->session->get_userdata('user')['user']['name'];
        $output['page'] = 'cldifferent';
        $this->load->view('home', $output);
    }

    public function form_validation_cl() {
        print '<pre>';
        var_dump($_POST);
        exit();
        $this->form_validation->set_rules("date", "Dátum", 'required');
        $this->form_validation->set_rules("session_name", "Kitöltő neve", 'required');
        $this->form_validation->set_rules("shift_code", "Műszak", 'required');
        $this->form_validation->set_rules("sku_code", "SKU kód", 'required');
        $this->form_validation->set_rules("machine_code", "Gépszám", 'required');
        $this->form_validation->set_rules("cl_param", "CL paraméter", 'required');
        $this->form_validation->set_rules("measure", "Mértékegység", 'required');
        $this->form_validation->set_rules("deviation_value", "Eltérés értéke", 'required');
        $this->form_validation->set_rules("reason_dev", "Eltérés oka", 'required|min_length[15]|max_length[1000]');
        $this->form_validation->set_rules("ask_restore", "Vissza lett állítva", 'required');
        $this->form_validation->set_rules("restor", "Nem megfelelő Centerline gyökéroka", 'min_length[15]|max_length[1000]');

        if ($this->form_validation->run() !== FALSE) {
            $data['date'] = $this->input->post('date');
            $data['sess_name'] = $this->input->post('session_name');
            $data['shift_code'] = $this->input->post('shift_code');
            $data['sku'] = $this->input->post('sku_code');
            $data['machine_code'] = $this->input->post('machine_code');
            $data['cl_param'] = $this->input->post('cl_param');
            $data['measure'] = $this->input->post('measure');
            $data['deviation_value'] = $this->input->post('deviation_value');
            $data['reason_dev'] = $this->input->post('reason_dev');
            $data['ask_restore'] = $this->input->post('ask_restore');
            $data['restor'] = $this->input->post('restor');

            $this->cldifferentmodel->saverecords($data);
            $_SESSION['error'] = 0;
            $_SESSION['error_message'] = 'A Centerline eltérő rögzítése sikeres volt!';
            $this->index();
        } else {

            $this->index();
        }
    }

}
