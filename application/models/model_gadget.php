<?php

class Model_gadget extends CI_Model{

    public function data_handphone(){
        return $this->db->get_where("table_topekas",array('
        kategori' => 'sayur'));
    }

    public function data_laptop(){
        return $this->db->get_where("table_topekas",array('
        kategori' => 'daging'));
    }
}