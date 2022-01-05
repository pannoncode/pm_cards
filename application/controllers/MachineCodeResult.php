<?php

/**
 * Description of MachineCodeResult
 *
 * @author aaazr
 */
class MachineCodeResult extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('machinecode'));
    }

    public function index() {
        $output                = [];
        $output['machinecode'] = $this->machinecode->getAllMachineCode();
        $output['username']    = $this->session->get_userdata('user')['user']['name'];
        $this->load->view('home', $output);
    }

}
