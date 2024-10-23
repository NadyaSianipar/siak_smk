<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Presensi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Presensi_model');
        $this->load->model('Guru_model');
        $this->load->library('session');
    }

    public function index()
    {
        $data['profil'] = $this->Guru_model->getById(1);
        $id_guru = $this->session->userdata("id_guru");
        $data['judul'] = "Halaman Presensi";
        $this->load->view("layout/header", $data);
        $data['presensi'] = $this->Presensi_model->getKelasByGuruId($id_guru);
        $this->load->view("presensi/vw_presensi", $data);
        $this->load->view("layout/footer");
    }

    public function siswa($id_kelas, $tingkat, $semester)
    {
        $data['profil'] = $this->Guru_model->getById(1);
        $id_guru = $this->session->userdata("id_guru");
        $tahunajaran = date('Y');
        $data['judul'] = "Halaman Presensi";
        $this->load->view("layout/header", $data);
        $data['presensi'] = $this->Presensi_model->getPresensiByKelas($id_kelas, $tahunajaran, $tingkat, $semester);
        $this->load->view("presensi/vw_detailpresensi", $data);
        $this->load->view("layout/footer");
    }



    public function simpan()
    {
        $data['profil'] = $this->Guru_model->getById(1);
        $data['judul'] = "Halaman Presensi";

        $this->load->view("layout/header", $data);

        $data['presensi'] = $this->Presensi_model->get();
        $this->load->view("presensi/vw_detailpresensi", $data);

        $this->load->view("layout/footer");

        $alert_message = 'Alert muncul disini.';
        $this->session->set_flashdata('alert_message', $alert_message);
    }


    public function submit()
    {
        $semester = $this->input->post('semester');
        $persensi = $this->input->post('presensi');
        $id_persensi = $this->input->post('id_presensi');
        $id_kelas = $this->input->post('id_kelas');
        $tingkat = $this->input->post('tingkat');
        $tahunajaran = date('Y');

        foreach ($persensi as $key => $val) {
            $this->Presensi_model->simpanPresensi($key, $id_persensi[$key], $id_kelas, json_encode($val), $tahunajaran, $semester, $tingkat);
        }

        $alert_message = 'Data berhasil disimpan.';
        $this->session->set_flashdata('alert_message', $alert_message);

        redirect(base_url('presensi/siswa/' . $id_kelas . '/' . $tingkat . '/' . $semester));
    }
}