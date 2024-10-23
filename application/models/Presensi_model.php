<?php
defined('BASEPATH') or exit('No direct script access
allowed');
class Presensi_model extends CI_Model
{
    public $table = 'presensi';
    public $id = 'presnsi.id_siswa';
    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $this->db->select('jadwalpelajaran.id_jadwal,  jadwalpelajaran.id_kelas, kelas.nama_kelas, kelas.tingkat');
        $this->db->from('jadwalpelajaran');
        $this->db->join('kelas', 'jadwalpelajaran.id_kelas = kelas.id_kelas');
        $this->db->join('siswa', 'presensi.nama = siswa.id_siswa');
        $query = $this->db->get();
        return $query->result_array();

    }

    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_jadwal', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getKelasByGuruId($id_guru)
    {
        $this->db->select('jadwalpelajaran.id_jadwal, jadwalpelajaran.id_kelas, kelas.nama_kelas, kelas.tingkat ');
        $this->db->from('jadwalpelajaran');
        $this->db->join('kelas', 'kelas.id_kelas = jadwalpelajaran.id_kelas');
        $this->db->where('id_guru', $id_guru);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getPresensiByKelas($id_kelas, $tahunajaran, $tingkat, $semester)
    {
        $this->db->select("siswa.id_siswa,siswa.nama, presensi.pertemuan, presensi.id_presensi");
        $this->db->from('siswa');
        $this->db->join('presensi', "siswa.id_siswa = presensi.id_siswa AND presensi.id_kelas = '$id_kelas' AND presensi.tahunajaran = '$tahunajaran' AND presensi.tingkat = '$tingkat' AND presensi.semester = '$semester' ", 'left');
        $this->db->where('siswa.kelas', $id_kelas);

        $query = $this->db->get();
        return $query->result_array();
    }

    public function getSiswaByKelasId($id_kelas)
    {
        $this->db->select('siswa.id_siswa, siswa.nama, kelas');
        $this->db->from('siswa');
        $this->db->where('kelas', $id_kelas);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update($data, $where)
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

    public function simpanPresensi($id_siswa, $id_presensi, $id_kelas, $presensi, $tahunajaran, $semester, $tingkat)
    {
        $where = [
            'id_siswa' => $id_siswa,
            'id_presensi' => $id_presensi,
            'id_kelas' => $id_kelas,
            'tahunajaran' => $tahunajaran,
            'tingkat' => $tingkat,
            'semester' => $semester,
        ];

        $data = [
            'id_siswa' => $id_siswa,
            'id_presensi' => $id_presensi,
            'tahunajaran' => $tahunajaran,
            'id_kelas' => $id_kelas,
            'pertemuan' => $presensi,
            'tingkat' => $tingkat,
            'semester' => $semester,
        ];

        $this->db->where($where);
        $q = $this->db->get('presensi');
        $this->db->reset_query();
        if ($q->num_rows() > 0 && $id_presensi != '')
            {
            unset($data['tahunajaran']);
            unset($data['id_presensi']);
            unset($data['tingkat']);
            unset($data['semester']);
            //$this->db->where('id', $id);
            //$this->db->update('your_table_name', $data);
            $this->db->where($where)->update('presensi', $data);
        }
        else {
            unset($data['id_presensi']);
            //$this->db->set('id', $id);
            //$this->db->insert('presensi', $data);
            $this->db->insert('presensi', $data);
        }
    }
}