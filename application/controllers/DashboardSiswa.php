<?php
defined('BASEPATH') or exit('no direct script access allowed');

class DashboardSiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('NilaiSiswa_model');
        $this->load->model('PresensiSiswa_model');
        $this->load->model('SiswaSiswa_model');
        $this->load->model('Pelajaran_model');
        if(!$this->session->userdata("id_siswa")){
            redirect('login');
        }
    }

    public function index()
    {
        $id = $this->session->userdata("id_siswa");
        $data['senin'] = $this->Pelajaran_model->getJadwalByHariSiswa('senin');
        $data['selasa'] = $this->Pelajaran_model->getJadwalByHariSiswa('selasa');
        $data['rabu'] = $this->Pelajaran_model->getJadwalByHariSiswa('rabu');
        $data['kamis'] = $this->Pelajaran_model->getJadwalByHariSiswa('kamis');
        $data['jumat'] = $this->Pelajaran_model->getJadwalByHariSiswa('jumat');
        $data['profil'] = $this->SiswaSiswa_model->getById($id);
        $data['chartpresensi'] = $this->PresensiSiswa_model->generatechart($id);
        $data['chartnilai'] = $this->NilaiSiswa_model->generatechart($id);
        $this->load->view("layout/header", $data);
        $this->load->view("dashboardSiswa/vw_dashboards");
        $this->load->view("layout/footer");
    }

}