<?php

class Cldifferentmodel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function dispensDatas() {
        $this->db->select('machine_part_id, centerline_name, target_min, target, target_max');
        $this->db->from('centerline_db');
        $this->db->where('machine_part_id', 1);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function makerDatas() {
        $this->db->select('machine_part_id, centerline_name, target_min, target, target_max');
        $this->db->from('centerline_db');
        $this->db->where('machine_part_id', 11);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function closerDatas() {
        $this->db->select('machine_part_id, centerline_name, target_min, target, target_max');
        $this->db->from('centerline_db');
        $this->db->where('machine_part_id', 3);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function conveyorDatas() {
        $this->db->select('machine_part_id, centerline_name, target_min, target, target_max');
        $this->db->from('centerline_db');
        $this->db->where('machine_part_id', 5);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function labelerDatas() {
        $this->db->select('machine_part_id, centerline_name, target_min, target, target_max');
        $this->db->from('centerline_db');
        $this->db->where('machine_part_id', 7);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function polypackDatas() {
        $this->db->select('machine_part_id, centerline_name, target_min, target, target_max');
        $this->db->from('centerline_db');
        $this->db->where('machine_part_id', 8);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function pesterDatas() {
        $this->db->select('machine_part_id, centerline_name, target_min, target, target_max');
        $this->db->from('centerline_db');
        $this->db->where('machine_part_id', 9);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function polypackDoubleDatas() {
        $this->db->select('machine_part_id, centerline_name, target_min, target, target_max');
        $this->db->from('centerline_db');
        $this->db->where('machine_part_id', 10);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function volpakDatas() {
        $this->db->select('machine_part_id, centerline_name, target_min, target, target_max');
        $this->db->from('centerline_db');
        $this->db->where('machine_part_id', 11);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function flexlinkDatas() {
        $this->db->select('machine_part_id, centerline_name, target_min, target, target_max');
        $this->db->from('centerline_db');
        $this->db->where('machine_part_id', 12);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function unitMeasure() {
        $query = $this->db->get('cl_unit_of_measure');
        return $query->result_array();
    }

    function saverecords($data) {
        $this->db->insert('cl_differ', $data);
    }

}
