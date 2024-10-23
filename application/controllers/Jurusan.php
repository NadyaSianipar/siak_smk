<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->model('Jurusan_model');
        $this->load->model('Kelas_model');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = "Halaman Data Jurusan";
        $data['jurusan'] = $this->Jurusan_model->get();
        $this->load->view("layout/header");
        $this->load->view("jurusan/vw_jurusan", $data);
        $this->load->view("layout/footer");
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Jurusan";
        $data['jurusan'] = $this->Jurusan_model->get();
        $this->form_validation->set_rules('nama_jurusan', 'Nama Jurusan', 'required|is_unique[jurusan.nama_jurusan]', [
            'required' => 'Nama Jurusan Wajib diisi',
            'is_unique' => 'Nama Jurusan sudah ada, silakan masukkan nama jurusan yang berbeda',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("jurusan/vw_tambah_jurusan", $data);
            $this->load->view("layout/footer");
        }
        else {
            $data = [
                'nama_jurusan' => $this->input->post('nama_jurusan'),
            ];
            $this->Jurusan_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Jurusan Berhasil Ditambah!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>');
            redirect('Jurusan');
        }
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Jurusan";
        $data['jurusan'] = $this->Jurusan_model->getById($id);
        $this->form_validation->set_rules('nama_jurusan', 'Nama Jurusan', 'required|is_unique[jurusan.nama_jurusan]', [
            'required' => 'Nama Jurusan Wajib diisi',
            'is_unique' => 'Nama Jurusan sudah ada, silakan masukkan nama jurusan yang berbeda',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("jurusan/vw_ubah_jurusan", $data);
            $this->load->view("layout/footer");
        }
        else {
            $data = [
                'nama_jurusan' => $this->input->post('nama_jurusan'),

            ];
            $where = ['id_jurusan' => $id];

            $this->Jurusan_model->update($where, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Jurusan Berhasil Diubah!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>');
            redirect('Jurusan');
        }
    }
    function hapus($id)
    {
        $this->Jurusan_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Jurusan Gagal Dihapus!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
        }
        else {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Jurusan Berhasil Dihapus!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>');
        }
        redirect('Jurusan');
    }

}
?>