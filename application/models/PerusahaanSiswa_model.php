<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PerusahaanSiswa_model extends CI_Model{
    public $table = 'perusahaan';

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

    public function getBidangKerjaByInstansi($instansi)
    {
        $this->db->select('namaperusahaan, bidang');
        $this->db->from('perusahaan');
        $this->db->where('id_perusahaan', $instansi);
        $query = $this->db->get();
        return $query->result_array();
    }

}