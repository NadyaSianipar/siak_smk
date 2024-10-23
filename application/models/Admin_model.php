<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model{
    public $table = 'admin';
    public $id = 'admin.id_admin';

    public function __construct()
    {
        parent::__construct();
    }

    function cek_login($table,$where){      
        return $this->db->get_where($table,$where);
    }
     
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id)
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
}