<?php

class Ranks extends CI_Model {

    function _construct() {
        parent::__construct();
    }

    public function getAllRanks() {
        $this->db->select('id, rank_name');
        $this->db->from('ranks_db');
        $query = $this->db->get();
        return $query->result_array();
    }

}
