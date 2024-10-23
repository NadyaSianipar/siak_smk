<?php
defined('BASEPATH') or exit('No direct script access
allowed');
class Kelas_model extends CI_Model
{
    public $table = 'kelas';
    public $id = 'kelas.id_kelas';
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
    // Mengambil data kelas
    public function get_kelas()
    {
        $this->db->select('kelas.id_kelas, kelas.nama_kelas, kelas.tingkat, jurusan.nama_jurusan, guru.nama as wali_kelas, jurusan.id_jurusan');
        $this->db->from('kelas');
        $this->db->join('jurusan', 'kelas.jurusan = jurusan.id_jurusan');
        $this->db->join('guru', 'kelas.wali_kelas = guru.id_guru');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Mengambil data jurusan
    public function get_jurusan()
    {
        $query = $this->db->get('jurusan');
        return $query->result_array();
    }

    // Mengambil data guru
    public function get_guru()
    {
        $query = $this->db->get('guru');
        return $query->result_array();
    }

    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function update($where, $data)
    {
        $this->db->where($where);
        $this->db->update($this->table, $data);
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
}