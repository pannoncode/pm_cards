<?php

class Cilrequiring extends CI_Controller {

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
        $output['page'] = 'cilrequiringpage';
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
          exit();
          // */
        $this->form_validation->set_rules("machine_part", "Géprész", 'required');
        $this->form_validation->set_rules("cil_name", "Új CIL pont név", 'required|min_length[3]|max_length[1000]');

        if ($this->form_validation->run() !== FALSE) {
            $data['date'] = $this->input->post('date');
            $data['session_name'] = $this->input->post('session_name');
            $data['machine_code'] = $this->input->post('machine_code');
            $data['machine_part'] = $this->input->post('machine_part');
            $data['cil_name'] = $this->input->post('cil_name');
            $data['reason_dev'] = $this->input->post('reason_dev');

            $this->clrequiringmodel->saveCilForm($data);
            $_SESSION['error'] = 0;
            $_SESSION['error_message'] = 'A CIL pont igénylő rögzítése sikeres volt!';
            $this->index();
        } else {
            $_SESSION['error'] = 1;
            $_SESSION['error_message'] = 'A CIL pont igénylő rögzítése nem sikerült!';
            $this->index();
        }
    }

    public function tableCil() {
        if ($this->session->has_userdata('user')) {
            $output = [];
            $crud = new grocery_CRUD();
            //$crud->set_theme('datatables');
            $crud->set_table('cil_requiring');
            $crud->set_subject('CIL pont igénylések');
            $crud->set_relation('machine_code', 'machine_code_db', 'machine_code');
            $crud->set_relation('machine_part', 'cl_machine_part', 'machine_part');
            $crud->columns('date', 'session_name', 'machine_code', 'machine_part', 'cil_name', 'reason_dev', 'comments');
            $crud->display_as('date', 'Dátum')
                    ->display_as('session_name', 'Beküldő neve')
                    ->display_as('machine_code', 'Gépszám')
                    ->display_as('machine_part', 'Géprész')
                    ->display_as('cil_name', 'CIL pont neve')
                    ->display_as('reason_dev', 'Indoklás')
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
