<?php

class Cldifftablemodel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function clDiffDatas() {
        $query = $this->db->get('cl_differ');
        return $query->result_array();
    }

    public function machine3210() {
        $this->db->select('*');
        $this->db->from('cl_differ');
        $this->db->where('machine_code', 'SD3210');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function machine3220() {
        $this->db->select('*');
        $this->db->from('cl_differ');
        $this->db->where('machine_code', 'SD3220');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function machine3230() {
        $this->db->select('*');
        $this->db->from('cl_differ');
        $this->db->where('machine_code', 'SD3230');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function machine3320() {
        $this->db->select('*');
        $this->db->from('cl_differ');
        $this->db->where('machine_code', 'SD3320');
        $query = $this->db->get();
        return $query->result_array();
    }

}
