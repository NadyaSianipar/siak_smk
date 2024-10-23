<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NilaiSiswa_model extends CI_Model{
    public $table = 'nilai';

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

    public function filterBySemester($semester,$tingkat, $id_siswa)
    {
        $this->db->select("nilai.id_siswa,mapel.mapel,nilai.nilaisiswa,nilai.id_nilai");
        $this->db->where('nilai.semester', $semester);
        $this->db->where('nilai.tingkat', $tingkat);
        $this->db->where('nilai.id_siswa', $id_siswa);
        $this->db->join("mapel","mapel.id = nilai.id_mapel");
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function filterBySiswa($id_siswa)
    {
        $this->db->where('id_siswa', $id_siswa);
        $this->db->select('AVG(nilaisiswa) AS totalnilai ,tingkat');
        $this->db->group_by("tingkat");
        $query = $this->db->get($this->table);
        return $query->result_array();   
    }

    public function generatechart($id_siswa)
    {
        $nilai = $this->filterBySiswa($id_siswa); 
        $value = [];
        $label = [];
        foreach ($nilai as $us){
            $value[]= $us['totalnilai'];
            $label[]= 'KELAS '. $us['tingkat'];
        }
        // echo '<pre>';
        // var_dump($nilai);
        // die;
        return [
            'value' => $value,
            'label' =>$label
        ];
    }

}