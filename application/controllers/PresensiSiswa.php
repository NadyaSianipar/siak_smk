<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PresensiSiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PresensiSiswa_model');
        $this->load->model('SiswaSiswa_model');
        if (!$this->session->userdata("id_siswa")) {
            redirect('login');
        }
    }

    public function index()
    {
        $this->load->view("layout/header");
        $data['presensi'] = $this->PresensiSiswa_model->get();
        $this->load->view("presensiSiswa/vw_presensi", $data);
        $this->load->view("layout/footer");
    }

    public function filterByTingkat($filter)
    {
        $id = $this->session->userdata("id_siswa");
        $semester = explode("-", $filter)[1];
        $tingkat = explode("-", $filter)[0];
        $data['profil'] = $this->SiswaSiswa_model->getById($id);
        $this->load->view("layout/header", $data);
        $data['presensi'] = $this->PresensiSiswa_model->filterByTingkat($semester, $tingkat, $id);
        $this->load->view("PresensiSiswa/vw_presensi", $data);
        $this->load->view("layout/footer");
    }
}