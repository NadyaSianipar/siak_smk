<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SuratSiswa_model extends CI_Model
{
    public $table = 'surat';

    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambah($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function updateStatus($id, $status)
    {
        $data = array('status' => $status);
        $this->db->where('id_surat', $id);
        $this->db->update($this->table, $data);
        return $this->db->affected_rows();
    }
}