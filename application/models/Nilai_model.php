<?php
defined('BASEPATH') or exit('No direct script accessallowed');
class Nilai_model extends CI_Model
{
    public $table = 'jadwalpelajaran';
    public $id = 'jadwalpelajaran.id_jadwal';
    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $this->db->select('jadwalpelajaran.id_jadwal, jadwalpelajaran.namapelajaran, kelas.nama_kelas, siswa.nama, kelas.tingkat');
        $this->db->from('jadwalpelajaran');
        $this->db->join('kelas', 'jadwalpelajaran.kelas = kelas.id_kelas');
        $this->db->join('siswa', 'nilai.namasiswa = siswa.id_siswa');
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

    public function getMapelByGuruId($id)
    {
        $this->db->select('jadwalpelajaran.id_jadwal, mapel.mapel, jadwalpelajaran.id_kelas, jadwalpelajaran.id_mapel');
        $this->db->from('jadwalpelajaran');
        $this->db->join('mapel', 'mapel.id = jadwalpelajaran.id_mapel');
        $this->db->where('id_guru',$id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getKelasByGuruId($id_guru,$id_mapel)
    {
        $this->db->select('jadwalpelajaran.id_jadwal, jadwalpelajaran.id_kelas, kelas.nama_kelas, jadwalpelajaran.id_mapel, kelas.tingkat');
        $this->db->from('jadwalpelajaran');
        $this->db->join('kelas', 'kelas.id_kelas = jadwalpelajaran.id_kelas');
        $this->db->where('id_guru',$id_guru);
        $this->db->where('id_mapel',$id_mapel);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function getSiswaByKelasId($id_kelas)
    {
        $this->db->select('siswa.id_siswa, siswa.nama');
        $this->db->from('siswa');
        $this->db->where('kelas',$id_kelas);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getNilaiBySemester($id_kelas, $id_mapel, $semester, $tingkat)
    {
        $this->db->select("siswa.id_siswa,siswa.nama,nilai.nilaisiswa,nilai.id_nilai");
        $this->db->from('siswa');
        $this->db->where('siswa.kelas',$id_kelas);
        $this->db->join('nilai',"siswa.id_siswa = nilai.id_siswa AND nilai.id_mapel = '$id_mapel' AND nilai.id_kelas = '$id_kelas' AND nilai.semester = '$semester' AND nilai.tingkat = '$tingkat' ",'left');

        $query = $this->db->get();
        return $query->result_array();
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

    public function simpanNilai($id_siswa, $id_nilai, $id_kelas, $id_mapel, $semester, $nilai, $tahunajaran, $tingkat ) {

        $where = [
            'id_siswa' => $id_siswa,
            'id_nilai' => $id_nilai,
            'semester' => $semester,
            'id_mapel' => $id_mapel,
            'id_kelas' => $id_kelas,
            'tahunajaran' => $tahunajaran,
            'tingkat' => $tingkat,
            

        ];

        $data = [
            'id_siswa' => $id_siswa,
            'id_nilai' => $id_nilai,
            'nilaisiswa' => $nilai,
            'semester' => $semester,
            'id_mapel' => $id_mapel,
            'tahunajaran' => $tahunajaran,
            'id_kelas' => $id_kelas,
            'tingkat' => $tingkat,
            
        ];

        $this->db->where($where);
        $q = $this->db->get('nilai');
        $this->db->reset_query();
        if ( $q->num_rows() > 0 && $id_nilai != '') 
        {
           unset($data['tahunajaran']);
           unset($data['semester']);
           unset($data['id_kelas']);
           unset($data['tingkat']);
            //$this->db->where('id', $id);
            //$this->db->update('your_table_name', $data);
            $this->db->where($where)->update('nilai', $data);
        } else {
            unset($data['id_nilai']);
            //$this->db->set('id', $id);
            //$this->db->insert('nilai', $data);
            $this->db->insert('nilai', $data);
        }
    }

    
}