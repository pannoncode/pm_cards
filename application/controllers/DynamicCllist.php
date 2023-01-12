<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class DynamicCllist extends CI_Controller{
    public function __construct_() {
        parent::__construct();
        $this->load->model('dynamiccllistmodel');
        $this->load->model('machinecode');
    }
    
    public function index() {
        $output['machinecode'] = $this->machinecode->getAllMachineCode();
        $output['username'] = $this->session->get_userdata('user')['user']['name'];
        $output['page'] = 'cldifferent';
        $this->load->view('home', $output);
    }
    
}
