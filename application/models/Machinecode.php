<?php

class MachineCode extends CI_Model {

    function _construct() {
        parent::__construct();
    }

    public function getAllMachineCode() {
        $this->db->select('id, machine_code');
        $this->db->from('machine_code_db');
        $query = $this->db->get();
        return $query->result_array();
    }

}
