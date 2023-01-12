<?php

class Nameform extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ranks');
        $this->load->library('form_validation');
        $this->load->model('saveemp');
    }

    public function index() {
        $output = [];
        $output['page'] = 'namelist';
        $output['ranks'] = $this->ranks->getAllRanks();
        $output['username'] = $this->session->get_userdata('user')['user']['name'];
        $this->load->view('home', $output);
    }

    public function form_validation() {
        //echo '<pre>';
        //var_dump($_POST);
        //exit();
        
        $this->form_validation->set_rules("emp_name", "Dolgozó Neve", 'trim|required');
        $this->form_validation->set_rules("username", "Felhasználó név", 'trim|required');
        $this->form_validation->set_rules("card_number", "Kártyaszám", 'required|numeric');
        $this->form_validation->set_rules("rank", "Beosztás", 'required|numeric');
        $this->form_validation->set_rules("password", "Jelszó", 'trim|required');
        if($this->form_validation->run() !== FALSE) {
            $data['name']    = $this->input->post('emp_name');
            $data['username']    = $this->input->post('username');
            $data['card_number'] = $this->input->post('card_number');
            $data['rank']        = $this->input->post('rank');
            $password            = $this->input->post('password');
            $data['password']    = hash('sha512', $password);
            
            $this->saveemp->saveemployer($data);
            
            $_SESSION['error'] = 0;
            $_SESSION['error_message'] = 'A dolgozó rögzítése sikeres volt!';
            
            $this->index();
        }else {
            $this->index();
        }
    }
}
