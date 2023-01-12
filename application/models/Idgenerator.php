<?php

class IdGenerator extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function idGenerator() {
        $idgen           = [];
        $idgen['id_gen'] = date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
        return $idgen;
    }
}
