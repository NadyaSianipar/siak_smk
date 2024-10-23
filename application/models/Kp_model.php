<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kp_model extends CI_Model
{
    public $table = 'kp';
    public $id = 'kp.id_kp';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_kp()
    {
        $this->db->select('kp.id_kp, kp.id_perusahaan, kp.id_siswa, kp.email, siswa.nama, kp.namaperusahaan, kp.bidangkerja, kp.tgl_mulai, kp.tgl_selesai, kp.tmptlahir, kp.tgllahir, kp.notelp, kp.alamat, kp.status');
        $this->db->from('kp');
        $this->db->join('siswa', 'kp.id_siswa = siswa.id_siswa');
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
        $this->db->where('id_kp', $id);
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
        $this->db->where('id_kp', $id);
        $this->db->update($this->table, $data);
        return $this->db->affected_rows();
    }
}
?>