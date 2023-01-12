<?php

class PmCardDatas extends CI_Model {

    function _construct() {
        parent::__construct();
    }

    public function getBdPf() {
        $this->db->select('id, bd_pf');
        $this->db->from('pmcardtype_db');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getPmMechElec() {
        $this->db->select('id, mech_elec');
        $this->db->from('mechanic_electric_db');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getShift() {
        $this->db->select('id, shiftcode');
        $this->db->from('shift_db');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getMachinePart() {
        $this->db->select('id, machine_part_name');
        $this->db->from('machine_part_db');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function getParts() {
        $this->db->select('id, parts_name');
        $this->db->from('parts_db');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function getNames() {
        $this->db->select('id, name');
        $this->db->from('namelist_db');
        $query = $this->db->get();
        return $query->result_array();
    }

}
