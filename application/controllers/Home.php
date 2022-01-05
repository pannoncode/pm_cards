<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model(array('user'));
    }

    public function index() {
        $output = [];
        if ($this->session->has_userdata('user')) {
            $output['username'] = $this->session->get_userdata('user')['user']['name'];
            $this->load->view('home', $output);
        } else {
            $this->load->view('login', $output);
        }
    }
    
    public function login() {
        $this->form_validation->set_rules('username', 'Felhasználó név', 'trim|required');
        $this->form_validation->set_rules('password', 'Jelszó', 'trim|required|callback_usercheck');
        if($this->form_validation->run() === FALSE){
            $this->load->view('login');
        }else {
            $output             = [];
            $output['username'] = $this->session->get_userdata('user')['user']['name'];
            //var_dump($output);
            $this->load->view('home', $output);
            
        }
        
        
    }
    
    public function logout() {
        $this->session->unset_userdata('user');
        redirect('Home/index');
    }
    
    public function usercheck() {
        $username  = $this->input->post('username');
        $password  = $this->input->post('password');
        $userArray = [];
        $userArray = $this->user->getUserDataByUsernameAndPassword($username, $password);
        if(count($userArray) === 0) {
            $this->form_validation->set_message('usercheck', 'Hibás felhasználó név vagy jelszó');
            $this->form_validation->set_message('password', 'Hibás bejelentkezés');
        }else {
            $this->session->set_userdata('user', $userArray);
            return true;
        }
        return false;
    }

}
