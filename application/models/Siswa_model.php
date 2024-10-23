<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
    public $table = 'siswa';
    public $id = 'siswa.id_siswa';

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
        $this->db->select('s.*, j.nama_jurusan as jurusan, k.nama_kelas as kelas');
        $this->db->from('siswa s');
        $this->db->join('jurusan j', 's.jurusan = j.id_jurusan');
        $this->db->join('kelas k', 's.kelas = k.id_kelas');
        $this->db->where('s.id_siswa', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    
    public function getTingkatSiswa($id_siswa)
{
    $query = $this->db->select('tingkat')
                      ->from('Siswa')
                      ->where('id_siswa', $id_siswa)
                      ->get();

    if ($query->num_rows() > 0) {
        $row = $query->row();
        return $row->tingkat;
    }

    return null;
}

public function naik_tingkat($id)
{
    // Mendapatkan tingkat siswa sebelum diperbarui
    $previousTingkat = $this->getTingkatSiswa($id);

    // Mengubah tingkat siswa
    $sql = "UPDATE Siswa SET tingkat = CASE
                WHEN tingkat < 12 THEN tingkat + 1
                ELSE 12
            END,
            status = CASE
                WHEN tingkat = 12 THEN 'lulus'
                ELSE 'tidak lulus'
            END
            WHERE id_siswa = ?";

    // Eksekusi query
    $query = $this->db->query($sql, $id);

    if ($query) {
        // Mendapatkan tingkat siswa setelah diperbarui
        $currentTingkat = $this->getTingkatSiswa($id);

        // Memeriksa apakah tingkat siswa benar-benar diperbarui
        if ($currentTingkat > $previousTingkat) {
            echo "Tingkat siswa berhasil diperbarui.";
        } else {
            echo "Tingkat siswa tidak berubah.";
        }
    } else {
        echo "Error: " . $this->db->error();
    }
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
?>