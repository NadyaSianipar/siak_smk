<?php
defined('BASEPATH') or exit('No direct script access
allowed');
class Guru_model extends CI_Model
{
    public $table = 'guru';
    public $id = 'guru.id_guru';
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

    function cek_login($table,$where){
        return $this->db->get_where($table,$where);
    }

    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_guru', $id);
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
    public function Check_Old_Password($id_guru, $password_sekarang)
    {
        $this->db->where('id_guru', $id_guru);
        $this->db->where('password', $password_sekarang);
        $query = $this->db->get('guru');
        if($query->num_rows() > 0)
            return true;
        else
            return false;
    }
}
