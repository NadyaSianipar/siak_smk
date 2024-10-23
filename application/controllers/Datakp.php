<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datakp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kp_model');
        $this->load->model('Email_model');
        $this->load->library('session');
    }

    public function index()
    {
        $data['judul'] = "Halaman Data Kerja Praktik";
        $data['kp'] = $this->Kp_model->get_kp();
        $this->load->view("layout/header");
        $this->load->view("kp/vw_datakp", $data);
        $this->load->view("layout/footer");
    }

    public function simpan($id)
    {
        $data = [
            'keterangan' => $this->input->post('keterangan'),
            'status' => 'Selesai' // Tambahkan status selesai
        ];
        $email = $this->input->post('email');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data KP Berhasil Diubah!</div>');

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

        $this->Kp_model->update(['id_kp' => $id], $data);
        $result = $this->Email_model->send($email, 'Berikut Terlampir Balasan Surat dari tempat yang anda ajukan untuk magang!<br><a href="' . base_url('assets/file/' . $file_name) . '">Download File</a>');
        if ($result) {
            // Email berhasil terkirim
            $this->session->set_flashdata('success_message', 'Berhasil disimpan');
        }
        else {
            $this->session->set_flashdata('error_message', 'Berhasil mengirim email');
        }

        redirect('Datakp');
    }

    public function tolak($id)
    {
        $data = $this->Kp_model->getById($id);
        if ($data) {
            $status = ($data['status'] === 'Ditolak') ? 'Diproses' : 'Ditolak';
            $result = $this->Kp_model->updateStatus($id, $status);
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

        redirect('Datakp');
    }
}

?>