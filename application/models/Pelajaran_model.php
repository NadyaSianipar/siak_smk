<?php
defined('BASEPATH') or exit('No direct script access
allowed');
class Pelajaran_model extends CI_Model
{
    public $table = 'jadwalpelajaran';
    public $id = 'jadwalpelajaran.id_jadwal';
    public function __construct()
    {
        parent::__construct();
    }
    public function get_jadwal()
    {
        $this->db->select('jadwalpelajaran.id_jadwal, mapel.id, mapel.mapel, guru.id_guru, guru.nama, kelas.tingkat, kelas.id_kelas, kelas.nama_kelas, jadwalpelajaran.hari, jadwalpelajaran.jammasuk, jadwalpelajaran.jamselesai');
        $this->db->from('jadwalpelajaran');
        $this->db->join('guru', 'jadwalpelajaran.id_guru = guru.id_guru');
        $this->db->join('kelas', 'jadwalpelajaran.id_kelas = kelas.id_kelas');
        $this->db->join('mapel', 'jadwalpelajaran.id_mapel = mapel.id');
        $query = $this->db->get();
        return $query->result_array();

    }


    public function get_guru()
    {
        $query = $this->db->get('guru');
        return $query->result_array();
    }
    public function get_kelas()
    {
        $query = $this->db->get('kelas');
        return $query->result_array();
    }

    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_jadwal', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

    public function getJadwalByHariSiswa($hari)
    {
        $this->db->from($this->table);
        $this->db->where('hari', $hari);
        $this->db->join('mapel', 'mapel.id = jadwalpelajaran.id_mapel');
        $this->db->group_by('id_kelas');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getJadwalByHariGuru($hari)
    {
        $this->db->from($this->table);
        $this->db->where('hari', $hari);
        $this->db->join('mapel', 'mapel.id = jadwalpelajaran.id_mapel');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function isGuruAvailable($hari, $jammasuk, $jamselesai, $id_guru)
    {
        $this->db->where('hari', $hari);
        $this->db->where('id_guru', $id_guru);
        $this->db->where("(jammasuk <= '$jammasuk' AND jamselesai >= '$jammasuk')");
        $this->db->or_where("(jammasuk >= '$jammasuk' AND jammasuk <= '$jamselesai')");
        $this->db->from('jadwalpelajaran');
        $count = $this->db->count_all_results();

        return ($count  >  0);
    }
}