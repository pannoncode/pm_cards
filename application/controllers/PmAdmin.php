<?php

class PmAdmin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('grocery_CRUD');
    }

    //dolgozók neve
    public function namelist() {
        $output = [];
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('namelist_db');
        //$crud->set_subject('Nevek');
        $crud->set_relation('rank', 'ranks_db', 'rank_name');
        $crud->columns('name', 'username', 'card_number', 'rank');

        $crud->field_type('password', 'hidden');

        $crud->display_as('name', 'Név')
                ->display_as('username', 'Felhasználó név')
                ->display_as('card_number', 'Kártyaszám')
                ->display_as('rank', 'Beosztás');

        $crud->unset_clone();
        $crud->unset_edit();
        $crud->unset_add();

        $output = $crud->render();

        $output = (Array) $output;
        $output['page'] = 'pmadmin';
        $output['username'] = $this->session->get_userdata('user')['user']['name'];

        $this->load->view('home', $output);
    }


    //gépszám
    public function machinecode() {
        $output = [];
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('machine_code_db');
        $crud->set_subject('Gépszám');
        $crud->required_fields('machine_code');
        $crud->columns('machine_code');

        $crud->display_as('machine_code', 'Gépszám');

        $crud->unset_clone();

        $output = $crud->render();

        $output = (Array) $output;
        $output['page'] = 'pmadmin';
        $output['username'] = $this->session->get_userdata('user')['user']['name'];
        $this->load->view('home', $output);
    }

    //géprész
    public function machineparts() {
        $output = [];
        $crud = new grocery_CRUD();
        $crud->set_theme('datatables');
        $crud->set_table('machine_part_db');
        $crud->set_subject('Géprész');
        $crud->required_fields('machine_part_name');
        $crud->columns('machine_part_name');

        $crud->display_as('machine_part_name', 'Géprész');

        $crud->unset_clone();

        $output = $crud->render();

        $output = (Array) $output;
        $output['page'] = 'pmadmin';
        $output['username'] = $this->session->get_userdata('user')['user']['name'];
        $this->load->view('home', $output);
    }

    //alkatrész lista
    public function parts() {
        $output = [];
        $crud = new grocery_CRUD();
        $crud->set_theme('datatables');
        $crud->set_table('parts_db');
        $crud->set_subject('Alkatrész');
        $crud->required_fields('parts_name', 'article_number', 'mpn');
        $crud->columns('parts_name', 'article_number', 'mpn');

        $crud->display_as('parts_name', 'Alkatrész neve')
                ->display_as('article_number', 'Cikkszám')
                ->display_as('mpn', 'MPN szám');

        $crud->unset_clone();

        $output = $crud->render();

        $output = (Array) $output;
        $output['page'] = 'pmadmin';
        $output['username'] = $this->session->get_userdata('user')['user']['name'];
        $this->load->view('home', $output);
    }

}
