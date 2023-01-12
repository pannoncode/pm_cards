<?php

class Clrequiringmodel extends CI_Model {

    function _construct() {
        parent::__construct();
    }

    function saveForm($data) {
        $this->db->insert('cl_requiring', $data);
    }
    
    function saveCilForm($data){
        $this->db->insert('cil_requiring', $data);
    }

}
