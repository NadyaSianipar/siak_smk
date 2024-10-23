<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PklSiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PraktikSiswa_model');
        $this->load->model('SiswaSiswa_model');
        $this->load->model('PerusahaanSiswa_model');
        $this->load->library('form_validation');
        if (!$this->session->userdata("id_siswa")) {
            redirect('login');
        }
    }

    public function index()
    {
        $id = $this->session->userdata("id_siswa");
        $data['profil'] = $this->SiswaSiswa_model->getById($id);
        $data['perusahaan'] = $this->PerusahaanSiswa_model->get();
        $data['siswa'] = $this->SiswaSiswa_model->get();
        $data['kp'] = $this->PraktikSiswa_model->getPraktikBySiswaId($id);
        $this->load->view("layout/header", $data);
        $this->load->view("pklSiswa/vw_praktekkerja", $data);
        $this->load->view("layout/footer");
    }

    public function kirim()
    {
        $id = $this->session->userdata("id_siswa");
        $data['profil'] = $this->SiswaSiswa_model->getById($id);
        $data['kp'] = $this->PraktikSiswa_model->get();
        $data['perusahaan'] = $this->PerusahaanSiswa_model->get();
        $data['siswa'] = $this->SiswaSiswa_model->getById($id);
        $this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai KP', 'required', [
            'required' => 'Tanggal Mulai KP Wajib di isi'
        ]);
        $this->form_validation->set_rules('tgl_selesai', 'Tanggal Selesai KP', 'required', [
            'required' => 'Tanggal Selesai KP Wajib di isi'
        ]);
        $this->form_validation->set_rules('namaperusahaan', 'Nama Perusahaan', 'required', [
            'required' => 'Nama Perusahaan wajib di Pilih'
        ]);
        $this->form_validation->set_rules('bidangkerja', 'Bidang Kerja', 'required', [
            'required' => 'Bidang Kerja wajib di pilih'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("pklSiswa/vw_tambahpraktekkerja", $data);
            $this->load->view("layout/footer");
        }
        else {
            $namaperusahaan = $this->PerusahaanSiswa_model->getBidangKerjaByInstansi($this->input->post('namaperusahaan'));
            $data = [
                'id_siswa' => $this->session->userdata('id_siswa'),
                'email' => $this->input->post('email'),
                'tmptlahir' => $this->input->post('tmptlahir'),
                'tgllahir' => $this->input->post('tgllahir'),
                'notelp' => $this->input->post('notelp'),
                'alamat' => $this->input->post('alamat'),
                'tgl_mulai' => $this->input->post('tgl_mulai'),
                'tgl_selesai' => $this->input->post('tgl_selesai'),
                'id_perusahaan' => $this->input->post('namaperusahaan'),
                'namaperusahaan' => $namaperusahaan[0]['namaperusahaan'],
                'bidangkerja' => $this->input->post('bidangkerja'),
            ];
            $this->PraktikSiswa_model->tambah($data);
            redirect('PklSiswa');
        }
    }

    // public function upload()
    // {
    //     $namaperusahaan = $this->Perusahaan_model->getBidangKerjaByInstansi($this->input->post('namaperusahaan'));
    //     $data = [
    //         'tmptlahir' => $this->input->post('tmptlahir'),
    //         'tgllahir' => $this->input->post('tgllahir'),
    //         'notelp' => $this->input->post('notelp'),
    //         'alamat' => $this->input->post('alamat'),
    //         'tgl_mulai' => $this->input->post('tgl_mulai'),
    //         'tgl_selesai' => $this->input->post('tgl_selesai'),
    //         'id_perusahaan' => $this->input->post('namaperusahaan'),
    //         'namaperusahaan' => $namaperusahaan[0]['namaperusahaan'],
    //         'bidangkerja' => $this->input->post('bidangkerja'),
    //     ];
    //     $this->Praktik_model->tambah($data);
    //     redirect('Pkl');
    // }

    public function getBidangKerjaByInstansi()
    {
        $selectedInstansi = $this->input->post('instansi');

        $options = '<option selected>Open this select menu</option>';

        foreach ($selectedInstansi as $instansi) {
            $bidangKerja = $this->PerusahaanSiswa_model->getBidangKerjaByInstansi($instansi);

            foreach ($bidangKerja as $row) {
                $options .= '<option value="' . $row['id_perusahaan'] . '">' . $row['bidang'] . '</option>';
            }
        }

        echo $options;
    }

}