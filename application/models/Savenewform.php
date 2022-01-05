<?php

class SaveNewForm extends CI_Model {

    function _construct() {
        parent::__construct();
    }

    function saverecords($data) {
        $this->db->insert('pmcardmain_db', $data);
 
    }
}
