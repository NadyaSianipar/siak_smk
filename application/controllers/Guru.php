<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Guru_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Guru";
        $data['guru'] = $this->Guru_model->get();
        $this->load->view("layout/header");
        $this->load->view("guru/vw_guru", $data);
        $this->load->view("layout/footer");
    }

    function tambah()
    {
        $data['judul'] = "Halaman Tambah Guru";
        $data['guru'] = $this->Guru_model->get();
        $this->form_validation->set_rules('nama', 'Nama Guru', 'required', [
            'required' => 'Nama Guru Wajib diisi',
        ]);
        $this->form_validation->set_rules('nip', 'NIP', 'required', [
            'required' => 'NIP Wajib diisi',
        ]);
        $this->form_validation->set_rules('password', 'Password ', 'required', [
            'required' => 'Password wajib diisi',
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat wajib diisi',
        ]);
        $this->form_validation->set_rules('jk', 'Jenis Kelamin ', 'required', [
            'required' => 'Jenis Kelamin Wajib diisi',
        ]);
        $this->form_validation->set_rules('agama', 'Agama', 'required', [
            'required' => 'Agama Wajib diisi',
        ]);
        $this->form_validation->set_rules('tmptlahir', 'Tempat Lahir ', 'required', [
            'required' => 'Tempat Lahir Wajib Diisi',
        ]);
        $this->form_validation->set_rules('tgllahir', 'Tanggal Lahir ', 'required', [
            'required' => 'Tanggal Lahir Wajib Diisi',
        ]);
        $this->form_validation->set_rules('notelp', 'No Telepon ', 'required', [
            'required' => 'No Telepon Wajib Diisi',
        ]);
        

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("guru/vw_tambah_guru", $data);
            $this->load->view("layout/footer");
        }
        else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nip' => $this->input->post('nip'),
                'password' => $this->input->post('password'),
                'alamat' => $this->input->post('alamat'),
                'jk' => $this->input->post('jk'),
                'agama' => $this->input->post('agama'),
                'tmptlahir' => $this->input->post('tmptlahir'),
                'tgllahir' => $this->input->post('tgllahir'),
                'notelp' => $this->input->post('notelp'),
            ];
            $this->Guru_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Guru Berhasil Ditambah!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>');
            redirect('Guru');
        }
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Data Guru";
        $data['guru'] = $this->Guru_model->getById($id);
        $this->form_validation->set_rules('nama', 'Nama Guru', 'required', [
            'required' => 'Nama Guru Wajib diisi',
        ]);
        $this->form_validation->set_rules('nip', 'NIP', 'required', [
            'required' => 'NIP Wajib diisi',
        ]);
        $this->form_validation->set_rules('password', 'Password ', 'required', [
            'required' => 'Password wajib diisi',
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat wajib diisi',
        ]);
        $this->form_validation->set_rules('jk', 'Jenis Kelamin ', 'required', [
            'required' => 'Jenis Kelamin Wajib diisi',
        ]);
        $this->form_validation->set_rules('agama', 'Agama', 'required', [
            'required' => 'Agama Wajib diisi',
        ]);
        $this->form_validation->set_rules('tmptlahir', 'Tempat Lahir ', 'required', [
            'required' => 'Tempat Lahir Wajib Diisi',
        ]);
        $this->form_validation->set_rules('tgllahir', 'Tanggal Lahir ', 'required', [
            'required' => 'Tanggal Lahir Wajib Diisi',
        ]);
        $this->form_validation->set_rules('notelp', 'No Telepon ', 'required', [
            'required' => 'No Telepon  Wajib Diisi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("guru/vw_ubah_guru", $data);
            $this->load->view("layout/footer");
        }
        else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nip' => $this->input->post('nip'),
                'password' => $this->input->post('password'),
                'alamat' => $this->input->post('alamat'),
                'jk' => $this->input->post('jk'),
                'agama' => $this->input->post('agama'),
                'tmptlahir' => $this->input->post('tmptlahir'),
                'tgllahir' => $this->input->post('tgllahir'),
                'notelp' => $this->input->post('notelp'),
            ];
            $where = ['id_guru' => $id];

            $this->Guru_model->update($where, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Guru Berhasil Diubah!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>');
            redirect('Guru');
        }
    }
    function detail($id)
    {
        $data['judul'] = "Halaman Detail Guru";
        $data['guru'] = $this->Guru_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("guru/vw_detail_guru", $data);
        $this->load->view("layout/footer", $data);
    }
    function hapus($id)
    {
        $this->Guru_model->delete($id);
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
        redirect('Guru');
    }

}
?>