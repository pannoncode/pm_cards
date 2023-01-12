<?php

/**
 * Description of Centerline
 *
 * @author aaazr
 */
class Centerline extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('grocery_CRUD');
    }

    public function index() {
        if ($this->session->has_userdata('user')) {
            $output = [];
            $crud = new grocery_CRUD();
            //$crud->set_theme('datatables');
            $crud->set_table('centerline_db');
            $crud->set_subject('Centerline');
            $crud->set_relation('machine_code_id', 'machine_code_db', 'machine_code');
            $crud->set_relation('machine_part_id', 'cl_machine_part', 'machine_part');
            $crud->set_relation('running_standing_id', 'cl_running_standing', 'running_standing');
            $crud->set_relation('qa_critic_id', 'cl_qa_critic', 'qa_critic');
            $crud->set_relation('unit_of_measure_id', 'cl_unit_of_measure', 'unit_measure');
            $crud->set_relation('inspect_id', 'cl_inspection_time', 'inspection_time');
            $crud->required_fields('machine_code_id', 'machine_part_id', 'centerline_name', 'running_standing_id', 'qa_critic_id', 'target', 'unit_of_measure_id', 'inspect_id');
            $crud->columns('machine_code_id', 'machine_part_id', 'centerline_name', 'running_standing_id', 'qa_critic_id', 'target_min', 'target', 'target_max', 'unit_of_measure_id', 'opl_number', 'inspect_id');
            $crud->display_as('machine_code_id','Gépszám')
                 ->display_as('machine_part_id','Géprész')
                 ->display_as('centerline_name','Centerline név')
                 ->display_as('running_standing_id','Futó vagy Álló gépnél?')
                 ->display_as('qa_critic_id','QA kritikus CL?')
                 ->display_as('target_min','CÉL minimum')
                 ->display_as('target','CÉL')
                 ->display_as('target_max','CÉL maximum')
                 ->display_as('unit_of_measure_id','Mértékegység')
                 ->display_as('opl_number','OPL szám')
                 ->display_as('inspect_id','Ellenőrzés ideje');
            $crud->unset_clone();
            $output = $crud->render();
            
        $output = (Array) $output;
        $output['page'] = 'pmadmin';
        $output['username'] = $this->session->get_userdata('user')['user']['name'];
        $this->load->view('home', $output);
        } else {
            redirect('Home/index');
        }
    }
    
    
    public function table() {
        $this->load->library('table');
        $this->load->model('cline');
        $cltable = $this->table->generate($this->cline->getAllCenterline());
        $cltable = (Array) $cltable;
        $this->load->view('centerlineresults', $cltable);
     }
}
