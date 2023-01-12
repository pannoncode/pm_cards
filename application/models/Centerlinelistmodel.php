<?php

class Centerlinelistmodel extends CI_Model {

    public function getAllCenterline() {
        //itt meg kell oldani a JOIN-t!!! addig nem működik jól!!
        $this->db->select('machine_code_db.machine_code, machine_part_id, centerline_name, running_standing_id, qa_critic_id, target_min, target, target_max, unit_of_measure_id, opl_number, inspect_id');
        $this->db->from('centerline_db');
        $this->db->join('machine_code_db', 'centerline_db.machine_code_id = machine_code_db.id');
        $query = $this->db->get();
        foreach ($query->result_array() as $row) {
            $data[] = [$row['machine_code_db.machine_code'], $row['machine_part_id'], $row['centerline_name'], $row['running_standing_id'], $row['qa_critic_id'], $row['target_min'], $row['target'], $row['target_max'], $row['unit_of_measure_id'],$row['opl_number'], $row['inspect_id']];
        }
        return $data;
    }
}