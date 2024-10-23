<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akademik_model extends CI_Model
{
    public $table = 'surat';
    public $id = 'surat.id_surat';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_surat()
    {
        $this->db->select('surat.id_surat, surat.id_siswa, surat.email, surat.jenis_surat, siswa.nama,  surat.tmptlahir, surat.tgllahir, surat.notelp, surat.alamat, surat.status');
        $this->db->from('surat');
        $this->db->join('siswa', 'surat.id_siswa = siswa.id_siswa');
        $query = $this->db->get();
        return $query->result_array();
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
        $this->db->where('id_surat', $id);
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
    public function updateStatus($id, $status)
    {
        $data = array('status' => $status);
        $this->db->where('id_surat', $id);
        $this->db->update($this->table, $data);
        return $this->db->affected_rows();
    }
}
?>