<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PresensiSiswa_model extends CI_Model
{
    public $table = 'presensi';
    public $id = 'presensi.id_siswa';
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
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_siswa', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function filterByTingkat($semester, $tingkat, $id_siswa)
    {
        $this->db->where('semester', $semester);
        $this->db->where('tingkat', $tingkat);
        $this->db->where('id_siswa', $id_siswa);
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function filterBySiswa($id_siswa)
    {
        $this->db->where('id_siswa', $id_siswa);
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function generatechart($id_siswa)
    {
        $presensi = $this->filterBySiswa($id_siswa);
        $value = [];
        $label = [];
        foreach ($presensi as $us) {
            $value[] = count(json_decode($us['pertemuan']));
            $label[] = 'SEMESTER ' . $us['semester'];
        }
        // echo '<pre>';
        // var_dump($label);
        // die;
        return [
            'value' => $value,
            'label' => $label
        ];
    }
}