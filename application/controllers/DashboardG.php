<?php
defined('BASEPATH') or exit('no direct script access allowed');

class DashboardG extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Guru_model');
        $this->load->model('Pelajaran_model');
    }

    public function index()
    {
        $data['profil'] = $this->Guru_model->getById(1);
        $data['senin'] = $this->Pelajaran_model->getJadwalByHariGuru('senin');
        $data['selasa'] = $this->Pelajaran_model->getJadwalByHariGuru('selasa');
        $data['rabu'] = $this->Pelajaran_model->getJadwalByHariGuru('rabu');
        $data['kamis'] = $this->Pelajaran_model->getJadwalByHariGuru('kamis');
        $data['jumat'] = $this->Pelajaran_model->getJadwalByHariGuru('jumat');
        $data['sabtu'] = $this->Pelajaran_model->getJadwalByHariGuru('sabtu');
        $this->load->view("layout/header", $data);
        $this->load->view("dashboardg/vw_dashboardg");
        $this->load->view("layout/footer");
    }
}