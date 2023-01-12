<?php

class Machineparts extends CI_Model {

    function _construct() {
        parent::__construct();
    }

    public function getAllMachineParts() {
        $this->db->select('id, machine_part');
        $this->db->from('cl_machine_part');
        $query = $this->db->get();
        return $query->result_array();
    }


}
