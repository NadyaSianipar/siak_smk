<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mapel_model');
        $this->load->model('Guru_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Data Mata Pelajaran";
        $data['mapel'] = $this->Mapel_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("mapel/vw_mapel", $data);
        $this->load->view("layout/footer");
    }

    function tambah()
    {
        $data['judul'] = "Halaman Tambah Data Mata Pelajaran";
        $data['mapel'] = $this->Mapel_model->get();
        $this->form_validation->set_rules('mapel', 'Nama Mata Pelajaran', 'required', [
            'required' => 'Nama Mata Pelajaran Wajib diisi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("mapel/vw_tambah_mapel", $data);
            $this->load->view("layout/footer");
        }
        else {
            $data = [
                'mapel' => $this->input->post('mapel'),
            ];
            $this->Mapel_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Pelajaran Berhasil Ditambah!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>');
            redirect('Mapel');
        }
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Pelajaran";
        $data['mapel'] = $this->Mapel_model->getById($id);
        $this->form_validation->set_rules('mapel', 'Nama Mata Pelajaran', 'required', [
            'required' => 'Nama Mata Pelajaran Wajib diisi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("mapel/vw_ubah_mapel", $data);
            $this->load->view("layout/footer");
        }
        else {
            $data = [
                'mapel' => $this->input->post('mapel'),
            ];
            $where = ['id' => $id];

            $this->Mapel_model->update($where, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Pelajaran Berhasil Diubah!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>');
            redirect('Mapel');
        }
    }
    function hapus($id)
    {
        $this->Mapel_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Mata Pelajaran Gagal Dihapus!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
        }
        else {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mata Pelajaran Berhasil Dihapus!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>');
        }
        redirect('Mapel');
    }



}
?>