<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Nilai_model');
        $this->load->model('Guru_model');
        $this->load->library('session');
    
    }

    public function index()
    {
        $data['profil'] = $this->Guru_model->getById(1);
        $id= $this->session->userdata("id_guru");
        $data['judul'] = "Halaman Nilai";
        $this->load->view("layout/header", $data);
        $data['nilai'] = $this->Nilai_model->getMapelByGuruId($id);
        $this->load->view("nilai/vw_nilai", $data);
        $this->load->view("layout/footer");
    } 
    public function kelas($id_mapel)
    {
        $data['profil'] = $this->Guru_model->getById(1);
        $id_guru= $this->session->userdata("id_guru");
        $data['judul'] = "Halaman Nilai";
        $this->load->view("layout/header", $data);
        $data['nilai'] = $this->Nilai_model->getKelasByGuruId($id_guru,$id_mapel);
        $this->load->view("nilai/vw_nilaiKelas", $data);
        $this->load->view("layout/footer");
    }

    public function tambah($id_kelas, $id_mapel, $tingkat, $semester)
{
    $data['profil'] = $this->Guru_model->getById(1);
    $id_guru = $this->session->userdata("id_guru");
    $data['nilai'] = $this->Nilai_model->getNilaiBySemester($id_kelas, $id_mapel, $semester, $tingkat);

    if ($this->session->flashdata('alert_message')) {
        $data['alert_message'] = $this->session->flashdata('alert_message');
    }

    $this->load->view("layout/header", $data);
    $this->load->view("nilai/vw_tambah_nilai", $data);
    $this->load->view("layout/footer");
}


public function simpan()
{
    $tahunajaran = date('Y');
    $semester = $this->input->post('semester');
    $tingkat = $this->input->post('tingkat');
    $id_kelas = $this->input->post('id_kelas');
    $id_mapel = $this->input->post('id_mapel');
  
    $nilai = $this->input->post('nilaisiswa');
    $id_nilai = $this->input->post('id_nilai');

    foreach ($this->Nilai_model->getSiswaByKelasId($id_kelas) as $i => $us) {
        $this->Nilai_model->simpanNilai($us['id_siswa'], $id_nilai[$i], $id_kelas, $id_mapel, $semester, $nilai[$i], $tahunajaran, $tingkat);
    }

    $alert_message = 'Data berhasil disimpan. <button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
    $this->session->set_flashdata('alert_message', $alert_message);

    redirect(base_url('Nilai/tambah/'.$id_kelas.'/'.$id_mapel.'/'.$tingkat.'/'.$semester));
}


}

