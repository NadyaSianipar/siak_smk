<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akademik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Akademik_model');
        $this->load->model('SuratSiswa_model');
        $this->load->model('Email_model');
        $this->load->library('session');
    }

    public function index()
    {
        $data['judul'] = "Halaman Data Layanan Akademik";
        $data['surat'] = $this->Akademik_model->get_surat();
        $this->load->view("layout/header");
        $this->load->view("akademik/vw_akademik", $data);
        $this->load->view("layout/footer");
    }

    public function simpan($id)
    {
        $data = [
            'keterangan' => $this->input->post('keterangan'),
            'status' => 'Selesai' // Tambahkan status selesai
        ];
        $email = $this->input->post('email');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Surat Berhasil Diubah!</div>');

        $config['upload_path'] = './assets/file';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 20480000; // 
        $config['overwrite'] = true;
        $config['encrypt_name'] = true;

        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, true);
        }

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('file')) {
            $file = $this->upload->data();
            $file_name = $file['file_name'];
            $data['file'] = $file_name;

            echo "File berhasil diupload.";
        }
        else { 
            // File upload gagal
            $error = $this->upload->display_errors();
            echo $error;
            die;
        }

        $this->Akademik_model->update(['id_surat' => $id], $data);
        $result = $this->Email_model->send($email, 'Berikut terlampir Balasan Surat yang anda ajukan<br><a href="' . base_url('assets/file/' . $file_name) . '">Download File</a>');
        if ($result) {
            // Email berhasil terkirim
            $this->session->set_flashdata('success_message', 'Berhasil disimpan');
        }
        else {
            $this->session->set_flashdata('error_message', 'Berhasil mengirim email');
        }

        redirect('Akademik');
    }

    public function tolak($id)
    {
        $data = $this->Akademik_model->getById($id);
        if ($data) {
            $status = ($data['status'] === 'Ditolak') ? 'Diproses' : 'Ditolak';
            $result = $this->Akademik_model->updateStatus($id, $status);
            if ($result) {
                // Update status berhasil
                $this->session->set_flashdata('message', 'Status berhasil diperbarui.');
            }
            else {
                // Update status gagal
                $this->session->set_flashdata('error', 'Gagal memperbarui status.');
            }
        }
        else {
            // Data tidak ditemukan
            $this->session->set_flashdata('error', 'Data tidak ditemukan.');
        }

        redirect('Akademik');
    }
}

?>