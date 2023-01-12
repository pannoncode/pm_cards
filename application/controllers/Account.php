<?php

class Account extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user');
        
    }

    public function index() {
        if ($this->session->has_userdata('user')) {
            $user_id               = $this->session->get_userdata('user')['user']['id'];
            $output                = [];
            $output['page']        = 'account';
            $output['userdetails'] = $this->user->getUserById($user_id);
            $output['username']    = $this->session->get_userdata('user')['user']['username'];
            $this->load->view('home', $output);
        } else {
            redirect('Home/index');
        }
    }

    public function save() {
        if ($this->session->has_userdata('user')) {
            $this->form_validation->set_rules('username', 'Felhasználónév ', 'trim|required');
            $this->form_validation->set_rules('password1', 'Jelszó 1', 'trim|required');
            $this->form_validation->set_rules('password2', 'Jelszó 2', 'trim|required|matches[password1]');
            if ($this->form_validation->run() !== FALSE) {
                $username         = $this->input->post('username');
                $password         = $this->input->post('password1');
                $data['username'] = $username;
                $data['password'] = hash('sha512', $password);
                $user_id          = $this->session->get_userdata('user')['user']['id'];
                $this->user->update($user_id, $data);
                redirect('Account/index');
            }
            $user_id               = $this->session->get_userdata('user')['user']['id'];
            $output                = [];
            $output['page']        = 'account';
            $output['userdetails'] = $this->user->getUserById($user_id);
            $output['username']    = $this->session->get_userdata('user')['user']['username'];
            $this->load->view('home', $output);
        } else {
            redirect('Home/index');
        }
    }

}
