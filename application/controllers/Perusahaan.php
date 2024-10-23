<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Perusahaan_model');

    }

    public function index()
    {
        $data['judul'] = "Halaman Data Perusahaan";
        $data['perusahaan'] = $this->Perusahaan_model->get();
        $this->load->view("layout/header");
        $this->load->view("perusahaan/vw_perusahaan", $data);
        $this->load->view("layout/footer");
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Perusahaan";
        $data['perusahaan'] = $this->Perusahaan_model->get();
        $this->form_validation->set_rules('namaperusahaan', 'Nama Perusahaan', 'required|is_unique[perusahaan.namaperusahaan]', [
            'required' => 'Nama Perusahaan Wajib diisi',
            'is_unique' => 'Nama Perusahaan sudah ada, silakan masukkan nama perusahaan yang berbeda',
        ]);
        $this->form_validation->set_rules('bidang', 'Bidang', 'required', [
            'required' => 'Bidang Wajib diisi',
        ]);
        $this->form_validation->set_rules('alamat_p', 'Alamat Perusahaan', 'required', [
            'required' => 'Alamat Perusahaan Wajib diisi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("perusahaan/vw_tambah_perusahaan", $data);
            $this->load->view("layout/footer");
        }
        else {
            $data = [
                'namaperusahaan' => $this->input->post('namaperusahaan'),
                'bidang' => $this->input->post('bidang'),
                'alamat_p' => $this->input->post('alamat_p'),
            ];
            $this->Perusahaan_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Perusahaan Berhasil Ditambah!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>');
            redirect('Perusahaan');
        }
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Perusahaan";
        $data['perusahaan'] = $this->Perusahaan_model->getById($id);
        $this->form_validation->set_rules('namaperusahaan', 'Nama Perusahaan', 'required', [
            'required' => 'Nama Perusahaan Wajib diisi',
        ]);
        $this->form_validation->set_rules('bidang', 'Bidang', 'required', [
            'required' => 'Bidang  Wajib diisi',
        ]);
        $this->form_validation->set_rules('alamat_p', 'Alamat Perusahaan', 'required', [
            'required' => 'Alamat Perusahaan Wajib diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("perusahaan/vw_ubah_perusahaan", $data);
            $this->load->view("layout/footer");
        }
        else {
            $data = [
                'namaperusahaan' => $this->input->post('namaperusahaan'),
                'bidang' => $this->input->post('bidang'),
                'alamat_p' => $this->input->post('alamat_p'),

            ];
            $where = ['id_perusahaan' => $id];

            $this->Perusahaan_model->update($where, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Perusahaan Berhasil Diubah!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>');
            redirect('Perusahaan');
        }
    }
    function hapus($id)
    {
        $this->Perusahaan_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Perusahaan Berhasil Dihapus!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>');
        redirect('Perusahaan');
    }

}
?>