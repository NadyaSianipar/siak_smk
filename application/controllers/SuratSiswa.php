<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SuratSiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SuratSiswa_model');
        $this->load->model('SiswaSiswa_model');
        $this->load->library('form_validation');
        if (!$this->session->userdata("id_siswa")) {
            redirect('login');
        }
    }

    public function index()
    {
        $id = $this->session->userdata("id_siswa");
        $data['profil'] = $this->SiswaSiswa_model->getById($id);
        $data['surat'] = $this->SuratSiswa_model->get();
        $data['siswa'] = $this->SiswaSiswa_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("jenisSuratSiswa/vw_layananakademik", $data);
        $this->load->view("layout/footer");
    }

    public function kirim()
    {
        $id = $this->session->userdata("id_siswa");
        $data['profil'] = $this->SiswaSiswa_model->getById($id);
        $data['surat'] = $this->SuratSiswa_model->get();
        $data['siswa'] = $this->SiswaSiswa_model->getById($id);
        $this->form_validation->set_rules('jenis_surat', 'Jenis Surat', 'required', [
            'required' => 'Jenis Surat Wajib di isi'
        ]);
        $this->form_validation->set_rules('tanggal_p', 'Tanggal Pengajuan', 'required', [
            'required' => 'Tanggal Pengajuan Surat Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("jenisSuratSiswa/vw_tambah", $data);
            $this->load->view("layout/footer");
        }
        else {
            $data_surat = [
                'id_siswa' => $this->session->userdata('id_siswa'),
                'email' => $this->input->post('email'),
                'tmptlahir' => $this->input->post('tmptlahir'),
                'tgllahir' => $this->input->post('tgllahir'),
                'notelp' => $this->input->post('notelp'),
                'alamat' => $this->input->post('alamat'),
                'jenis_surat' => $this->input->post('jenis_surat'),
                'tanggal_p' => $this->input->post('tanggal_p'),
            ];

            $this->SuratSiswa_model->tambah($data_surat);
            redirect('SuratSiswa');
        }
    }

}