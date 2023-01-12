<?php

class Clrequiring extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('clrequiringmodel');
        $this->load->model('machinecode');
        $this->load->model('machineparts');
        $this->load->library('form_validation');
        $this->load->model('cldifferentmodel');
        $this->load->library('grocery_CRUD');
    }

    public function index() {
        $output = [];
        $output['page'] = 'clrequiringpage';
        $output['machine_code'] = $this->machinecode->getAllMachineCode();
        $output['machine_part'] = $this->machineparts->getAllMachineParts();
        $output['measure'] = $this->cldifferentmodel->unitMeasure();
        $output['username'] = $this->session->get_userdata('user')['user']['name'];
        $this->load->view('home', $output);
    }

    public function form_validation() {
        /*
          print '<pre>';
          var_dump($_POST);
          var_dump($_FILES);
          exit();
          // */
        $this->form_validation->set_rules("machine_part", "Géprész", 'required');
        $this->form_validation->set_rules("cl_name", "Új Centerline név", 'required|min_length[3]|max_length[1000]');
        $this->form_validation->set_rules("cl_value", "Centerline érték", 'required');

        if ($this->form_validation->run() !== FALSE) {
            $data['date'] = $this->input->post('date');
            $data['session_name'] = $this->input->post('session_name');
            $data['machine_number'] = $this->input->post('machine_code');
            $data['machine_part'] = $this->input->post('machine_part');
            $data['cl_name'] = $this->input->post('cl_name');
            $data['cl_value'] = $this->input->post('cl_value');
            $data['unit_of_measure'] = $this->input->post('measure');
            $data['reason'] = $this->input->post('reason_dev');
            $data['pic'] = $this->input->post('cl_pic');

            $this->clrequiringmodel->saveForm($data);
            $_SESSION['error'] = 0;
            $_SESSION['error_message'] = 'A Centerline igénylő rögzítése sikeres volt!';
            $this->index();
        } else {

            $this->index();
        }
    }

    public function tableCl() {
        if ($this->session->has_userdata('user')) {
            $output = [];
            $crud = new grocery_CRUD();
            //$crud->set_theme('datatables');
            $crud->set_table('cl_requiring');
            $crud->set_subject('Centerline igénylések');
            $crud->set_relation('machine_number', 'machine_code_db', 'machine_code');
            $crud->set_relation('machine_part', 'cl_machine_part', 'machine_part');
            $crud->set_relation('unit_of_measure', 'cl_unit_of_measure', 'unit_measure');
            $crud->columns('date', 'session_name', 'machine_number', 'machine_part', 'cl_name', 'cl_value', 'unit_of_measure', 'reason', 'comments');
            $crud->display_as('date', 'Dátum')
                    ->display_as('session_name', 'Beküldő neve')
                    ->display_as('machine_number', 'Gépszám')
                    ->display_as('machine_part', 'Géprész')
                    ->display_as('cl_name', 'Centerline neve')
                    ->display_as('cl_value', 'Centerline értéke')
                    ->display_as('deviation_value', 'Új CL érték')
                    ->display_as('unit_of_measure', 'Mértékegység')
                    ->display_as('reason', 'Indoklás')
                    ->display_as('comments', 'Megjegyzés');
            $crud->unset_clone();
            $crud->unset_add();
            $output = $crud->render();

            $output = (Array) $output;
            $output['page'] = 'pmadmin';
            $output['username'] = $this->session->get_userdata('user')['user']['name'];
            $this->load->view('home', $output);
        } else {
            redirect('Home/index');
        }
    }

}
