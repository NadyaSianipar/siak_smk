<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JenisSuratSiswa_model extends CI_Model
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

}