<?php

class User extends CI_Model {

    function _construct() {
        parent::__construct();
    }

    public function getUserDataByUsernameAndPassword($username, $password) {
        $password = hash('sha512', $password);
        $this->db->select('id, name, username, password');
        $this->db->from('namelist_db');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query    = $this->db->get();
        $userdata = [];

        if ($query->num_rows() === 0) {
            return $userdata;
        } else {
            return $query->row_array();
        }
    }

    public function getUserById($id) {
        $id = (int) $id;
        $this->db->select('id, username');
        $this->db->from('namelist_db');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if ($query->num_rows() === 0) {
            return [];
        } else {
            return $query->row_array();
        }
    }

    public function update($id, $data) {
        $id = (int) $id;
        $this->db->where('id', $id);
        $this->db->update('namelist_db', $data);
    }

}
