<?php

class Cldifftable extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('cldifftablemodel');
        $this->load->library('grocery_CRUD');
    }

    public function index() {
        if ($this->session->has_userdata('user')) {
            $output = [];
            $crud = new grocery_CRUD();
            //$crud->set_theme('datatables');
            $crud->set_table('cl_differ');
            $crud->set_subject('Centerline');
            $crud->columns('date', 'sess_name', 'shift_code', 'sku', 'machine_code', 'cl_param',  'deviation_value', 'measure','reason_dev', 'ask_restore', 'restor', 'restore_now');
            $crud->display_as('date','Dátum')
                 ->display_as('sess_name','Kitöltő neve')
                 ->display_as('shift_code','Műszak')
                 ->display_as('sku','Cikkszám')
                 ->display_as('machine_code','Gépszám')
                 ->display_as('cl_param','Centerline paraméter')
                 ->display_as('deviation_value','Új CL érték')
                 ->display_as('measure','Mértékegység')
                 ->display_as('unit_of_measure_id','Mértékegység')
                 ->display_as('reason_dev','Eltérés oka')
                 ->display_as('ask_restore','Vissza lett állítva')
                 ->display_as('restor','Nem megfelelőség gyökéroka')
                 ->display_as('restore_now','Vissza lett állítva vagy módosítva lett?');
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

    public function machine3210() {
        $output = [];
        $output ['data'] = $this->cldifftablemodel->machine3210();
        //print '<pre>';
        //var_dump($output);
        //exit();
        $output['username'] = $this->session->get_userdata('user')['user']['name'];
        $output['page'] = 'cldiff';
        $this->load->view('home', $output);
    }

    public function machine3220() {
        $output = [];
        $output ['data'] = $this->cldifftablemodel->machine3220();
        //print '<pre>';
        //var_dump($output);
        //exit();
        $output['username'] = $this->session->get_userdata('user')['user']['name'];
        $output['page'] = 'cldiff';
        $this->load->view('home', $output);
    }

    public function machine3230() {
        $output = [];
        $output ['data'] = $this->cldifftablemodel->machine3230();
        //print '<pre>';
        //var_dump($output);
        //exit();
        $output['username'] = $this->session->get_userdata('user')['user']['name'];
        $output['page'] = 'cldiff';
        $this->load->view('home', $output);
    }

    public function machine3320() {
        $output = [];
        $output ['data'] = $this->cldifftablemodel->machine3320();
        //print '<pre>';
        //var_dump($output);
        //exit();
        $output['username'] = $this->session->get_userdata('user')['user']['name'];
        $output['page'] = 'cldiff';
        $this->load->view('home', $output);
    }
    
    public function edit(){
        //var_dump($_POST);
        //exit();
        $id = $_POST["id"];
        $restore = $_POST["restore"];
        $this->db->set('id', $id);
        $this->db->set('restore_now', $restore);
        $this->db->where('id', $id);
        $this->db->update('cl_differ'); 
        
        $output = [];
        $output['username'] = $this->session->get_userdata('user')['user']['name'];
        $output['page'] = 'cldiff';
        $this->load->view('home', $output);
        
     
    }

}
