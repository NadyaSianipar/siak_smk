<?php
defined('BASEPATH') or exit('No direct script access allow');

class JenisSuratSiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SiswaSiswa_model');
        $this->load->model('SuratSiswa_model');
        $this->load->model('JenisSuratSiswa_model');
        if (!$this->session->userdata("id_siswa")) {
            redirect('login');
        }
    }

    public function index()
    {
        $id = $this->session->userdata("id_siswa");
        $data['profil'] = $this->SiswaSiswa_model->getById($id);
        $this->load->view("layout/header", $data);
        $data['surat'] = $this->SuratSiswa_model->getBySiswa($id_siswa);
        $this->load->view("jenisSuratSiswa/vw_layak", $data);
        $this->load->view("layout/footer", $data);
    }

    // public function layak()
    // {
    //     $id = $this->session->userdata("id_siswa");
    //     $data['profil'] = $this->SiswaSiswa_model->getById($id);
    //     $this->load->view("layout/header", $data);
    //     $data['surat'] = $this->SuratSiswa_model->get_surat();
    //     $data['suratsiswa'] = $this->SuratSiswa_model->getBySiswa($id);
    //     $this->load->view("jenisSuratSiswa/vw_layananakademik", $data);
    //     $this->load->view("layout/footer");
    // }

    public function add()
    {
        $this->load->view("layout/header", $data);
        $data['profil'] = $this->SiswaSiswa_model->get();
        $this->load->view("jenisSuratSiswa/vw_tambah", $data);
        $this->load->view("layout/footer");
    }

    public function pengajuan($id_surat)
    {
        $id = $this->session->userdata("id_siswa");
        $data['profil'] = $this->SiswaSiswa_model->getById($id);
        $this->load->view("layout/header", $data);
        // $data['surat'] = $this->JenisSuratSiswa_model->filterByJenisSurat($id_surat);
        $this->load->view("jenisSuratSiswa/vw_tambah", $data);
        $this->load->view("layout/footer");
    }
}