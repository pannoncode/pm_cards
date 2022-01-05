<?php

class Saveemp extends CI_Model {

    function _construct() {
        parent::__construct();
    }

    function saveemployer($data) {
        $this->db->insert('namelist_db', $data);
    }

}
