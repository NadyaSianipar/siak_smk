<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SiswaSiswa_model extends CI_Model{
    public $table = 'siswa';
    public $id = 'siswa.id_siswa';

    public function __construct()
    {
        parent::__construct();
    }

    function cek_login($table,$where)
    {      
        return $this->db->get_where($table,$where);
    } 

    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id)
    {
        $this->db->select('s.*, j.nama_jurusan as jurusan, k.nama_kelas as kelas');
        $this->db->from('siswa s');
        $this->db->join('jurusan j', 's.jurusan = j.id_jurusan');
        $this->db->join('kelas k', 's.kelas = k.id_kelas');
        $this->db->where('s.id_siswa', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function Check_Old_Password($id_siswa, $password_sekarang)
    {
        $this->db->where('id_siswa', $id_siswa);
        $this->db->where('password', $password_sekarang);
        $query = $this->db->get('siswa');
        if($query->num_rows() > 0)
            return true;
        else
            return false;
    }
}