<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PraktikSiswa_model extends CI_Model{
    public $table = 'kp';

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

    public function getPraktikBySiswaId($id_siswa)
    {
        $this->db->from($this->table);
        $this->db->where('id_siswa', $id_siswa);
        $query = $this->db->get();
        return $query->result_array();
    }
}