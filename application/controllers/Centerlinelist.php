<?php

class Centerlinelist extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('centerlinelistmodel');     
        $this->load->model('machinecode');
        $this->load->model('machineparts');
    }

    public function index() {
        if ($this->session->has_userdata('user')) {
            $user_id               = $this->session->get_userdata('user')['user']['id'];
            $output                = [];
            $output['page']        = 'centerlinetable';
            $output['username']    = $this->session->get_userdata('user')['user']['username'];
            $this->load->view('home', $output);
        } else {
            redirect('Home/index');
        }
    }

    public function getCenterline() {
        if ($this->session->has_userdata('user')) {
            print(json_encode(['data' => $this->centerlinelistmodel->getAllCenterline()], JSON_UNESCAPED_UNICODE));
        }
    }
}