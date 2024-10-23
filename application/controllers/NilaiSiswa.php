<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NilaiSiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('NilaiSiswa_model');
        $this->load->model('SiswaSiswa_model');
        if(!$this->session->userdata("id_siswa")){
            redirect('login');
        }
    }

    public function index()
    {
        
        $this->load->view("layout/header", $data);
        $data['nilai'] = $this->Nilai_model->get();
        $this->load->view("nilaiSiswa/vw_nilai", $data);
        $this->load->view("layout/footer");
    }

    public function filterBySemester($filter)
    {
        $id = $this->session->userdata("id_siswa");
        $semester = explode("-", $filter)[1];
        $tingkat = explode("-", $filter)[0];
        $data['profil'] = $this->SiswaSiswa_model->getById($id);
        $this->load->view("layout/header", $data);
        $data['nilai'] = $this->NilaiSiswa_model->filterBySemester($semester,$tingkat,$id);
        $this->load->view("nilaiSiswa/vw_nilai", $data);
        $this->load->view("layout/footer");
    }

}