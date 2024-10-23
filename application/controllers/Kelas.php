<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_model');
        $this->load->model('Jurusan_model');
        $this->load->model('Guru_model');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = "Halaman Data Kelas";
        $data['kelas'] = $this->Kelas_model->get_kelas();
        $this->load->view("layout/header", $data);
        $this->load->view("kelas/vw_kelas", $data);
        $this->load->view("layout/footer", $data);
    }

    function tambah()
    {
        $data['judul'] = "Halaman Tambah Kelas";
        $data['jurusan'] = $this->Jurusan_model->get();
        $data['guru'] = $this->Guru_model->get();
        $this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required', [
            'required' => 'Nama Kelas Wajib diisi',
        ]);
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required', [
            'required' => 'Jurusan Wajib diisi',
        ]);
        $this->form_validation->set_rules('tingkat', 'Tingkat ', 'required', [
            'required' => 'Tingkat Wajib diisi',
        ]);
        $this->form_validation->set_rules('wali_kelas', 'Wali Kelas', 'required', [
            'required' => 'Wali Kelas Wajib diisi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("kelas/vw_tambah_kelas", $data);
            $this->load->view("layout/footer");
        }
        else {
            $data = [
                'nama_kelas' => $this->input->post('nama_kelas'),
                'tingkat' => $this->input->post('tingkat'),
                'jurusan' => $this->input->post('jurusan'),
                'wali_kelas' => $this->input->post('wali_kelas'),
            ];
            $this->Kelas_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Kelas Berhasil Ditambah!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>');
            redirect('Kelas');
        }
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Kelas";
        $data['kelas'] = $this->Kelas_model->getById($id);
        $data['jurusan'] = $this->Jurusan_model->get();
        $data['guru'] = $this->Guru_model->get();
        $this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required', [
            'required' => 'Nama Kelas Wajib diisi',
        ]);
        $this->form_validation->set_rules('jurusan', 'Jurusan Kerja ', 'required', [
            'required' => 'Jurusan Kerja Wajib diisi',
        ]);
        $this->form_validation->set_rules('tingkat', 'Tingkat ', 'required', [
            'required' => 'Tingkat Wajib diisi',
        ]);
        $this->form_validation->set_rules('wali_kelas', 'Wali Kelas ', 'required', [
            'required' => 'Wali Kelas Wajib diisi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("kelas/vw_ubah_kelas", $data);
            $this->load->view("layout/footer");
        }
        else {
            $data = [
                'nama_kelas' => $this->input->post('nama_kelas'),
                'tingkat' => $this->input->post('tingkat'),
                'jurusan' => $this->input->post('jurusan'),
                'wali_kelas' => $this->input->post('wali_kelas'),
            ];
            $where = ['id_kelas' => $id];

            $this->Kelas_model->update($where, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Kelas Berhasil Diubah!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>');
            redirect('Kelas');
        }
    }
    function hapus($id)
    {
        $this->Kelas_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Guru Gagal Dihapus!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
        }
        else {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Guru Berhasil Dihapus!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>');
        }
        redirect('Kelas');
    }

}
?>